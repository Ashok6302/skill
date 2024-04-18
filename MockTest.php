<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MockTest</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <style>
        .section-box {
            border: 2px solid #172b3f; /* Light Navy Blue Border */
            color: black; /* Text color changed to black */
            padding: 20px;
            margin: 10px 0;
            border-radius: 5px;
        }

        .section-title {
            font-size: 24px;
            margin-bottom: 10px;
            font-weight: bold; /* Make headings bold */
        }

        .section-description 
        {
            font-size: 16px;
        }

        .btn-start-mocktest
        {
            background-color: #007BFF; /* Blue color for the button */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body style="    background-color: #5791d959;">
<?php $activePage = basename($_SERVER['PHP_SELF'],".php"); ?>

<?php include('includes/header.php');?>
    <!-- LOGO HEADER END-->
<?php if($_SESSION['login']!="")
{
//  include('includes/menubar.php');
}
 ?>

<div class="container">
    <h1>Welcome to Mock Test</h1>
    <p>This is a mock test page for the Certification Process.</p>
    <center><a href="payment.php" class="btn-start-mocktest">Start Mock Test</a></center>

    <div class="section-box">
        <div class="section-title">Examination Conditions</div>
        <div class="section-description">
            <div class="instruction-section">
                <p>1. Please ensure that you are in a quiet and distraction-free environment.</p>
                <p>2. Keep all electronic devices, books, and notes away from your workspace.</p>
                <p>3. Follow the provided instructions and time limits for each section of the exam.</p>
                <!-- Add more instructions as needed -->
            </div>
        </div>
    </div>

    <div class="section-box">
        <div class="section-title">About the Sections</div>
        <div class="section-description">
            <p>1. 20 MCQ's are presented.</p>
            <p>2. No negative Marks.</p>
            <p>3. More than 50% will be issued Certification.</p>
        </div>
    </div>

    <div class="section-box">
        <div class="section-title">Certification Process</div>
        <div class="section-description">
            <h4>Issuing Certification</h4>
            <p>Upon successful completion of the exam and meeting all the required criteria, a certification will be issued to you.</p>
            <p>The certification will be sent to your registered email address within 7-10 business days.</p>
        </div>
    </div>
<!-- </div> -->
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
