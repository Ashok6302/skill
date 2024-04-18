<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study buddy Dashboard</title>
    <style>
        body {
            background-image: url('busbackground.avif');
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:white;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #172b3f;
            color: white;
            padding: 10px 20px;
        }
        .logo {
            display: flex;
            align-items: center;
        }
        .logo img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }
        .nav-links {
            display: flex;
            gap: 20px;
            color: white;
            margin: 0;
            padding: 0;
        }
        .dashboard {
            display: flex;
            justify-content: center;
            
            align-items: center;
            flex-wrap: wrap;
            padding: 20px;
        }
        .dashboard-item {
            background-color: white;
            border-radius: 10px;
            padding: 5px;
            margin: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            min-width: 95%;
        }
        .dashboard-item img {
            width: 60px;
            height: 60px;
            margin-bottom: 0px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">
           
            <h1>Study Buddy</h1>
        </div>
        <ul class="nav-links">
            <li><a href="index.php" style="text-decoration:none">User Login</a></li>
            <li><a href="admin/index.php" style="text-decoration:none">Admin Login</a></li>
           
           
        </ul>
    </div>
   <br><center> <img src="image/studylogin.png" width="500" height="500"> </center></br>

</body>
</html>