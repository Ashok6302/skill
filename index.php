<?php
session_start();
error_reporting(0);
include("includes/config.php");
if(isset($_POST['submit']))
{
    $Regno=$_POST['Regno'];
    $Password= $_POST['Password'];

    $Statement = "SELECT * FROM students WHERE Regno='$Regno' and Password='$Password'";

$query=mysqli_query($con, $Statement);
$num=mysqli_fetch_array($query);
if($num>0)
{
$extra="page2.php";
$_SESSION['login']=$_POST['Regno'];
$_SESSION['id']=$num['Regno'];
$_SESSION['sid']=$num['id'];

$_SESSION['name']=$num['UserName'];
$_SESSION['course']=$num['course'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
// $log=mysqli_query($con,"insert into userlog values('".$_SESSION['login']."','$uip','$status')");
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
// exit();
}
else
{
$_SESSION['errmsg']="Invalid Reg no or Password";
$extra="index.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Student Login</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <style>
 *{
    font-family: sans-serif;
  }
  
        a {
            color: #f5f5f5;
            text-decoration: none;
        }
        label{
            font-size: 16px;
            font-weight: 300;
        }
        button{
            font-weight:600;
            font-size: 16px;
        }
/* 
        .panel-default > .panel-heading {
    color: #0e66d3;
    font-size: 24px;
    font-weight: 700;
    background-color: #f5f5f5;
    border-color: #5405b9;
} */
body {
    background-image: url(image/bg.png);
    background-size: cover;
    background-repeat: no-repeat;

}

.navbar-nav li a:hover {
    color: #1851ff !important;
}.btn-info {
    color: black;
    background-color: #0f6063;
    border-color: #46b8da;
}

label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: bold;
}

    </style>
</head>
<body>
<div class="navbar navbar-inverse set-radius-zero"
    style = "height: 76px;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="#" style=" font-size:35px; line-height:3px; ">
                   <!-- STUDY MATE
                   <br><br> -->
                   <img src="image/log2.jpeg" width="150" style="margin-top: 5px;">

                </a>
              

            </div>

            <div class="right-div">
                <div class="navbar-collapse collapse px-0">
                    <ul id="menu-top" class="nav navbar-nav">
                        <li class=""><a href="admin/page1.php">Home</a></li>
                        <li class=""><a href="index.php">User Login</a></li>
                        <li class=""><a href="admin/index.php">Admin Login</a></li>
                        
                    </ul>
                </div>
            </div>
            </div>
        </div>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- <h4 class="page-head-line">Please Login To Enter </h4> -->

                </div>

            </div>
            <div class="row" >
                  <div class="col-md-3"></div>
                    <div class="col-md-6" >
                        <div class="panel panel-default" style="    height: 32em;  box-shadow: 5px 5px grey;">
                        <div class="panel-heading">
                           User Login
                        </div>
             <span style="color:red;    margin-left: 16px;" ><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></span>
            
             <div class="panel-body">
             <form name="Student" method="post">
            <div class="row"><br>
                <div class="col-md-6" style="margin-left: 127px;">
                        <label>Enter Reg no : </label>
                        <input type="text" name="Regno" class="form-control"required/><br>
                        <label>Enter Password :  </label>
                        <input type="password" name="Password" class="form-control" required />
                        <hr />
                        <button type="submit" name="submit" class="btn btn-info" style="     color: aliceblue;   background-color: #31b0d5;
    border-color: #31b0d5;"><span class="glyphicon glyphicon-user"></span> Login</button>&nbsp;
                        <!-- <button type="submit" name="signup" class="btn btn-info"><span class="glyphicon glyphicon-user"><a href="signup.php"></span> &nbsp;Sign up </a></button>&nbsp; -->
                        <!-- <button type="submit" name="home" class="btn btn-info"><span class="glyphicon glyphicon-home"><a href="page1.php" style="color: #000;"></span> Home</a></button>&nbsp; -->
                        
                </div>
                </form>
                <!-- <div class="col-md-6">
                    <div class="alert alert-info">
                        This is a Study buddy app  with basic Courses. 
                        From Saveetha School of Engineering
                        <br />
                         <strong> Some of its features are given below :</strong>
                        <ul>
                            <li>
                                 Responsive Classes Used
                            </li>
                            <li>
                                Easy to use and customize
                            </li>
                            <li>
                                Font awesome icons included
                            </li>
                            <li>
                                Clean and light code used.
                            </li>
                        </ul>
                       
                    </div>
                                    </div> -->

            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <!-- <?php include('includes/footer.php');?> -->
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>