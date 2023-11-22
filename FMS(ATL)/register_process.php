<?php
session_start();
include 'config.php'; // Include your database connection script

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    // Implement actual database query to check if the username or email already exist
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
    
        // Check if the username or email already exists in the database
        $check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
        $check_result = $conn->query($check_query);
    
        if ($check_result->num_rows > 0) {
            // Username or email already exists, so you can display an error message or redirect to the registration page with an error flag
            header("Location: register.php?error=2");
        } else {
            // Insert the new user into the database
            // This code is a simplified example and should be enhanced with validation and password hashing
            $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
            if ($conn->query($sql) === TRUE) {
                // Registration successful, redirect to the login page or some other page
                header("Location: login.php");
            } else {
                // Registration failed, you can display an error message or redirect to the registration page with an error flag
                header("Location: register.php?error=1");
            }
        }
    }
    
    // If the username or email doesn't exist, insert the new user into the database
    // This code is a simplified example and should be enhanced with validation and password hashing
    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
    if ($conn->query($sql) === TRUE) {
        // Registration successful, redirect to login page or some other page
        header("Location: login.php");
    } else {
        // Registration failed, you can display an error message or redirect to the registration page with an error flag
        header("Location: register.php?error=1");
    }
}
?>
