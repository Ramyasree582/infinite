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
        ["IndiGo", "Delhi to Manali", 7000],
        ["Air India", "Mumbai to Manali", 9500],
        ["SpiceJet", "Chennai to Manali", 8700],
        ["Vistara", "Bangalore to Manali", 8900],
        ["GoAir", "Hyderabad to Manali", 8300]
    ],
    "Buses" => [
        ["HRTC", "Delhi to Manali", 1400],
        ["Volvo", "Chandigarh to Manali", 1200],
        ["HPTDC", "Shimla to Manali", 1500],
        ["Private Bus", "Jaipur to Manali", 2200],
        ["HRTC", "Dehradun to Manali", 2000]
    ],
    "Trains" => [
        ["Shatabdi Express", "Delhi to Manali", 1600],
        ["Paschim Express", "Mumbai to Manali", 2100],
        ["Himalayan Queen", "Kolkata to Manali", 1900],
        ["Rajdhani Express", "Bangalore to Manali", 2600],
        ["Chennai Express", "Chennai to Mamali", 2800]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Manali Travel Details</title>
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
        <a href="manali.php">Home</a>
        <a href="manali-packages.php">Packages</a>
        <a href="manali-hotels.php">Hotels</a>
        <a href="manali-travel_details.php">Travelling Details</a>
        <a href="manali-guide.php">Guide Details</a>
        <a href="feedback.php">Feedback</a>
    </div>
    <div class="content">
        <header>
            <h1>Travelling Details - Manali</h1>
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
