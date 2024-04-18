<?php
session_start();

$score = $_REQUEST["score"];
if (isset($_SESSION['name'], $_SESSION['selected_course'], $_SESSION['id'])) {
    $studentName   = $_SESSION['name'];
    $studentRegID  = $_SESSION["id"];
    $courseName = $_SESSION['selected_course'];

    $db_host        = "localhost";
    $db_username    = "root";
    $db_password    = "";
    $db_name        = "onlinecourse2";

    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare and execute SQL to update the score
    $update_query = "UPDATE students SET points = ? WHERE Regno = ? AND course = ?";
    $stmt = mysqli_prepare($conn, $update_query);
    mysqli_stmt_bind_param($stmt, "iss", $score, $studentRegID, $courseName);

    if (mysqli_stmt_execute($stmt)) {
        echo "Score updated successfully!";
    } else {
        echo "Error updating score: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Session not set or username/course name/id not found.";
}
?>
