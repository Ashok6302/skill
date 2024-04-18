<DOCTYPE html> 
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" <meta name="viewport" content="width=device-width,initial-scale=1.0"> 
<title>quiz</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .navbar {
            background-color: #528FF0;
            color: white;
            padding: 10px 20px;
        }

        .navbar a {
            text-decoration: none;
            color: white;
            margin-right: 20px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .section-box {
            background-color: #528FF0;
            color: white;
            padding: 20px;
            margin: 10px 0;
            border-radius: 5px;
        }

        .section-title {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .section-description {
            font-size: 16px;
        }
    </style>
</head>
<body>
    <center> <h2 class="logo">java</h2></center>
    <div class="navbar">
       <a href="pincode-verification.php">Home</a>
        <a href="Examination.php">Examination</a>
        <a href="about.php">About</a>
    </div>
<?php
session_start();
// Initialize the score and total number of questions
$score = 0;
$totalQuestions = 0;

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection code here
    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "onlinecourse2";

    $db_connection = new mysqli($db_host, $db_username, $db_password, $db_name);

    if ($db_connection->connect_error) {
        die("Connection failed: " . $db_connection->connect_error);
    }

    // Calculate the score based on submitted answers
    if (isset($_POST['answers']) && is_array($_POST['answers'])) {
        foreach ($_POST['answers'] as $question_id => $selected_option_id) {
            $query = "SELECT correct_option FROM quizzes WHERE question_id = $question_id";
            $result = $db_connection->query($query);

            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                $correct_option_id = $row['correct_option'];

                // Check if the selected option is correct
                if ($selected_option_id == $correct_option_id) {
                    $score++;
                }
            }

            // Increment the total number of questions
            $totalQuestions++;
        }
    }

    // Close the database connection
    $db_connection->close();
}

// Calculate the percentage score
if ($totalQuestions > 0) {
    $percentageScore = ($points / $totalQuestions) * 100;
} else {
    $percentageScore = 0; // Avoid division by zero
}



if (isset($_SESSION['sname'])) 
{
    $username = $_SESSION['sname']; // Retrieve the username from the session
    // Include your database connection code here
    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "onlinecourse2";

    $db_connection = new mysqli($db_host, $db_username, $db_password, $db_name);

    if ($db_connection->connect_error) 
    {
        die("Connection failed: ".$db_connection->connect_error);
    }

    // Update the score based on the retrieved username
    $update_query = "UPDATE students SET points = $points WHERE studentName = '$username' ";
    $db_connection->query($update_query);


    echo '<div style="text-align: center;">';
    echo '<div style="border: 2px solid #333; padding: 20px; display: inline-block;">';
    echo '<p style="font-size: 24px; font-weight: bold; color: #333;">Your score: <span style="color: #FF5722;">' . number_format($percentageScore, 2) . '%</span></p>';
    echo '</div>';
    echo '</div>';
    // Display the percentage score
    echo '<div style="text-align: center; margin-top: 20px;">';
    echo '<form action="scoreboard.php" method="post">';
    echo '<input type="submit" name="scoreboard" value="Scoreboard" style="font-size: 16px; padding: 10px 20px; background: #4EB33E; color: #fff; border: none;">';
    echo '</form>';
    echo '</div>';
} 

else 
{
    
   echo'User not Found';
}
?>
<?php

// Check if the student is eligible for a certificate based on their score
if ($percentageScore >= 70) 
{
    // Provide a link to generate the certificate
    echo '<div class="certificate">';
    echo '<h2>Certificate Eligibility</h2>';
    echo '<p>Congratulations! You are eligible to generate a certificate.</p>';
    echo '<a href="generate_certificate.php">Generate Certificate</a>';
    echo '</div>';
} 
else 
{
    echo'$percentageScore';
    // Display a message indicating they are not eligible
    echo '<div class="certificate">';
    echo '<h2>Certificate Eligibility</h2>';
    echo '<p>Sorry, you are not eligible for a certificate as your score is below 70%.</p>';
    echo '</div>';
}
?>
