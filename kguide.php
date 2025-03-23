<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kerala Packages</title>
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
        .package-info, .guide-info {
            margin: 20px 0;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .package-info h3, .guide-info h3 {
            margin-bottom: 15px;
        }
        .package-info ul, .guide-info ul {
            list-style-type: none;
            padding-left: 0;
        }
        .package-info li, .guide-info li {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Menu</h2>
        <a href="kerala.php">Back to Kerala</a>
    </div>
    <div class="content">
        <header>
            <h1>Kerala Packages</h1>
        </header>

        <?php
        // Package details
        $packages = [
            [
                "title" => "5 Days, 4 Nights",
                "nights" => 4,
                "price" => 25000,
                "attractions" => ["Kovalam Beach", "Fort Kochi", "Backwater Tour"],
                "guides" => [
                    ["name" => "Rajesh Kumar", "phone" => "9876543210", "languages" => "English, Hindi, Malayalam", "experience" => 8],
                    ["name" => "Anita Das", "phone" => "9876543222", "languages" => "English, Tamil", "experience" => 5],
                ]
            ],
            [
                "title" => "7 Days, 6 Nights",
                "nights" => 6,
                "price" => 35000,
                "attractions" => ["Cherai Beach", "Padmanabhaswamy Temple", "Jew Town"],
                "guides" => [
                    ["name" => "Sunil Menon", "phone" => "9876543233", "languages" => "English, Malayalam", "experience" => 10],
                    ["name" => "Priya R", "phone" => "9876543244", "languages" => "English, Kannada", "experience" => 6],
                ]
            ],
            [
                "title" => "3 Days, 2 Nights",
                "nights" => 2,
                "price" => 15000,
                "attractions" => ["Kumarakom Beach", "Houseboat Ride"],
                "guides" => [
                    ["name" => "Ajay Varma", "phone" => "9876543255", "languages" => "English, Hindi", "experience" => 7],
                    ["name" => "Lakshmi Pillai", "phone" => "9876543266", "languages" => "Malayalam, Tamil", "experience" => 4],
                ]
            ],
            [
                "title" => "10 Days, 9 Nights",
                "nights" => 9,
                "price" => 55000,
                "attractions" => ["Muzhappilangad Beach", "Wayanad Trekking", "Kathakali Dance"],
                "guides" => [
                    ["name" => "Krishna Mohan", "phone" => "9876543277", "languages" => "English, Hindi, Malayalam", "experience" => 12],
                    ["name" => "Meera Nair", "phone" => "9876543288", "languages" => "English, Kannada, Tamil", "experience" => 9],
                ]
            ],
            [
                "title" => "Weekend Getaway",
                "nights" => 1,
                "price" => 8000,
                "attractions" => ["Kovalam Beach", "Local Kerala Cuisine"],
                "guides" => [
                    ["name" => "Ravi Shankar", "phone" => "9876543299", "languages" => "English, Malayalam", "experience" => 6],
                    ["name" => "Divya K", "phone" => "9876543300", "languages" => "Tamil, English", "experience" => 3],
                ]
            ]
        ];

        foreach ($packages as $package) {
            echo "<section class='package-info'>";
            echo "<h3>{$package['title']} - ₹" . number_format($package['price']) . "</h3>";
            echo "<p><strong>Attractions:</strong></p>";
            echo "<ul>";
            foreach ($package['attractions'] as $attraction) {
                echo "<li>{$attraction}</li>";
            }
            echo "</ul>";
            echo "</section>";

            echo "<section class='guide-info'>";
            echo "<h3>Guide Details for {$package['title']}</h3>";
            echo "<ul>";
            foreach ($package['guides'] as $guide) {
                echo "<li><strong>Name:</strong> {$guide['name']}</li>";
                echo "<li><strong>Phone:</strong> {$guide['phone']}</li>";
                echo "<li><strong>Languages Known:</strong> {$guide['languages']}</li>";
                echo "<li><strong>Experience:</strong> {$guide['experience']} years</li>";
                echo "<hr>";
            }
            echo "</ul>";
            echo "</section>";
        }
        ?>
    </div>
</body>
</html>
