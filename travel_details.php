<?php
    $travel_options = [
        'Flights' => [
            ['From' => 'Delhi', 'To' => 'Kerala', 'Airline' => 'IndiGo', 'Cost' => '₹5,500'],
            ['From' => 'Mumbai', 'To' => 'Kerala', 'Airline' => 'Air India', 'Cost' => '₹6,000'],
            ['From' => 'Chennai', 'To' => 'Kerala', 'Airline' => 'SpiceJet', 'Cost' => '₹4,500'],
            ['From' => 'Bangalore', 'To' => 'Kerala', 'Airline' => 'Vistara', 'Cost' => '₹5,000'],
            ['From' => 'Hyderabad', 'To' => 'Kerala', 'Airline' => 'GoAir', 'Cost' => '₹5,200'],
            ['From' => 'Kolkata', 'To' => 'Kerala', 'Airline' => 'AirAsia', 'Cost' => '₹6,500'],
            ['From' => 'Ahmedabad', 'To' => 'Kerala', 'Airline' => 'IndiGo', 'Cost' => '₹5,800']
        ],
        'Trains' => [
            ['From' => 'Delhi', 'To' => 'Kerala', 'Train' => 'Kerala Express', 'Cost' => '₹2,500'],
            ['From' => 'Mumbai', 'To' => 'Kerala', 'Train' => 'Netravati Express', 'Cost' => '₹2,000'],
            ['From' => 'Chennai', 'To' => 'Kerala', 'Train' => 'Trivandrum Express', 'Cost' => '₹1,800'],
            ['From' => 'Bangalore', 'To' => 'Kerala', 'Train' => 'Island Express', 'Cost' => '₹1,700'],
            ['From' => 'Hyderabad', 'To' => 'Kerala', 'Train' => 'Sabari Express', 'Cost' => '₹2,200'],
            ['From' => 'Kolkata', 'To' => 'Kerala', 'Train' => 'Gurudev Express', 'Cost' => '₹3,000'],
            ['From' => 'Ahmedabad', 'To' => 'Kerala', 'Train' => 'Okha Express', 'Cost' => '₹2,700']
        ],
        'Buses' => [
            ['From' => 'Delhi', 'To' => 'Kerala', 'Operator' => 'KSRTC', 'Cost' => '₹3,500'],
            ['From' => 'Mumbai', 'To' => 'Kerala', 'Operator' => 'VRL Travels', 'Cost' => '₹3,000'],
            ['From' => 'Chennai', 'To' => 'Kerala', 'Operator' => 'SRS Travels', 'Cost' => '₹1,500'],
            ['From' => 'Bangalore', 'To' => 'Kerala', 'Operator' => 'KPN Travels', 'Cost' => '₹1,800'],
            ['From' => 'Hyderabad', 'To' => 'Kerala', 'Operator' => 'Orange Travels', 'Cost' => '₹2,200'],
            ['From' => 'Kolkata', 'To' => 'Kerala', 'Operator' => 'Eagle Travels', 'Cost' => '₹3,200'],
            ['From' => 'Ahmedabad', 'To' => 'Kerala', 'Operator' => 'Gujarat Travels', 'Cost' => '₹3,100']
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Details</title>
    <link href="css/styles.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        h1, h2 {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Travel Options to Kerala</h1>
        <?php foreach ($travel_options as $type => $options): ?>
            <h2><?php echo $type; ?></h2>
            <table>
                <tr>
                    <th>From</th>
                    <th>To</th>
                    <th><?php echo ($type === 'Flights') ? 'Airline' : (($type === 'Trains') ? 'Train' : 'Operator'); ?></th>
                    <th>Cost</th>
                </tr>
                <?php foreach ($options as $option): ?>
                    <tr>
                        <td><?php echo $option['From']; ?></td>
                        <td><?php echo $option['To']; ?></td>
                        <td><?php echo $option[($type === 'Flights') ? 'Airline' : (($type === 'Trains') ? 'Train' : 'Operator')]; ?></td>
                        <td><?php echo $option['Cost']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endforeach; ?>
    </div>
</body>
</html>