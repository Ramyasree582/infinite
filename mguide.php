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

        <?php
        $packages = [
            [
                "title" => "5 Days, 4 Nights",
                "nights" => 4,
                "price" => 22000,
                "guide" => [
                    "name" => "Rajesh Sharma",
                    "experience" => "10 years",
                    "languages" => ["English", "Hindi"],
                    "contact" => "+91 9876543210"
                ]
            ],
            [
                "title" => "7 Days, 6 Nights",
                "nights" => 6,
                "price" => 35000,
                "guide" => [
                    "name" => "Anita Verma",
                    "experience" => "8 years",
                    "languages" => ["English", "Hindi", "Punjabi"],
                    "contact" => "+91 9876543220"
                ]
            ],
            [
                "title" => "3 Days, 2 Nights",
                "nights" => 2,
                "price" => 15000,
                "guide" => [
                    "name" => "Vikram Singh",
                    "experience" => "5 years",
                    "languages" => ["English", "Hindi"],
                    "contact" => "+91 9876543230"
                ]
            ],
            [
                "title" => "10 Days, 9 Nights",
                "nights" => 9,
                "price" => 60000,
                "guide" => [
                    "name" => "Pooja Thakur",
                    "experience" => "12 years",
                    "languages" => ["English", "Hindi", "French"],
                    "contact" => "+91 9876543240"
                ]
            ],
            [
                "title" => "Weekend Getaway",
                "nights" => 1,
                "price" => 8000,
                "guide" => [
                    "name" => "Arjun Mehta",
                    "experience" => "7 years",
                    "languages" => ["English", "Hindi", "Spanish"],
                    "contact" => "+91 9876543250"
                ]
            ]
        ];

        foreach ($packages as $package) {
            echo "<section class='package-info'>";
            echo "<h3>{$package['title']} - ₹" . number_format($package['price']) . "</h3>";
            echo "<p><strong>Guide Name:</strong> {$package['guide']['name']}</p>";
            echo "<p><strong>Experience:</strong> {$package['guide']['experience']}</p>";
            echo "<p><strong>Languages Spoken:</strong> " . implode(", ", $package['guide']['languages']) . "</p>";
            echo "<p><strong>Contact:</strong> {$package['guide']['contact']}</p>";
            echo "</section>";
        }
        ?>
    </div>
</body>
</html>