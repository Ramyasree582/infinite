<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Goa Packages</title>
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
        <a href="goa.php">Back to Goa</a>
    </div>
    <div class="content">
        <header>
            <h1>Goa Packages</h1>
        </header>

        <!-- Package Details -->
        <?php
        $package = [
            [
                "title" => "Goa Bliss Retreat",
                "nights" => 4,
                "price" => 22000,
                "attractions" => [
                    "Beaches" => ["Candolim Beach", "Sinquerim Beach"],
                    "Historical Sites" => ["Chapora Fort", "Se Cathedral"],
                    "Other Attractions" => ["Sunset Cruise on Mandovi River"]
                ]
            ],
            [
                "title" => "Golden Sands Escape",
                "nights" => 6,
                "price" => 32000,
                "attractions" => [
                    "Beaches" => ["Calangute Beach", "Colva Beach"],
                    "Nature" => ["Dudhsagar Waterfalls", "Spice Plantation Tour"],
                    "Local Markets" => ["Anjuna Flea Market"]
                ]
            ],
            [
                "title" => "Tropical Adventure",
                "nights" => 2,
                "price" => 16000,
                "attractions" => [
                    "Beaches" => ["Vagator Beach", "Morjim Beach"],
                    "Activities" => ["Jet Skiing", "Dolphin Watching"],
                    "Dining" => ["Goan Seafood Experience"]
                ]
            ],
            [
                "title" => "Ultimate Goa Experience",
                "nights" => 9,
                "price" => 55000,
                "attractions" => [
                    "Beaches" => ["Palolem Beach", "Ashwem Beach", "Butterfly Beach"],
                    "Adventure" => ["Scuba Diving", "Parasailing"],
                    "Cultural Experiences" => ["Goa Carnival", "Night Market Music Festival"]
                ]
            ],
            [
                "title" => "Sunset Weekend Special",
                "nights" => 1,
                "price" => 9000,
                "attractions" => [
                    "Beaches" => ["Miramar Beach"],
                    "Relaxation" => ["Beachside Spa"],
                    "Dining" => ["Authentic Goan Dinner"]
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
