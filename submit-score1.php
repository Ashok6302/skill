<?php
session_start();

$score = $_REQUEST["score"];
if (isset($_SESSION['name'])) {
    $studentName = $_SESSION['name'];
    $studentRegID = $_SESSION["id"];

    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "onlinecourse2";

    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve current quiz score
    $select_query = "SELECT points FROM students WHERE Regno = $studentRegID";
    $result = mysqli_query($conn, $select_query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $currentScore = $row['points']; // Corrected the column name here

        // Add new score to the current score
        $newScore = $currentScore + $score;

        // Update the database with the new combined score
        $update_query = "UPDATE students SET points = '$newScore' WHERE Regno = '$studentRegID'";

        if (mysqli_query($conn, $update_query)) {
            echo "Score updated successfully!";
        } else {
            echo "Error updating score: " . mysqli_error($conn);
        }
    } else {
        echo "Error retrieving current score.";
    }

    mysqli_close($conn);
} else {
    echo "Session not set or username not found.";
}
?>
