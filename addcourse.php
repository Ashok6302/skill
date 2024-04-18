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
                        <h1 class="page-head-line"> Add Course  </h1>
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
                              <input class="form-control" type="file" name="uploadfile"  id="uploadfile"   required />
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
                              <label for="seatlimit">Amount</label>
                              <input type="text" class="form-control" id="amount" name="amount" placeholder="amount" required />
                            </div>   

                          <button type="submit" name="submit" class="btn btn-default">Submit</button>
                        </form>
                       </div>
                          
                
                  
                
               


                        </div>
                    </div>
                     <!--  End  Bordered Table  -->
                </div>

                <font color="red" align="center"><?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?></font>
                <div class="col-md-12">
                    <!--    Bordered Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Course
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Course Name</th>
                                            <th>Course Image</th>
                                            <th>Course Description</th>
                                          
                                            <th>Course amount</th>
                                        
                                             <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$sql=mysqli_query($con,"select * from addcourses");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>


                                        <tr>
                                            <td><?php echo $cnt;?></td>
                                            <td><?php echo htmlentities($row['courseName']);?></td>
                                            <td><?php echo htmlentities($row['image']);?></td>
                                            <td><?php echo htmlentities($row['description']);?></td>
                                         
                                             <td><?php echo htmlentities($row['amount']);?></td>
                                         
                                            <td>
                                            <a href="edit-addcourse.php?id=<?php echo $row['id']?>">
<button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button> </a>                                        
  <a href="course.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')">
                                            <button class="btn btn-danger">Delete</button>
</a>
                                            </td>
                                        </tr>
<?php 
$cnt++;
} ?>

                                        
                                    </tbody>
                                </table>
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