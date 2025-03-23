<?php
$manali_packages = [
    [
        "name" => "Solang Valley Resort",
        "location" => "Near Solang Valley",
        "price_per_night" => 6500,
        "rooms" => [
            [
                "type" => "Deluxe Room",
                "price" => 6500,
                "max_persons" => 2,
            ],
            [
                "type" => "Luxury Suite",
                "price" => 11000,
                "max_persons" => 3,
            ]
        ]
    ],
    [
        "name" => "Manali Grand Hotel",
        "location" => "Manali City",
        "price_per_night" => 5000,
        "rooms" => [
            [
                "type" => "Super Deluxe Room",
                "price" => 5000,
                "max_persons" => 2,
            ],
            [
                "type" => "Royal Suite",
                "price" => 14000,
                "max_persons" => 4,
            ]
        ]
    ],
    [
        "name" => "Himalayan Retreat",
        "location" => "Old Manali",
        "price_per_night" => 7200,
        "rooms" => [
            [
                "type" => "Standard Room",
                "price" => 7200,
                "max_persons" => 2,
            ],
            [
                "type" => "Family Suite",
                "price" => 12500,
                "max_persons" => 4,
            ]
        ]
    ],
    [
        "name" => "Snow Peak Lodge",
        "location" => "Near Hadimba Temple",
        "price_per_night" => 5800,
        "rooms" => [
            [
                "type" => "Cozy Cabin",
                "price" => 5800,
                "max_persons" => 2,
            ],
            [
                "type" => "Mountain View Suite",
                "price" => 13000,
                "max_persons" => 4,
            ]
        ]
    ]
];
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
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f7f7f7;
        }
        .package {
            margin-bottom: 30px;
            padding: 15px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .package h2 {
            color: #007bff;
        }
        .room {
            margin-top: 15px;
            padding: 15px;
            background-color: #f1f8ff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .room-details {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="package-list">
        <?php foreach ($manali_packages as $package): ?>
            <div class="package">
                <h2><?php echo $package['name']; ?></h2>
                <p><strong>Location:</strong> <?php echo $package['location']; ?></p>
                <p><strong>Starting Price per Night:</strong> ₹<?php echo number_format($package['price_per_night']); ?></p>

                <h3>Room Types:</h3>
                <?php foreach ($package['rooms'] as $room): ?>
                    <div class="room">
                        <div class="room-details">
                            <p><strong>Type:</strong> <?php echo $room['type']; ?></p>
                            <p><strong>Price per Night:</strong> ₹<?php echo number_format($room['price']); ?></p>
                            <p><strong>Maximum Occupancy:</strong> <?php echo $room['max_persons']; ?> persons</p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>

    <footer>
        <a href="manali.php" class="btn btn-primary">Back to Manali</a>
    </footer>
</body>
</html>
