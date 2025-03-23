<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "travel");

// Check for connection error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch attractions from the database
$sql = "SELECT name FROM attractions";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Explore Kerala</title>
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
        <a href="kerala.php">Home</a>
        <a href="kerala-packages.php">Packages</a>
        <a href="khotels.php">Hotels</a>
        <a href="travel_details.php">Travelling Details</a>
        <a href="kguide.php">Guide Details</a>
        <a href="feedback.php">Feedback</a>
    </div>
    <div class="content">
        <header>
            <h1>Explore Kerala</h1>
        </header>
        <section class="info-section">
            <h2>About Kerala</h2>
            <p>Known as 'God's Own Country', Kerala is famous for its lush green landscapes, tranquil backwaters, and vibrant culture.</p>
            
            <h3>Attractions:</h3>
            <ul>
                <li>Alleppey Backwaters</li>
                <li>Munnar Tea Plantations</li>
                <li>Wayanad Wildlife Sanctuary</li>
                <li>Kochi Fort</li>
                <li>Kovalam Beach</li>
            </ul>

            <h3>Best Time to Visit:</h3>
            <p>September to March is the ideal time to visit Kerala.</p>

            <h3>Activities:</h3>
            <ul>
                <li>Houseboat cruises</li>
                <li>Exploring spice plantations</li>
                <li>Ayurvedic spa treatments</li>
                <li>Trekking in Wayanad</li>
                <li>Watching traditional Kathakali performances</li>
            </ul>
        </section>
        <a href="kregister.php" class="register-button">Register</a>
    </div>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
