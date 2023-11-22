<!DOCTYPE html>
<html>
<head>
    <title>FlavorWheels - Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f1f6f9;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
            font-size: 36px;
            margin-top: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            width: 300px;
            margin: 0 auto;
        }

        label {
            display: block;
            text-align: left;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 90%;
            padding: 10px;
            margin: 2px 0px;
            border: 2px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            padding: 10px 8px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            margin-top: 12px;
        }
    </style>
</head>
<body>
    <h2>Register with FlavorWheels</h2>
    <!-- POST USE TO SEND DATA TO RESOURCE -->
    <form method="post" action="register_process.php">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <input type="submit" value="Register">
    </form>
</body>
</html>

