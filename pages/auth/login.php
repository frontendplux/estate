<?php
session_start(); // Must be at the very top

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Get your database data (e.g., from a MySQL query)
    // 2. Verify the password (e.g., using password_verify)
    
    $is_valid = true; // Replace this with your actual DB check logic
    $user_name = "John Doe"; // Get the registered name from your database

    if ($is_valid) {
        // Save the name in a session variable
        $_SESSION['username'] = $user_name;
        $_SESSION['loggedin'] = true;

        // Redirect to your homepage
        header("Location: /pages/landing/index.php");
        exit(); // Always use exit after a redirect
    } else {
        echo "Invalid login!";
    }
}
?>
