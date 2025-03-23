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
        ["IndiGo", "Mumbai to Goa", 4500],
        ["Air India", "Delhi to Goa", 6000],
        ["SpiceJet", "Chennai to Goa", 5000],
        ["Vistara", "Bangalore to Goa", 5500],
        ["GoAir", "Hyderabad to Goa", 5200]
    ],
    "Buses" => [
        ["VRL Travels", "Mumbai to Goa", 1200],
        ["Kadamba Transport", "Bangalore to Goa", 900],
        ["SRS Travels", "Hyderabad to Goa", 1100],
        ["Neeta Travels", "Pune to Goa", 1300],
        ["KPN Travels", "Chennai to Goa", 1400]
    ],
    "Trains" => [
        ["Konkan Kanya Express", "Mumbai to Goa", 800],
        ["Goa Express", "Delhi to Goa", 1500],
        ["Chennai Express", "Chennai to Goa", 950],
        ["Matsyagandha Express", "Bangalore to Goa", 1000],
        ["Vasco Express", "Hyderabad to Goa", 1100]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Goa Travel Details</title>
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
        <a href="goa.php">Home</a>
        <a href="goa-packages.php">Packages</a>
        <a href="ghotels.php">Hotels</a>
        <a href="gtravel_details.php">Travelling Details</a>
        <a href="gguide.php">Guide Details</a>
        <a href="feedback.php">Feedback</a>
    </div>
    <div class="content">
        <header>
            <h1>Travelling Details - Goa</h1>
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
