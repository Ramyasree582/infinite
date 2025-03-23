<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Goa Travel Guide</title>
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
        .guide-info {
            margin: 20px 0;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .guide-info h3 {
            margin-bottom: 15px;
        }
        .guide-info ul {
            list-style-type: none;
            padding-left: 0;
        }
        .guide-info li {
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
            <h1>Goa Travel Guide</h1>
        </header>

        <?php
        $guides = [
            [
                "hotel" => "Goa Beach Resort",
                "guides" => [
                    [
                        "name" => "Amit Sharma",
                        "phone" => "9876541111",
                        "languages" => "English, Hindi",
                        "experience" => 7
                    ],
                    [
                        "name" => "Sonia Mehta",
                        "phone" => "9876542222",
                        "languages" => "English, Marathi",
                        "experience" => 5
                    ]
                ]
            ],
            [
                "hotel" => "Heritage Goa Hotel",
                "guides" => [
                    [
                        "name" => "Rahul Verma",
                        "phone" => "9876543333",
                        "languages" => "English, Hindi, Konkani",
                        "experience" => 9
                    ],
                    [
                        "name" => "Priyanka Nair",
                        "phone" => "9876544444",
                        "languages" => "English, Malayalam",
                        "experience" => 6
                    ]
                ]
            ],
            [
                "hotel" => "Sunset Paradise Hotel",
                "guides" => [
                    [
                        "name" => "Vikram Shetty",
                        "phone" => "9876545555",
                        "languages" => "English, Konkani",
                        "experience" => 8
                    ],
                    [
                        "name" => "Megha Patil",
                        "phone" => "9876546666",
                        "languages" => "Hindi, Marathi",
                        "experience" => 4
                    ]
                ]
            ],
            [
                "hotel" => "Blue Lagoon Retreat",
                "guides" => [
                    [
                        "name" => "Ramesh Naik",
                        "phone" => "9876547777",
                        "languages" => "English, Hindi, Konkani",
                        "experience" => 12
                    ],
                    [
                        "name" => "Neha Joshi",
                        "phone" => "9876548888",
                        "languages" => "English, Kannada",
                        "experience" => 10
                    ]
                ]
            ]
        ];

        foreach ($guides as $guideData) {
            echo "<section class='guide-info'>";
            echo "<h3>Guide Details for " . $guideData['hotel'] . "</h3>";
            echo "<ul>";
            foreach ($guideData['guides'] as $guide) {
                echo "<li><strong>Name:</strong> " . $guide['name'] . "</li>";
                echo "<li><strong>Phone:</strong> " . $guide['phone'] . "</li>";
                echo "<li><strong>Languages Known:</strong> " . $guide['languages'] . "</li>";
                echo "<li><strong>Experience:</strong> " . $guide['experience'] . " years</li>";
                echo "<hr>";
            }
            echo "</ul>";
            echo "</section>";
        }
        ?>
    </div>
</body>
</html>
