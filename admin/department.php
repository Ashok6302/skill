<?php
session_start();
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{

if(isset($_POST['submit']))
{
  $image = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $image;

$coursename=$_POST['coursename'];
$description=$_POST['description'];
$amount=$_POST['amount'];

$ret=mysqli_query($con,"insert into addcourses(courseName,image,description,amount) values('$coursename','$image','$description','$amount')");
if($ret)
{
$_SESSION['msg']="Course Created Successfully !!";
}
else
{
  $_SESSION['msg']="Error : Course not created";
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
<?php $activePage = basename($_SERVER['PHP_SELF'],".php"); ?>

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
                        <h4> Add Tutorial  </h4>
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
                      <form name="dept" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                              <label for="coursecode">Course image </label>
                              <input class="form-control" type="file" name="image"  id="image"   required />
                            </div>

                          <div class="form-group">
                              <label for="coursename">Course Name  </label>
                              <input type="text" class="form-control" id="coursename" name="coursename" placeholder="Course Name" required />
                            </div>

                          <div class="form-group">
                              <label for="courseunit">Description </label>
                              <textarea type="text" class="form-control" name="description" placeholder="description : "  cols="43" rows="5" style="    width: 530px;" required ></textarea>
                            </div> 
                            <div class="form-group">
                              <label for="courseunit">Description 1</label>
                              <textarea type="text" class="form-control" name="description1" placeholder="description : "  cols="43" rows="5" style="    width: 530px;" required ></textarea>
                            </div> 

                          <div class="form-group">
                          <label for="courseunit">vedio upload</label>
                          <input type="file" name="file" id="file" required/>
                    
                            </div>   

                          <button type="submit" name="submit" class="btn btn-default">Submit</button>
                        </form>
                       </div>
                          
                
                  
                
               


                        </div>
                    </div>
                     <!--  End  Bordered Table  -->
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
<style>
    h4, .h4 {
    font-size: 18px;
    font-weight: bolder;
    font-size: xx-large;
}
</style>

