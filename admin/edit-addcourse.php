<?php
session_start();
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{
$id=intval($_GET['id']);
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );
if(isset($_POST['submit']))
{
$image=$_POST['image'];
$courseName=$_POST['courseName'];
$description=$_POST['description'];
$amount=$_POST['amount'];
$ret=mysqli_query($con,"update addcourses set image='$image',courseName='$courseName',description='$description',amount='$amount' where id='$id'");
if($ret)
{
$_SESSION['msg']="Course Updated Successfully !!";
}
else
{
  $_SESSION['msg']="Error : Course not Updated";
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
    <title>Admin | Course</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body style="    background-color: #5791d959;">
<?php include('includes/header1.php');?>
    <!-- LOGO HEADER END-->
<?php if($_SESSION['alogin']!="")
{
//  include('includes/menubar.php');
}
 ?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Course  </h1>
                    </div>
                </div>
                <div class="row" >
                  <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           Course 
                        </div>
<font color="green" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>


                        <div class="panel-body">
                       <form name="dept" method="post">
<?php
$sql=mysqli_query($con,"select * from addcourses where id='$id'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
<p><b>Last Updated at</b> :<?php echo htmlentities($row['updationDate']);?></p>
<div class="form-group">
                              <label for="coursecode">Course image </label>
                              <input class="form-control" type="file" name="image"  id="image"   required />
                            </div>

                          <div class="form-group">
                              <label for="coursename">Course Name  </label>
                              <input type="text" class="form-control" id="courseName" name="courseName" placeholder="Course Name" value="<?php echo htmlentities($row['courseName']);?>" required />
                            </div>

                          <div class="form-group">
                              <label for="courseunit">Description </label>
                              <textarea type="text" class="form-control" name="description" placeholder="description : "  cols="43" rows="5" style="    width: 530px;" value="<?php echo htmlentities($row['description']);?>" required ></textarea>
                            </div> 

                          <div class="form-group">
                              <label for="seatlimit">Amount</label>
                              <input type="text" class="form-control" id="amount" name="amount" placeholder="amount"  value="<?php echo htmlentities($row['amount']);?>"required />
                            </div>   

                         
<?php } ?>
 <button type="submit" name="submit" class="btn btn-default"><i class=" fa fa-refresh "></i> Update</button>
</form>
                            </div>
                            </div>
                    </div>
                  
                </div>
                
            </div>





        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->

    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
<?php } ?>
