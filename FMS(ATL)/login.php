<!DOCTYPE html>
<html>
<head>
    <title>FlavorWheels - Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f2f3f9;
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
            padding: 30px;
            border-radius: 3px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 3);
            width: 300px;
            margin: 0 auto;
        }

        label {
            display: block;
            text-align: left;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 2px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h2>Login to FlavorWheels</h2>
    <form method="post" action="login_process.php">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <input type="submit" value="Login">
    </form>
</body>
</html>


