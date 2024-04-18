<?php
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>
    <link rel="stylesheet" href="styles1.css">
    <style>
        body{
            margin: 0;
    background-color: #C7F3C0;
    padding: 123px;
   
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 3px solid #4EB33E;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h1 {
            padding: 15px;
            margin-left: 500px;
        }
    </style>
</head>
<header>
<center> <h2 class="logo">java</h2></center>
    <div class="navbar">
       <a href="pincode-verification.php">Home</a>
        <a href="Examination.php">Examination</a>
        <a href="about.php">About</a>
    </div>
</header>
<body>
<h1>CERTIFICATE</h1>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlinecourse2";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['get_certificate'])) {
    // SQL query to fetch the overall points and certificate for the logged-in user
    $sql = "SELECT students SET points = $points WHERE studentName = '$username'";
    $result = $conn->query($sql);

    if ($result !== false && $result->num_rows > 0) {
        // Output data for the logged-in user
        echo "<table border='1'><tr><th>Username</th><th>Overall Points</th><th>Certificate</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["username"] . "</td><td>" . $row["allpoints"] . "</td><td>";

            // Check if overall points are greater than 10 and display the appropriate certificate image
            if ($row["allpoints"] > 30) {
                echo "<img src='certificate_3.png' alt='Certificate 3'>";
            } elseif ($row["allpoints"] > 20) {
                echo "<img src='certificate_2.png' alt='Certificate 2'>";
            } elseif ($row["allpoints"] > 10) {
                echo "<img src='certificate_1.png' alt='Certificate 1'>";
            } else {
                echo "No certificate";
            }

            echo "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No certificate found for the logged-in user";
    }
}
// Close the database connection
$conn->close();
?>

</body>
</html>
