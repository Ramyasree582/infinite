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
        <a href="ladakh.php">Back to Ladakh</a>
    </div>
    <div class="content">
        <header>
            <h1>Ladakh Packages</h1>
        </header>

        <?php
        $packages = [
            [
                "title" => "Ladakh Adventure Retreat",
                "nights" => 4,
                "price" => 28000,
                "attractions" => ["Pangong Lake", "Hemis Monastrey"],
                "guides" => [
                    ["name" => "Tenzing Dorje", "phone" => "9876541111", "languages" => "English, Hindi", "experience" => 8],
                    ["name" => "Sonam Wangchuk", "phone" => "9876542222", "languages" => "English, Ladakhi", "experience" => 6],
                ]
            ],
            [
                "title" => "Frozen Lakes Expendition",
                "nights" => 6,
                "price" => 40000,
                "attractions" => ["Ponkong Lake", "Shanti Stupa", "Khardung La Pass"],
                "guides" => [
                    ["name" => "Dorje Namgyal", "phone" => "9876543333", "languages" => "English, Hindi", "experience" => 10],
                    ["name" => "Pema Tashi", "phone" => "9876544444", "languages" => "English, Tibetan", "experience" => 7],
                ]
            ],
            [
                "title" => "Leh-Ladakh Getaway",
                "nights" => 2,
                "price" => 18000,
                "attractions" => ["Leh Market", "Shey Monastery", "River Rafting"],
                "guides" => [
                    ["name" => "Stanzin Norbu", "phone" => "9876545555", "languages" => "English, Ladakhi", "experience" => 9],
                    ["name" => "Lobsang Phuntsok", "phone" => "9876546666", "languages" => "Hindi, Tibetan", "experience" => 5],
                ]
            ],
            [
                "title" => "Himalayan Explorer",
                "nights" => 9,
                "price" => 60000,
                "attractions" => ["Tso Moriri Lake", "Monastery Circuit", "Camping under Stars"],
                "guides" => [
                    ["name" => "Ngawang Tsering", "phone" => "9876547777", "languages" => "English, Hindi, Ladakhi", "experience" => 12],
                    ["name" => "Rigzin Dolma", "phone" => "9876548888", "languages" => "English, Tibetan", "experience" => 10],
                ]
            ],
            [
                "title" => "Weekend Escape to Leh",
                "nights" => 1,
                "price" => 12000,
                "attractions" => ["Hall of Fame Museum", "Local Ladakhi Cuisine"],
                "guides" => [
                    ["name" => "Kunzang Tharchin", "phone" => "9876549999", "languages" => "English, Ladakhi", "experience" => 6],
                    ["name" => "Padma Choskit", "phone" => "9876540000", "languages" => "Hindi, Tibetan", "experience" => 4],
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
