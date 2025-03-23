<?php
session_start();
include "db.php"; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $phone = $_POST["phone"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Encrypt password

    // Insert user into the database
    $stmt = $conn->prepare("INSERT INTO users (username, email, dob, phone, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $username, $email, $dob, $phone, $password);

    if ($stmt->execute()) {
        $_SESSION["username"] = $username;
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sign Up - The Infinite Road</title>
    <link href="css/styles.css" rel="stylesheet">
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            text-align: left;
            margin: 10px 0 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: 0.3s;
        }

        button:hover {
            background: #218838;
        }

        p {
            margin-top: 10px;
            font-size: 14px;
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
        <h2>Sign Up</h2>
        <form action="signup.php" method="POST">
            <label>Username:</label>
            <input type="text" name="username" required>

            <label>Email ID:</label>
            <input type="email" name="email" required>

            <label>Date of Birth:</label>
            <input type="date" name="dob" required>

            <label>Phone Number:</label>
            <input type="tel" name="phone" pattern="[0-9]{10}" required placeholder="Enter 10-digit phone number">

            <label>Password:</label>
            <input type="password" name="password" required>

            <button type="submit">Sign Up</button>
        </form>
        <p>Already have an account? <a href="login.php">Login here</a>.</p>
    </div>
</body>
</html>