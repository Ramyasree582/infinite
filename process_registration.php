<?php
include 'db_connect.php';  // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $emailid = $_POST['emailid'];
    $phonenumber = $_POST['phonenumber'];
    $dob = $_POST['dob'];
    $country = $_POST['country'];
    $package = $_POST['packages'];
    $hotel = $_POST['hotel'];
    $room = $_POST['room'];
    $persons = $_POST['persons'];

    $stmt = $conn->prepare("INSERT INTO users (name, emailid, phonenumber, dob, country, package, hotel, room, persons) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssi", $name, $emailid, $phonenumber, $dob, $country, $package, $hotel, $room, $persons);

    if ($stmt->execute()) {
        echo "<script>
                alert('Registration Successful!');
                window.location.href='confirm_booking.php';
              </script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
