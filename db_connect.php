<?php
$servername = "localhost"; 
$username = "root";  // Default  XAMPP
$password = "";  // Leave blank for XAMPP
$dbname = "travel_booking";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
