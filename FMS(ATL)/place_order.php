<?php
// session_start();
// include 'config.php'; // Include your database connection script

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Check if the user is logged in
//     if (!isset($_SESSION["user_id"])) {
//         header("Location: login.php");
//         exit;
//     }

//     // Get user ID from the session
//     $user_id = $_SESSION["user_id"];

//     // Retrieve item_id and quantity from the form submission
//     $item_id = $_POST["item_id"];
//     $quantity = $_POST["quantity"];

//     // Insert the order into the "orders" table
//     $insert_sql = "INSERT INTO orders (user_id, item_id, quantity) VALUES ('$user_id', '$item_id', '$quantity')";

//     if ($conn->query($insert_sql) === true) {
//         // Order successfully recorded
//         echo "Order Successfully Placed!";
//     } else {
//         // Error occurred during order placement
//         echo "Error placing the order: " . $conn->error;
//     }
// } else {
//     // If the request method is not POST, redirect to the menu page
//     header("Location: menu.php");
// }
?>
