<?php
$ladakh_packages = [
    [
        "name" => "Pangong Lake Retreat",
        "location" => "Near Pangong Lake",
        "price_per_night" => 7500,
        "rooms" => [
            [
                "type" => "Standard Tent",
                "price" => 7500,
                "max_persons" => 2,
            ],
            [
                "type" => "Luxury Cottage",
                "price" => 12000,
                "max_persons" => 3,
            ]
        ]
    ],
    [
        "name" => "Leh Grand Hotel",
        "location" => "Leh City",
        "price_per_night" => 5500,
        "rooms" => [
            [
                "type" => "Deluxe Room",
                "price" => 5500,
                "max_persons" => 2,
            ],
            [
                "type" => "Royal Suite",
                "price" => 15000,
                "max_persons" => 4,
            ]
        ]
    ],
    [
        "name" => "Nubra Valley Camp",
        "location" => "Nubra Valley",
        "price_per_night" => 6800,
        "rooms" => [
            [
                "type" => "Eco Tent",
                "price" => 6800,
                "max_persons" => 2,
            ],
            [
                "type" => "Premium Tent",
                "price" => 11000,
                "max_persons" => 3,
            ]
        ]
    ],
    [
        "name" => "Zanskar Retreat",
        "location" => "Zanskar Valley",
        "price_per_night" => 7200,
        "rooms" => [
            [
                "type" => "Standard Room",
                "price" => 7200,
                "max_persons" => 2,
            ],
            [
                "type" => "Luxury Suite",
                "price" => 13500,
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
    <title>Ladakh Packages</title>
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
        <?php foreach ($ladakh_packages as $package): ?>
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
        <a href="ladakh.php" class="btn btn-primary">Back to Ladakh</a>
    </footer>
</body>
</html>
