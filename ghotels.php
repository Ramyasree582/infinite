<?php
$goa_packages = [
    [
        "name" => "Goa Beach Resort",
        "location" => "Near Baga Beach",
        "price_per_night" => 6000,
        "rooms" => [
            [
                "type" => "Standard Room",
                "price" => 6000,
                "max_persons" => 2
            ],
            [
                "type" => "Deluxe Room",
                "price" => 8000,
                "max_persons" => 2
            ]
        ]
    ],
    [
        "name" => "Heritage Goa Hotel",
        "location" => "Near Panjim",
        "price_per_night" => 5000,
        "rooms" => [
            [
                "type" => "Luxury Suite",
                "price" => 5000,
                "max_persons" => 3
            ],
            [
                "type" => "Presidential Suite",
                "price" => 12000,
                "max_persons" => 4
            ]
        ]
    ],
    [
        "name" => "Sunset Paradise Hotel",
        "location" => "South Goa",
        "price_per_night" => 7000,
        "rooms" => [
            [
                "type" => "Ocean View Room",
                "price" => 7000,
                "max_persons" => 2
            ],
            [
                "type" => "Executive Suite",
                "price" => 10000,
                "max_persons" => 3
            ]
        ]
    ],
    [
        "name" => "Blue Lagoon Retreat",
        "location" => "Candolim Beach",
        "price_per_night" => 5500,
        "rooms" => [
            [
                "type" => "Garden View Room",
                "price" => 5500,
                "max_persons" => 2
            ],
            [
                "type" => "Private Villa",
                "price" => 15000,
                "max_persons" => 4
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
    <title>Goa Packages</title>
    <link href="css/styles.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f7f7f7;
        }
        .package-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .package {
            width: 350px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .package:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        .package h2 {
            color: #007bff;
            margin-bottom: 10px;
        }
        .room {
            margin-top: 15px;
            padding: 15px;
            background-color: #f1f8ff;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .room-details {
            margin-top: 10px;
        }
        .btn {
            display: inline-block;
            padding: 10px 15px;
            margin-top: 15px;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            text-align: center;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        footer {
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center; color: #333;">Explore Goa Packages</h1>
    <div class="package-list">
        <?php foreach ($goa_packages as $package): ?>
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
        <a href="goa.php" class="btn">Back to Goa</a>
    </footer>
</body>
</html>
