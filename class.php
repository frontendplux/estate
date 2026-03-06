<?php

if(session_status() === PHP_SESSION_NONE){
    session_start();
}

class Main {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

public function login($email_or_phone, $password){

    $stmt = $this->conn->prepare("
        SELECT id, uid, first_name, last_name, email, phone, password, status
        FROM users
        WHERE email = ? OR phone = ?
        LIMIT 1
    ");

    $stmt->bind_param("ss", $email_or_phone, $email_or_phone);
    $stmt->execute();

    $result = $stmt->get_result();

    if($result->num_rows === 0){
        return [
            "status" => false,
            "message" => "User not found"
        ];
    }

    $user = $result->fetch_assoc();

    // check account status
    if($user['status'] !== 'active'){
        return [
            "status" => false,
            "message" => "Account not active"
        ];
    }

    // verify password
    if(!password_verify($password, $user['password'])){
        return [
            "status" => false,
            "message" => "Invalid password"
        ];
    }

    // generate uid only if empty
    if(empty($user['uid'])){

        $email_name = explode('@', $user['email'])[0];
        $uid = strtoupper($email_name . "_" . bin2hex(random_bytes(3)));

        $stmt = $this->conn->prepare("UPDATE users SET uid=? WHERE id=? LIMIT 1");
        $stmt->bind_param("si", $uid, $user['id']);
        $stmt->execute();

        $user['uid'] = $uid;
    }

    // create session
    $_SESSION['id'] = $user['id'];
    $_SESSION['uid'] = $user['uid'];

    return [
        "status" => true,
        "message" => "Login successful",
        "user" => $user
    ];
}


public function register($fullname, $email, $phone, $password, $country_code = '+234', $referral_code = null) {

    $fullname = trim($fullname);
    $email = trim($email);
    $phone = trim($phone);

    // --- VALIDATION ---
    if(strlen($fullname) < 3){
        return ["status" => false, "message" => "Full name must be at least 3 characters"];
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return ["status" => false, "message" => "Invalid email address"];
    }

    if(!preg_match('/^[0-9]{10,11}$/', $phone)){
        return ["status" => false, "message" => "Invalid phone number"];
    }

    if(strlen($password) < 6){
        return ["status" => false, "message" => "Password must be at least 6 characters"];
    }

    // --- CHECK IF USER EXISTS ---
    $stmt = $this->conn->prepare("SELECT id FROM users WHERE email=? LIMIT 1");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        return ["status" => false, "message" => "Email  already registered"];
    }

    // --- HANDLE REFERRAL ---
    $referred_by = null;

    if(!empty($referral_code)){
        $stmt = $this->conn->prepare("SELECT id FROM users WHERE referral_code=? LIMIT 1");
        $stmt->bind_param("s", $referral_code);
        $stmt->execute();
        $res = $stmt->get_result();

        if($res->num_rows){
            $ref_user = $res->fetch_assoc();
            $referred_by = $ref_user['id'];
        }
    }

    // --- SPLIT NAME ---
    $name = explode(" ", $fullname, 2);
    $first = $name[0];
    $last = $name[1] ?? '';

    // --- HASH PASSWORD ---
    $hash = password_hash($password, PASSWORD_DEFAULT);

    // --- GENERATE UID ---
    $uid = strtoupper($first . "_" . bin2hex(random_bytes(3)));

    // --- GENERATE REFERRAL CODE ---
    $my_referral = "BIYI-" . strtoupper(bin2hex(random_bytes(3)));

    // --- INSERT USER ---
    $stmt = $this->conn->prepare("
        INSERT INTO users 
        (uid, first_name, last_name, email, phone, country_code, password, referral_code, referred_by)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");

    $stmt->bind_param(
        "ssssssssi",
        $uid,
        $first,
        $last,
        $email,
        $phone,
        $country_code,
        $hash,
        $my_referral,
        $referred_by
    );

    if(!$stmt->execute()){
        return ["status"=>false, "message"=>"Registration failed"];
    }

    $user_id = $stmt->insert_id;

    // --- CREDIT REFERRAL BALANCE ---
    if($referred_by){
        $ref_amount = 0; // your referral reward
        $this->conn->query("UPDATE users SET referral_balance = referral_balance + $ref_amount WHERE id = $referred_by");
        $this->conn->query("
            INSERT INTO referral_transactions (referrer_id, referred_user_id, amount)
            VALUES ($referred_by, $user_id, $ref_amount)
        ");
    }

    // --- AUTO LOGIN ---
    $_SESSION['id'] = $user_id;
    $_SESSION['uid'] = $uid;

    return [
        "status" => true,
        "message" => "Account created successfully",
        "user_id" => $user_id,
        "uid" => $uid
    ];
}


public  function usersData(){
    $user_id=$_SESSION['id'] ?? '';
    $uid=$_SESSION['uid'] ?? '';
    $smt=$this->conn->prepare("SELECT * FROM users where id=?  and uid=? limit 1");
    $smt->bind_param('is',$user_id,$uid);
    $smt->execute();
    $result=$smt->get_result();
    if($result->num_rows > 0){
        $user = $result->fetch_assoc();
        return ["status" => true , 'data' => $user];
    }
    return ['status' => false, 'data' =>  []];
}


public function isLogIn(){return $this->usersData()['status'];}

}