<?php
// Handle comment submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];
    $password = $_POST["password"];
    $username = $_POST["username"];


    // Insert the comment into the database
    // Ensure proper validation and sanitization

    // Return a response (e.g., success or error message)
}

// Fetch comments from the database
// Execute an SQL query to retrieve comments

// Return comments as JSON
// You may need to encode the comments as JSON and echo them


    // Hash the password using a strong hashing algorithm
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);

    // Store user data in the database
    // Perform necessary validation and error handling

    // Redirect to login page or display a success message

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $emailOrUsername = $_POST["email_or_username"];
    $password = $_POST["password"];

    // Retrieve user data from the database based on email/username
    // Verify the provided password against the stored password hash

    if ('Password is correct') {
        // Start a session and store user information in session variables
        // Redirect to the user's dashboard or another protected page
    } else {
        // Display an error message for incorrect credentials
    }
}
session_start();

// Check if the user is logged in and retrieve user data from session variables
if (isset($_SESSION["user_id"])) {
    $userId = $_SESSION["user_id"];
    // Fetch user data from the database based on user ID
} else {
    // User is not logged in, redirect to login page
}


// Handle logout request
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["logout"])) {
    // Destroy the session
    session_destroy();
    // Redirect to the login page or another page
}
?>