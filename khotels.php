<?php
$kerala_packages = [
    [
        "name" => "Alleppey Houseboat Experience",
        "location" => "Alleppey Backwaters",
        "price_per_night" => 8500,
        "rooms" => [
            [
                "type" => "Standard Houseboat",
                "price" => 8500,
                "max_persons" => 2,
            ],
            [
                "type" => "Luxury Houseboat",
                "price" => 14000,
                "max_persons" => 4,
            ]
        ]
    ],
    [
        "name" => "Munnar Hill Retreat",
        "location" => "Munnar Hills",
        "price_per_night" => 6500,
        "rooms" => [
            [
                "type" => "Deluxe Cottage",
                "price" => 6500,
                "max_persons" => 2,
            ],
            [
                "type" => "Family Suite",
                "price" => 12000,
                "max_persons" => 4,
            ]
        ]
    ],
    [
        "name" => "Kumarakom Lake Resort",
        "location" => "Kumarakom",
        "price_per_night" => 9000,
        "rooms" => [
            [
                "type" => "Water Villa",
                "price" => 9000,
                "max_persons" => 2,
            ],
            [
                "type" => "Private Pool Villa",
                "price" => 18000,
                "max_persons" => 4,
            ]
        ]
    ],
    [
        "name" => "Wayanad Nature Stay",
        "location" => "Wayanad",
        "price_per_night" => 7000,
        "rooms" => [
            [
                "type" => "Eco Cottage",
                "price" => 7000,
                "max_persons" => 2,
            ],
            [
                "type" => "Luxury Cabin",
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
    <title>Kerala Packages</title>
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
        <?php foreach ($kerala_packages as $package): ?>
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
        <a href="kerala.php" class="btn btn-primary">Back to Kerala</a>
    </footer>
</body>
</html>
