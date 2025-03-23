<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ladakh Packages</title>
    <link href="css/styles.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .sidebar {
            width: 250px;
            background-color: #f8f9fa;
            height: 100vh;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }
        .content {
            flex: 1;
            padding: 20px;
        }
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
        .package-info {
            margin: 20px 0;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .package-info h3 {
            margin-bottom: 15px;
        }
        .package-info ul {
            list-style-type: none;
            padding-left: 0;
        }
        .package-info li {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Menu</h2>
        <a href="ladakh.php">Back to Ladakh</a>
    </div>
    <div class="content">
        <header>
            <h1>Ladakh Packages</h1>
        </header>

        <!-- Package Details -->
        <?php
        $packages = [
            [
                "title" => "Ladakh Adventure Retreat",
                "nights" => 5,
                "price" => 28000,
                "attractions" => [
                    "Monasteries" => ["Hemis Monastery", "Thiksey Monastery"],
                    "Lakes" => ["Pangong Lake", "Tso Moriri"],
                    "Passes" => ["Khardung La Pass"]
                ]
            ],
            [
                "title" => "Frozen Lakes Expedition",
                "nights" => 7,
                "price" => 40000,
                "attractions" => [
                    "Lakes" => ["Pangong Lake", "Tso Kar"],
                    "Mountains" => ["Nubra Valley", "Changthang Plateau"],
                    "Cultural Sites" => ["Leh Palace", "Magnetic Hill"]
                ]
            ],
            [
                "title" => "Leh-Ladakh Getaway",
                "nights" => 3,
                "price" => 18000,
                "attractions" => [
                    "Monasteries" => ["Diskit Monastery", "Alchi Monastery"],
                    "Adventure" => ["River Rafting in Zanskar", "Biking at Khardung La"],
                    "Dining" => ["Traditional Ladakhi Cuisine"]
                ]
            ],
            [
                "title" => "Himalayan Explorer",
                "nights" => 10,
                "price" => 60000,
                "attractions" => [
                    "Valleys" => ["Zanskar Valley", "Markha Valley"],
                    "Adventure" => ["Trekking", "Camping under the Stars"],
                    "Cultural Experiences" => ["Local Homestay", "Ladakh Festival"]
                ]
            ],
            [
                "title" => "Weekend Escape to Leh",
                "nights" => 2,
                "price" => 12000,
                "attractions" => [
                    "Monasteries" => ["Shey Monastery"],
                    "Relaxation" => ["Hot Springs in Chumathang"],
                    "Dining" => ["Authentic Tibetan Food"]
                ]
            ]
        ];

        foreach ($packages as $package) {
            $totalCost = $package['price'];

            // Count total attractions
            $totalAttractions = 0;
            foreach ($package['attractions'] as $category => $attractions) {
                $totalAttractions += count($attractions);
            }

            // Calculate cost per attraction
            $costPerAttraction = $totalCost / $totalAttractions;

            echo "<section class='package-info'>";
            echo "<h3>{$package['title']} - ₹" . number_format($totalCost) . "</h3>";
            echo "<p>This package includes the following attractions:</p>";
            echo "<ul>";
            foreach ($package['attractions'] as $category => $attractions) {
                echo "<li><strong>{$category}:</strong>";
                echo "<ul>";
                foreach ($attractions as $attraction) {
                    echo "<li>{$attraction} - ₹" . number_format($costPerAttraction) . "</li>";
                }
                echo "</ul>";
                echo "</li>";
            }
            echo "</ul>";
            echo "</section>";
        }
        ?>
    </div>
</body>
</html>
