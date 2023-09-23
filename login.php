<?php
// login.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailOrUsername = $_POST["email_or_username"];
    $password = $_POST["password"];

    // Retrieve user data from the database based on email or username
    // Verify the provided password using password_verify

    // If login is successful, start a session and store user data in session variables
    session_start();
    $_SESSION["user_id"] = $user_id; // Replace with the actual user ID

    // Redirect to the user's dashboard or another protected page
    header("Location: dashboard.php");
    exit;
}
?>
