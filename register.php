<?php
// register.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Hash the password
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);

    // Insert user data into the database (ensure database connection)
    $pdo = new PDO("mysql:host=localhost;dbname=your_db_name", "your_db_user", "your_db_password");
    $stmt = $pdo->prepare("INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)");
    $stmt->execute([$username, $email, $passwordHash]);

    // Redirect to a success page or login page
    header("Location: login.html");
    exit;
}

// Handle registration form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Hash the password using a strong hashing algorithm
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);

    // Store user data in the database
    // Perform necessary validation and error handling

    // Redirect to login page or display a success message
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

