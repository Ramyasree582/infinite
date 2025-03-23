<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $feedback = trim($_POST['feedback'] ?? '');

    if (!empty($feedback)) {
        $conn = new mysqli("localhost", "root", "", "travel");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("INSERT INTO feedback (feedback_text) VALUES (?)");
        $stmt->bind_param("s", $feedback);

        if ($stmt->execute()) {
            header("Location: thankyou.php");
            exit();
        } else {
            echo "<p style='color: red;'>Error: " . $stmt->error . "</p>";
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "<p style='color: red;'>Please enter your feedback.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Feedback - Explore Kerala</title>
    <link href="css/styles.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .sidebar {
            width: 250px;
            background-color: #007bff;
            color: white;
            height: 100vh;
            padding: 20px;
            position: fixed;
        }
        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .sidebar a {
            display: block;
            padding: 10px;
            color: white;
            text-decoration: none;
            margin: 10px 0;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .content {
            margin-left: 270px;
            padding: 40px;
            flex: 1;
            text-align: center;
        }
        header h1 {
            font-size: 30px;
            color: #333;
        }

        .feedback-section {
            margin: 40px auto;
            padding: 30px;
            max-width: 600px;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .feedback-section h2 {
            color: #007bff;
            margin-bottom: 10px;
        }
        .feedback-section p {
            color: #666;
            font-size: 16px;
        }

        textarea {
            width: 100%;
            height: 120px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            resize: none;
            outline: none;
        }

        .submit-button {
            padding: 12px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            font-size: 18px;
            cursor: pointer;
            margin-top: 15px;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .submit-button:hover {
            background-color: #0056b3;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .content {
                margin-left: 0;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="content">
        <header>
            <h1>Feedback</h1>
        </header>

        <section class="feedback-section">
            <h2>We Value Your Feedback</h2>
            <p>Please share your feedback about our tourism services.</p>
            
            <form method="POST" action="feedback.php">
                <textarea name="feedback" placeholder="Write your feedback here..." required></textarea><br>
                <button type="submit" class="submit-button">Submit</button>
            </form>
        </section>
    </div>
</body>
</html>
