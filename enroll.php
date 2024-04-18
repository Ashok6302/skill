<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login']) == 0) {   
    header('location:index.php');
} else {
    if(isset($_POST['submit'])) {
        $courseName = $_POST['course']; 
        $UserName = $_POST['UserName'];
        $Regno = $_POST['Regno'];
        $department = $_POST['department'];
        $pincode = $_POST['pincode'];

        // Store the selected course in the session variable
        $_SESSION['selected_course'] = $courseName;

        // Check if the Regno has already enrolled in the specified course
        $check_query = mysqli_query($con, "SELECT * FROM students WHERE Regno = '$Regno' AND course = '$courseName'");
        if(mysqli_num_rows($check_query) > 0) {
            // If enrollment exists, display a pop-up message
            echo "<script>alert('This student has already enrolled in the selected course.');</script>";
        } else {
            // If enrollment doesn't exist, insert the data into the database
            $ret = mysqli_query($con, "INSERT INTO students(Regno, UserName, pincode, department, course) VALUES ('$Regno', '$UserName', '$pincode', '$department', '$courseName')");
            if($ret) {
                $_SESSION['msg'] = "Enroll Successfully !!";
            } else {
                $_SESSION['msg'] = "Error : Not Enroll";
            }
        }
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
    <title>Course Enroll</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <style>
        h4, .h4 {
    font-size: 18px;
    font-weight: bolder;
    font-size: xx-large;
}
    </style>
</head>

<body style="    background-color: #5791d959;">
<?php $activePage = basename($_SERVER['PHP_SELF'],".php"); ?>

<?php include('includes/header.php');?>
<?php if($_SESSION['login'] != "") {
    // include('includes/menubar.php');
} ?>
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Course Enroll</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Course Enroll
                    </div>
                    <font color="green" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>
                    <?php $sql=mysqli_query($con,"select * from students where Regno='".$_SESSION['login']."'");
                    $cnt=1;
                    while($row=mysqli_fetch_array($sql)) { ?>
                        <div class="panel-body">
                            <form name="dept" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="UserName">Student Name</label>
                                    <input type="text" class="form-control" id="UserName" name="UserName" value="<?php echo htmlentities($row['UserName']);?>" readonly />
                                </div>
                                <div class="form-group">
                                    <label for="Regno">Student Reg No</label>
                                    <input type="text" class="form-control" id="Regno" name="Regno" value="<?php echo htmlentities($row['Regno']);?>"  placeholder="Student Reg no" readonly />
                                </div>
                                <div class="form-group">
                                    <label for="Regno">Student Department</label>
                                    <input type="text" class="form-control" id="Regno" name="department" value="<?php echo htmlentities($row['department']);?>"  placeholder="Student Reg no" readonly />
                                </div>
                                <div class="form-group">
                                    <label for="studentPhoto">Student Photo</label>
                                    <?php if($row['studentPhoto']=="") { ?>
                                        <img src="studentphoto/noimage.png" width="200" height="200">
                                    <?php } else { ?>
                                        <img src="studentphoto/<?php echo htmlentities($row['studentPhoto']);?>" width="200" height="200">
                                    <?php } ?>
                                </div>
                                <div class="form-group">
                                    <label for="Course">Course</label>
                                    <select class="form-control" name="course" id="course"  required="required">
                                        <option value="">Select Course</option>   
                                        <?php 
                                        $sql = mysqli_query($con,"select * from course");
                                        while($row = mysqli_fetch_array($sql)) {
                                            ?>
                                            <option value="<?php echo htmlentities($row['courseName']);?>"><?php echo htmlentities($row['courseName']);?></option> <!-- Include course amount in the option -->
                                        <?php } ?>
                                    </select> 
                                    <span id="course-availability-status1" style="font-size:12px;"></span>
                                </div>
                               




                                <button type="submit" name="submit" id="submit" class="btn btn-default">Enroll</button>
                            </form>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <?php include('includes/footer.php');?> -->
<script src="assets/js/jquery-1.11.1.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script>
    function courseAvailability() {
        $("#loaderIcon").show();
        jQuery.ajax({
            url: "check_availability.php",
            data:'cid='+$("#course").val(),
            type: "POST",
            success:function(data){
                $("#course-availability-status1").html(data);
                $("#loaderIcon").hide();
            },
            error:function (){}
        });
    }
</script>
</body>
</html>
