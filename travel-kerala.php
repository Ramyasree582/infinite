<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Explore Kerala</title>
    <link href="css/styles.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            margin: 0;
        }
        .sidebar {
            width: 250px;
            background-color: #f8f9fa;
            height: 100vh;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }
        .content {
            flex: 1;
            padding: 20px;
        }
        .sidebar a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #333;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .sidebar a:hover {
            background-color: #007bff;
            color: white;
        }
        .info-section {
            margin: 20px 0;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .info-section h2 {
            margin-bottom: 15px;
        }
        .register-button {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Menu</h2>
        <a href="kerala-packages.php">Packages</a>
        <a href="khotels.php">Hotels</a>
        <a href="travel_details.php">Travelling Details</a>
    </div>
    <div class="content">
        <header>
            <h1>Explore Kerala</h1>
        </header>

        <section class="info-section">
            <h2>About Kerala</h2>
            <p>Known as 'God's Own Country', Kerala is a stunning state located in the southern part of India. It is famous for its lush green landscapes, tranquil backwaters, and vibrant culture. Kerala offers an enchanting experience for nature and culture lovers alike.</p>
            <h3>Attractions:</h3>
            <ul>
                <li>Alleppey Backwaters</li>
                <li>Munnar Tea Plantations</li>
                <li>Wayanad Wildlife Sanctuary</li>
                <li>Kochi Fort</li>
                <li>Kovalam Beach</li>
            </ul>
            <h3>Best Time to Visit:</h3>
            <p>September to March is the ideal time to visit Kerala for its pleasant weather and festivals.</p>
            <h3>Activities:</h3>
            <ul>
                <li>Houseboat cruises on the backwaters</li>
                <li>Exploring spice plantations</li>
                <li>Ayurvedic spa treatments</li>
                <li>Trekking in Wayanad</li>
                <li>Watching traditional Kathakali performances</li>
            </ul>
        </section>

        <!-- Register Button -->
        <a href="register.php" class="btn btn-primary register-button">Register</a>
    </div>
</body>
</html