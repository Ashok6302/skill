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
<title>Examination </title>
  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <style>
    

        .subject-box {
            border: 2px solid #528FF0;
            padding: 20px;
            margin: 20px 0;
            border-radius: 5px;
            text-align: center;
            background-color: #fff;
        }

        .subject-title {
            font-size: 20px;
            font-weight: bold;
        }

        .subject-description {
            font-size: 16px;
            margin-top: 10px;
        }
    </style>
    
</head>
<body>
<?php include('includes/header.php');?>
    <!-- LOGO HEADER END-->
<?php if($_SESSION['login']!="")
{
 include('includes/menubar.php');
}
?>
    <div class="container">
        <div class="subject-box">
            <div class="subject-title">C programming</div>
            <a href="quizz2.php?course=<?php echo $_GET['course']; ?>">
            <div class="subject-description"> 1. Click to start the test.</div>

            </a>
        </div>
        <!-- Add more subject boxes as needed -->
    </div>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
