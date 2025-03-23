<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Manali Packages</title>
    <link href="css/styles.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            margin: 0;
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
        <a href="manali.php">Back to Manali</a>
    </div>
    <div class="content">
        <header>
            <h1>Manali Packages</h1>
        </header>

        <!-- Package Details -->
        <?php
        $packages = [
            [
                "title" => "5 Days, 4 Nights",
                "nights" => 4,
                "price" => 22000,
                "attractions" => [
                    "Adventure" => ["Paragliding", "Trekking", "River Rafting"],
                    "Nature" => ["Solang Valley", "Rohtang Pass", "Hidimba Temple"],
                    "Cultural Sites" => ["Manali Mall Road", "Old Manali"]
                ]
            ],
            [
                "title" => "7 Days, 6 Nights",
                "nights" => 6,
                "price" => 35000,
                "attractions" => [
                    "Adventure" => ["Skiing", "Snowboarding"],
                    "Nature" => ["Solang Valley", "Rohtang Pass", "Bhrigu Lake"],
                    "Cultural Sites" => ["Manali Mall Road", "Old Manali"]
                ]
            ],
            [
                "title" => "3 Days, 2 Nights",
                "nights" => 2,
                "price" => 15000,
                "attractions" => [
                    "Adventure" => ["Mountain Biking", "Horse Riding"],
                    "Nature" => ["Manu Temple", "Vashisht Hot Springs"],
                    "Shopping" => ["Mall Road Market"]
                ]
            ],
            [
                "title" => "10 Days, 9 Nights",
                "nights" => 9,
                "price" => 60000,
                "attractions" => [
                    "Adventure" => ["Paragliding", "Trekking", "River Rafting", "Skiing"],
                    "Nature" => ["Solang Valley", "Rohtang Pass", "Hidimba Temple", "Vashisht Hot Springs"],
                    "Cultural Sites" => ["Manali Mall Road", "Old Manali", "Naggar Castle"],
                    "Shopping" => ["Manali Market", "Tibetan Market"]
                ]
            ],
            [
                "title" => "Weekend Getaway",
                "nights" => 1,
                "price" => 8000,
                "attractions" => [
                    "Adventure" => ["Zip Lining", "Mountain Biking"],
                    "Nature" => ["Rohtang Pass"]
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
