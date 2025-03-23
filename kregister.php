<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register - Rooms & Packages</title>
    <link href="css/styles.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .form-container {
            max-width: 600px;
            margin: auto;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .form-group button {
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
        #success-message {
            display: none;
            color: green;
            margin-top: 10px;
        }
    </style>
    <script>
    function showSuccessMessage(event) {
        event.preventDefault();
        const message = document.getElementById('success-message');
        message.style.display = 'block';
        setTimeout(() => {
            window.location.href = 'confirm_booking.php';
        }, 2500);
    }
    </script>
</head>
<body>
    <div class="form-container">
        <h2>Register for Rooms & Packages</h2>
        <form method="POST" action="process_registration.php" onsubmit="showSuccessMessage(event)">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="emailid">Email ID</label>
                <input type="email" id="emailid" name="emailid" required>
            </div>
            <div class="form-group">
                <label for="phonenumber">Phone Number</label>
                <input type="text" id="phonenumber" name="phonenumber" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="hotel">Hotel Name</label>
                <select id="hotel" name="hotel" required>
                    <option value="">-- Select Hotel --</option>
                    <?php 
                    $hotels = mysqli_query($conn, "SELECT * FROM hotels");
                    while ($hotel = mysqli_fetch_assoc($hotels)) {
                        echo "<option value='{$hotel['id']}'>{$hotel['name']}</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="package">Package</label>
                <select id="package" name="package" required>
                    <option value="">-- Select Package --</option>
                    <?php 
                    $packages = mysqli_query($conn, "SELECT * FROM packages");
                    while ($package = mysqli_fetch_assoc($packages)) {
                        echo "<option value='{$package['id']}'>{$package['title']} - ₹{$package['price']}</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="room">Room Type</label>
                <select id="room" name="room" required>
                    <option value="">-- Select Room Type --</option>
                    <?php 
                    $rooms = mysqli_query($conn, "SELECT * FROM rooms");
                    while ($room = mysqli_fetch_assoc($rooms)) {
                        echo "<option value='{$room['id']}'>{$room['type']} - ₹{$room['price']} per night</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="persons">Number of Persons</label>
                <input type="number" id="persons" name="persons" min="1" required>
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
        <div id="success-message">Successfully Registered</div>
    </div>
</body>
</html>
