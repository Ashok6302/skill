<?php
session_start();
include('includes/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {
    // Include your database connection code here
    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "onlinecourse2";

    $db_connection = new mysqli($db_host, $db_username, $db_password, $db_name);

    if ($db_connection->connect_error) {
        die("Connection failed: " . $db_connection->connect_error);
    }

    // Query to retrieve user scores
    $query = "SELECT Regno, UserName, SUM(points) AS total_points 
              FROM students 
              GROUP BY Regno, UserName 
              ORDER BY total_points DESC";

    $result = $db_connection->query($query);

    if ($result->num_rows > 0) {
        $scoreboardData = array();
        while ($row = $result->fetch_assoc()) {
            $scoreboardData[] = $row;
        }
    } else {
        $scoreboardData = array();
    }

    // Close the database connection
    $db_connection->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Score Login</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td
         {
            border: 3px solid #4EB33E;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h1 
        {
            padding: 15px;
        }
        th,td 
        {
    border: 3px solid #808dff;
    padding: 8px;
    text-align: left;
}

        
body {
    margin: 0;
    background-color: #eaebf4;
}
    </style>
</head>

<body style="    background-color: #5791d959;">
<?php $activePage = basename($_SERVER['PHP_SELF'],".php"); ?>


    <?php include('includes/header.php'); ?>

    <center><h1>Scoreboard</h1></center>

    <?php if (!empty($scoreboardData)) : ?>
        <table>
            <tr>
                <th>Register No</th>
                <th>User Name</th>
                <th>Score</th>
            </tr>
            <?php foreach ($scoreboardData as $row) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['Regno']); ?></td>
                    <td><?php echo htmlspecialchars($row['UserName']); ?></td>
                    <td><?php echo $row['total_points']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else : ?>
        <p>No scores found.</p>
    <?php endif; ?>
    <style>
        /* Style for the form */
        form {
            text-align: center;
            margin-top: 20px;
        }

        /* Style for the submit button */
        input[type="submit"] {
            background-color: #808dff;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>

    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    </body>
</html>