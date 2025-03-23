<?php
session_start();
include "db.php"; // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Retrieve user from database
    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $username, $hashed_password);
        $stmt->fetch();

        // Verify password
        if (password_verify($password, $hashed_password)) {
            $_SESSION["username"] = $username;
            $_SESSION["user_id"] = $id;
            header("Location: index.php");
            exit;
        } else {
            echo "<script>alert('Incorrect password');</script>";
        }
    } else {
        echo "<script>alert('User not found');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login - The Infinite Road</title>
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <label>Email ID:</label>
            <input type="email" name="email" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="signup.php">Sign Up here</a>.</p>
    </div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login - The Infinite Road</title>
    <link href="css/styles.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        p {
            margin-top: 10px;
        }
        a {
            text-decoration: none;
            color: #007BFF;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>
        <form action="login.php" method="POST">
            <label>Username:</label>
            <input type="text" name="username" required>
            <label>Password:</label>
            <input type="password" name="password" required>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="signup.php">Sign up here</a>.</p>
    </div>
</body>
</html>