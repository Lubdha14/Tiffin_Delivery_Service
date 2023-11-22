<!DOCTYPE html>
<html>
<head>
    <title>Tiffin Service App</title>
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

        .item {
            display: inline-block;
            vertical-align: top;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 10px;
        }

        .item img {
            max-width: 100%;
            height: auto;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 10px;
        }

        .item form {
            display: block;
        }

        label {
            display: block;
            text-align: left;
            margin-top: 10px;
        }

        input[type="number"] {
            width: 50px;
            padding: 5px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
</style>
<body>
<h2>Menu</h2>
<?php
include 'config.php'; // Include your database connection script
session_start();

if (isset($_SESSION["username"])) {
    echo "Hello, " . $_SESSION["username"] . "!<br><br>";

    $sql = "SELECT item_id, name, description, price, image_path FROM menu_items";
    $result = $conn->query($sql);

    if ($result === false) {
        die("Query error: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="item">';
            echo "<h3>" . $row["name"] . "</h3>";
            echo "<p>" . $row["description"] . "</p>";
            echo "<p>Price: $" . $row["price"] . "</p>";
            echo '<img src="' . $row['image_path'] . '" alt="' . $row['name'] . '"><br>';

            // Add a form for capturing the order
            echo '<form method="post" action="order_details.php">';
            echo '<input type="hidden" name="item_id" value="' . $row["item_id"] . '">';
            echo '<label for="quantity">Quantity:</label>';
            echo '<input type="number" name="quantity" id="quantity" value="1" min="1" required>';
            echo '<input type="submit" value="Order Now">';
            echo '</form>';
            echo '</div>';
        }
    } else {
        echo "No menu items available.";
    }
} else {
    echo "Please <a href='login.php'>Login</a> to view the menu.";
}
?>
</body>
</html>
