<?php
include 'db_connect.php';

$result = $conn->query("SELECT * FROM users ORDER BY name ASC");


echo "<h2>User Registrations</h2>";
echo "<table border='1'>
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>DOB</th>
<th>Country</th>
<th>Package</th>
<th>Hotel</th>
<th>Room</th>
<th>Persons</th>
<th>Registered On</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['name']}</td>
            <td>{$row['emailid']}</td>
            <td>{$row['phonenumber']}</td>
            <td>{$row['dob']}</td>
            <td>{$row['country']}</td>
            <td>{$row['package']}</td>
            <td>{$row['hotel']}</td>
            <td>{$row['room']}</td>
            <td>{$row['persons']}</td>
            <td>{$row['registration_date']}</td>
          </tr>";
}
echo "</table>";

$conn->close();
?>
