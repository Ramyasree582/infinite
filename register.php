<?php
include 'ghotels.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
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
    const hotelRooms = <?php echo json_encode(array_column($goa_packages, 'rooms', 'name')); ?>;

    function updateRoomOptions() {
        const hotelSelect = document.getElementById("hotel");
        const roomSelect = document.getElementById("room");
        const selectedHotel = hotelSelect.value;

        // Clear previous options
        roomSelect.innerHTML = "<option value=''>-- Select Room Type --</option>";

        if (selectedHotel && hotelRooms[selectedHotel]) {
            hotelRooms[selectedHotel].forEach(room => {
                const option = document.createElement("option");
                option.value = room['type'];
                option.textContent = room['type'];
                roomSelect.appendChild(option);
            });
        }
    }

    function showSuccessMessage(event) {
        event.preventDefault(); // Prevent form submission

        const message = document.getElementById('success-message');
        message.style.display = 'block';

        // Redirect after 2-3 seconds
        setTimeout(() => {
            window.location.href = 'confirm_booking.php';
        }, 2500); // 2.5 seconds delay
    }
</script>

</head>
<body>
    <div class="form-container">
        <h2>Register</h2>
        <form method="POST" action="process_registration.php" onsubmit="showSuccessMessage(event)">
            <div class="form-group">
                <label for="name">Name</label>
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
                <label for="country">Country</label>
                <select id="country" name="country" required>
                    <option value="">-- Select Country --</option>
                    <option value="India">India</option>
                    <option value="United States">United States</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Australia">Australia</option>
                    <option value="Canada">Canada</option>
                    <option value="Germany">Germany</option>
                    <option value="France">France</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Japan">Japan</option>
                    <option value="Brazil">Brazil</option>
                </select>
            </div>
            <div class="form-group">
                <label for="packages">Choose a Package</label>
                <select id="packages" name="packages" required>
                    <option value="">-- Select Package --</option>
                    <option value="Goa Bliss Retreat">Goa Bliss Retreat,22,000</option>
                    <option value="Golden Sands Escape">Golden Sands Escape,32,000</option>
                    <option value="Tropical Adventure">Tropical Adventure,16,000</option>
                    <option value="Ultimate Goa Experience">Ultimate Goa Experience,55,000</option>
                    <option value="Sunset Weekend Special">Sunset Weekend Special,9000</option>
                </select>
            </div>
            <div class="form-group">
                <label for="hotel">Choose a Hotel</label>
                <select id="hotel" name="hotel" required onchange="updateRoomOptions()">
                    <option value="">-- Select Hotel --</option>
                    <?php foreach ($goa_packages as $package): ?>
                        <option value="<?php echo $package['name']; ?>"><?php echo $package['name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="room">Room Type</label>
                <select id="room" name="room" required>
                    <option value="">-- Select Room Type --</option>
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