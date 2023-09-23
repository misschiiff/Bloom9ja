<?php
// forgot_password.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Generate a unique reset token (e.g., using random_bytes and bin2hex)
    $resetToken = bin2hex(random_bytes(32));

    // Store the reset token in the database along with the user's email
    // Send a password reset email with a link that includes the reset token
    // Include a link to a password reset page, passing the token as a query parameter
}
?>
<?php
// reset_password.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newPassword = $_POST["new_password"];
    $confirmPassword = $_POST["confirm_password"];
    $resetToken = $_GET["token"]; // Retrieve the token from the query parameter

    // Verify that newPassword matches confirmPassword
    if ($newPassword !== $confirmPassword) {
        // Display an error message
    } else {
        // Verify the reset token and update the user's password
        // Clear the reset token after successful password reset
        // Redirect to a success page or login page
    }
}
?>

<?php
// activate_account.php
$activationToken = $_GET["token"]; // Retrieve the token from the query parameter

// Verify the activation token and mark the user's account as activated
// Display a success message or error message if token is invalid
?>

