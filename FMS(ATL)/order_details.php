<!DOCTYPE html>
<html>
<head>
    <title>Tiffin Service App - Order Details</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
        }

        h3 {
            color: #3498db;
        }

        p {
            color: #666;
        }

        .container {
            max-width: 200px;
            margin: 0 auto;
            background-color: #fff;
            padding: 70px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            text-align: center;
            margin-top: 30px;
            color: #333;
        }

        input[type="text"],
        input[type="tel"],
        input[type="email"] {
            width: 70%;
            padding: 20px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            padding: 15px 20px;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }
    </style>

<body>
<h2>Order Details</h2>
<?php
include 'config.php'; // Include your database connection script
session_start();

if (isset($_SESSION["username"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Handle the form submission for user details
        $item_id = $_POST["item_id"];
        $quantity = $_POST["quantity"];
        
        // Check if user details are submitted
        if (isset($_POST["name"]) && isset($_POST["address"]) && isset($_POST["phone"]) && isset($_POST["email"])) {
            // Retrieve user details from the form submission
            $name = $_POST["name"];
            $address = $_POST["address"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];

            // Display user details
            echo "<p><strong>User Details:</strong></p>";
            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Address:</strong> $address</p>";
            echo "<p><strong>Phone Number:</strong> $phone</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Order Details:</strong></p>";
            echo "<p><strong>Product ID:</strong> $item_id</p>";
            echo "<p><strong>Quantity:</strong> $quantity</p>";
            echo "Submitted Successfully!";
            // Add a button to redirect to the menu page
            echo '<br><a href="menu.php"><button>Procced for Payment</button></a>';
   
        } else {
            // Display the user details form
            echo '<form method="post" action="order_details.php">';
            echo '<input type="hidden" name="item_id" value="' . $item_id . '">';
            echo '<input type="hidden" name="quantity" value="' . $quantity . '">';
            echo '<label for="name">Name:</label>';
            echo '<input type="text" name="name" id="name" required>';
            echo '<label for="address">Address:</label>';
            echo '<input type="text" name="address" id="address" required>';
            echo '<label for="phone">Phone Number:</label>';
            echo '<input type="tel" name="phone" id="phone" required>';
            echo '<label for="email">Email:</label>';
            echo '<input type="email" name="email" id="email" required>';
            
            echo '<input type="submit" value="Submit Order">';
            echo '</form>';
        }
    } else {
        echo "Please fill in your user details.";
    }
} else {
    echo "Please <a href='menu.php'>Login</a> to view the menu.";
}
?>
</body>
</html>
