<?php
session_start();
require __DIR__.'/../conn.php';
require __DIR__.'/../class.php';

$input = json_decode(file_get_contents('php://input'), true);
$uid = $input['uid'] ?? '';
$email = $input['email'] ?? '';
$fullname = $input['fullname'] ?? '';

if(!$uid || !$email){
    echo json_encode(['status'=>false, 'message'=>"Invalid data"]);
    exit;
}

$db = new Database();
$conn = $db->connect();
$main = new Main($conn);

// Check if user exists
$stmt = $conn->prepare("SELECT id FROM users WHERE email=? LIMIT 1");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0){
    $user = $result->fetch_assoc();
    $_SESSION['id'] = $user['id'];
    $_SESSION['uid'] = $uid;

    $stmt = $conn->prepare("UPDATE users SET uid=? WHERE id=? LIMIT 1");
    $stmt->bind_param("si", $uid, $user['id']);
    $stmt->execute();

    echo json_encode(['status'=>true]);
} else {
    // Register user
    $password = password_hash(uniqid(), PASSWORD_DEFAULT); // random password
    $stmt = $conn->prepare("INSERT INTO users (first_name, email, password, uid, status) VALUES (?, ?, ?, ?, 'active')");
    $stmt->bind_param("ssss", $fullname, $email, $password, $uid);
    $stmt->execute();

    $_SESSION['id'] = $stmt->insert_id;
    $_SESSION['uid'] = $uid;

    echo json_encode(['status'=>true]);
}
?>