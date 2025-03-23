<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "travel");

// Check for connection error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch attractions from the database
$sql = "SELECT name FROM manali_attractions";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Explore Manali</title>
    <link href="css/styles.css" rel="stylesheet">
    <style>
        body { display: flex; margin: 0; font-family: Arial, sans-serif; }
        .sidebar { width: 250px; background-color: #f8f9fa; height: 100vh; padding: 20px; }
        .content { flex: 1; padding: 20px; }
        .sidebar a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #333;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .sidebar a:hover {
            background-color: #007bff;
            color: white;
        }
        .info-section { margin: 20px 0; padding: 20px; background-color: #f9f9f9; }
        .register-button {
            display: inline-block;
            padding: 10px 15px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .register-button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Menu</h2>
        <a href="manali.php">Home</a>
        <a href="manali-packages.php">Packages</a>
        <a href="mhotels.php">Hotels</a>
        <a href="mtravel_details.php">Travelling Details</a>
        <a href="mguide.php">Guide Details</a>
        <a href="feedback.php">Feedback</a>
    </div>
    <div class="content">
        <header>
            <h1>Explore Manali</h1>
        </header>
        <section class="info-section">
            <h2>About Manali</h2>
            <p>Manali, a beautiful hill station in Himachal Pradesh, is famous for its scenic beauty, adventure activities, and vibrant culture.</p>
            
            <h3>Attractions:</h3>
            <ul>
                <li>Solang Valley</li>
                <li>Rohtang Pass</li>
                <li>Hadimba Temple</li>
                <li>Manikaran Gurudwara</li>
                <li>Old Manali</li>
            </ul>

            <h3>Best Time to Visit:</h3>
            <p>March to June and September to December are the ideal times to visit Manali.</p>

            <h3>Activities:</h3>
            <ul>
                <li>Paragliding in Solang Valley</li>
                <li>River rafting in Beas River</li>
                <li>Trekking to Hampta Pass</li>
                <li>Exploring Old Manali cafes</li>
                <li>Skiing at Rohtang Pass</li>
            </ul>
        </section>
        <a href="mregister.php" class="register-button">Register</a>
    </div>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>