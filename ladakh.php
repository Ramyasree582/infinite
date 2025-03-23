<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "travel");

// Check for connection error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch attractions from the database
$sql = "SELECT name FROM ladakh_attractions";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Explore Ladakh</title>
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
        <a href="ladakh.php">Home</a>
        <a href="ladakh-packages.php">Packages</a>
        <a href="lhotels.php">Hotels</a>
        <a href="ltravel_details.php">Travelling Details</a>
        <a href="lguide.php">Guide Details</a>
        <a href="feedback.php">Feedback</a>
    </div>
    <div class="content">
        <header>
            <h1>Explore Ladakh</h1>
        </header>
        <section class="info-section">
            <h2>About Ladakh</h2>
            <p>Known for its breathtaking landscapes, Buddhist monasteries, and adventurous trekking routes, Ladakh is a dream destination for travelers.</p>
            
            <h3>Attractions:</h3>
            <ul>
                <li>Pangong Lake</li>
                <li>Magnetic Hill</li>
                <li>Nubra Valley</li>
                <li>Leh Palace</li>
                <li>Shanti Stupa</li>
            </ul>

            <h3>Best Time to Visit:</h3>
            <p>June to September is the ideal time to visit Ladakh.</p>

            <h3>Activities:</h3>
            <ul>
                <li>Biking on Khardung La Pass</li>
                <li>River rafting in Zanskar</li>
                <li>Exploring monasteries</li>
                <li>Camping near Pangong Lake</li>
                <li>Wildlife spotting at Hemis National Park</li>
            </ul>
        </section>
        <a href="lregister.php" class="register-button">Register</a>
    </div>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
