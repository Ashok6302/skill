<?php
session_start();
error_reporting(0);
include("includes/config.php");
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=($_POST['password']);
$query=mysqli_query($con,"SELECT * FROM admin WHERE username='$username' and password='$password'");
$num=mysqli_fetch_array($query);
if($num>0)
{
$extra="change-password.php";//
$_SESSION['alogin']=$_POST['username'];
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$_SESSION['errmsg']="Invalid username or password";
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

    <title>Admin Login</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <style>
        .btn-info {
    color: #fff;
    background-color: #0f6063;
    border-color: #46b8da;
}

a {
    color: #f5f5f5;
    text-decoration: none;
}body {
    background-image: url(image/bg3.png);
    background-size: cover;
    background-repeat: no-repeat;

}

    </style>
</head>
<body>
    <?php include('includes/header.php');?>
    <div class="content-wrapper">
        <div class="container">
        <div class="row" >
                  <div class="col-md-3"></div>
                    <div class="col-md-6" >
                        <div class="panel panel-default" style="    height: 32em;  box-shadow: 5px 5px grey;">
                        <div class="panel-heading">
                           Admin Login
                        </div>
             <span style="color:rgba(217, 217, 217, 1);" ><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></span>
             <div class="panel-body">
             <form name="admin" method="post">
            <div class="row"><br>
            <div class="col-md-6" style="margin-left: 127px;">
                     <label>Enter Username : </label>
                        <input type="text" name="username" class="form-control" required /><br>
                        <label>Enter Password :  </label>
                        <input type="password" name="password" class="form-control" required />
                        <hr />
                        <button type="submit" name="submit" class="btn btn-info"><span class="glyphicon glyphicon-user"></span> &nbsp;Log Me In </button>&nbsp;
                        <!-- <button type="submit" name="submit" class="btn btn-info"><span class="glyphicon glyphicon-user"><a href="page1.php"></span> &nbsp;Home</button>&nbsp;
                </div> -->
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
                                    </div>
 -->
            </div>
        </div>
    </div>

    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
