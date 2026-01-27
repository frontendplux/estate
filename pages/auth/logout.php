<?php
// Start the session if it's not already started. This is necessary to access session data.
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Unset all of the session variables.
// This clears the user's specific data from the current session.
$_SESSION = array();

// If you want to kill the session completely, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session itself on the server.
session_destroy();

// Redirect the user to the homepage or login page after logging out.
header("Location: /"); // Redirects to the root homepage
exit(); // Always exit after a header redirect to stop further script execution
?>
