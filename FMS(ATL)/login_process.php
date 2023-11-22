<?php
session_start();
include 'config.php'; // Include your database connection script
// config.php  connection details
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieving and input:
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Implement actual database queries here to check the username and password

    // Sample code to check credentials (this is a simplified example)
    // retrieve a user from the database
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);
    // if returns at least one row (i.e., the username and password match a record in the database), the user is considered authenticated
    // username is stored in the session, and the user is redirected to the menu.php page.
    if ($result->num_rows > 0) {
        // User is authenticated
        $_SESSION["username"] = $username;
        header("Location: menu.php");
    } else {
        // Authentication failed, redirect to login with an error message
        header("Location: login.php?error=1");
    }
    // does not return any rows, the authentication failed, and the user is redirected back to the login page
}
?>
