<?php
// dashboard.php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["user_id"])) {
    // Redirect to the login page if not logged in
    header("Location: login.html");
    exit;
}

// You can display user-specific content here
?>
