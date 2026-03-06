<?php
require_once __DIR__.'/../conn.php';
session_start();
$db = new Database();
$conn = $db->connect();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $phone = trim($_POST['phone']);
    $country_code = trim($_POST['country_code']);
    $referral_input = trim($_POST['referral_code']);

    // -----------------------------
    // REQUIRED VALIDATION
    // -----------------------------
    if (empty($email) || empty($password) || empty($phone) || empty($country_code)) {
        die("All required fields must be filled.");
    }

    // -----------------------------
    // STRONG PASSWORD VALIDATION
    // -----------------------------
    if (
        strlen($password) < 8 ||
        !preg_match('/[A-Z]/', $password) ||
        !preg_match('/[a-z]/', $password) ||
        !preg_match('/[0-9]/', $password)
    ) {
        die("Password must be 8+ characters, include upper, lower and number.");
    }

    // -----------------------------
    // CHECK IF EMAIL EXISTS
    // -----------------------------
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {

        // =========================
        // LOGIN
        // =========================
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {

            $_SESSION['user_id'] = $user['id'];
            header("Location: dashboard.php");
            exit;

        } else {
            die("Invalid credentials.");
        }

    } else {

        // =========================
        // SIGNUP
        // =========================

        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Generate unique referral code
        $referral_code = "BIYI-" . strtoupper(substr(md5(uniqid()), 0, 6));

        $referred_by = NULL;

        // Check referral
        if (!empty($referral_input)) {
            $ref_stmt = $conn->prepare("SELECT id FROM users WHERE referral_code = ?");
            $ref_stmt->bind_param("s", $referral_input);
            $ref_stmt->execute();
            $ref_result = $ref_stmt->get_result();

            if ($ref_result->num_rows > 0) {
                $ref_user = $ref_result->fetch_assoc();
                $referred_by = $ref_user['id'];
            }
        }

        $insert = $conn->prepare("
            INSERT INTO users 
            (email, password, phone, country_code, referral_code, referred_by)
            VALUES (?, ?, ?, ?, ?, ?)
        ");

        $insert->bind_param(
            "sssssi",
            $email,
            $hashed_password,
            $phone,
            $country_code,
            $referral_code,
            $referred_by
        );

        if ($insert->execute()) {

            $new_user_id = $insert->insert_id;

            // =========================
            // ADD REFERRAL BONUS
            // =========================
            if ($referred_by !== NULL) {

                $bonus = 40000.00;

                $conn->query("
                    UPDATE users 
                    SET referral_balance = referral_balance + $bonus 
                    WHERE id = $referred_by
                ");

                $conn->query("
                    INSERT INTO referral_transactions 
                    (referrer_id, referred_user_id, amount)
                    VALUES ($referred_by, $new_user_id, $bonus)
                ");
            }

            $_SESSION['user_id'] = $new_user_id;
            header("Location: dashboard.php");
            exit;

        } else {
            die("Registration failed.");
        }
    }
}