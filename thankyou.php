<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Thank You</title>
    <style>
        /* General Styling */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #007bff, #00c6ff);
            text-align: center;
            font-family: 'Arial', sans-serif;
            color: white;
            padding: 20px;
        }
        
        /* Message Box */
        .message {
            background: white;
            color: #333;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            max-width: 500px;
            animation: fadeIn 1s ease-in-out;
        }

        .message h1 {
            font-size: 32px;
            margin-bottom: 10px;
            color: #007bff;
        }

        .message p {
            font-size: 20px;
            margin-top: 5px;
            color: #555;
        }

        /* Button Styling */
        .home-button {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background: #007bff;
            color: white;
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .home-button:hover {
            background: #0056b3;
        }

        /* Fade-in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="message">
        <h1>THANK YOU FOR YOUR FEEDBACK! 😊</h1>
        <p>HAPPY AND SAFE JOURNEY! ✈️🚗🏝️</p>
        <a href="index.php" class="home-button">Back to Home</a>
    </div>
</body>
</html>
