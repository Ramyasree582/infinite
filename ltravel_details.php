<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "travel");

// Check for connection error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sample data (Replace with database query if needed)
$transport_details = [
    "Flights" => [
        ["IndiGo", "Delhi to Leh", 7500],
        ["Air India", "Mumbai to Leh", 9000],
        ["SpiceJet", "Bangalore to Leh", 8500],
        ["Vistara", "Chennai to Leh", 8800],
        ["GoAir", "Hyderabad to Leh", 8200]
    ],
    "Buses" => [
        ["HRTC", "Manali to Leh", 1200],
        ["JK SRTC", "Srinagar to Leh", 1000],
        ["Private Bus", "Delhi to Leh", 2500],
        ["Ladakh Bus", "Jammu to Leh", 2000],
        ["HPTDC", "Shimla to Leh", 2200]
    ],
    "Trains" => [
        ["Jammu Tawi Express", "Delhi to Leh", 1500],
        ["Shalimar Express", "Mumbai to Leh", 2000],
        ["Himalayan Queen", "Kolkata to Leh", 1800],
        ["Rajdhani Express", "Bangalore to Leh", 2500],
        ["Chennai Express", "Chennai to Leh", 2700]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ladakh Travel Details</title>
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
        .info-section { margin: 20px 0; padding: 20px; background-color: #f9f9f9; border-radius: 5px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #007bff; color: white; }
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
            <h1>Travelling Details - Ladakh</h1>
        </header>

        <section class="info-section">
            <?php foreach ($transport_details as $category => $details) : ?>
                <h2><?= $category ?></h2>
                <table>
                    <tr>
                        <th>Transport</th>
                        <th>Route</th>
                        <th>Cost (₹)</th>
                    </tr>
                    <?php foreach ($details as $item) : ?>
                        <tr>
                            <td><?= $item[0] ?></td>
                            <td><?= $item[1] ?></td>
                            <td><?= number_format($item[2]) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endforeach; ?>
        </section>
    </div>
</body>
</html>

<?php
// Close database connection
$conn->close();
?>
