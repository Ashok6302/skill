<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login']) == 0) {   
    header('location:index.php');
    exit;
} else {
    if(isset($_POST['submit'])) {
        $UserName = $_POST['UserName'];
        $photo = $_FILES["photo"]["name"];
        $cgpa = $_POST['cgpa'];
        move_uploaded_file($_FILES["photo"]["tmp_name"], "studentphoto/".$_FILES["photo"]["name"]);
        $ret = mysqli_query($con, "UPDATE students SET UserName='$UserName', studentPhoto='$photo', cgpa='$cgpa' WHERE Regno='".$_SESSION['login']."'");
        if($ret) {
            $_SESSION['msg'] = "Student Record updated Successfully !!";
        } else {
            $_SESSION['msg'] = "Error : Student Record not updated";
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
    <title>Student Profile</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body style="    background-color: #5791d959;">
<?php $activePage = basename($_SERVER['PHP_SELF'],".php"); ?>
   
<?php include('includes/header.php');?>

<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">My profile</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Student Registration
                    </div>
                    <font color="green" align="center"><?php echo isset($_SESSION['msg']) ? $_SESSION['msg'] : ''; unset($_SESSION['msg']);?></font>
                    <?php
                    $sql = mysqli_query($con, "SELECT * FROM students WHERE Regno='".$_SESSION['login']."'");
                    $row = mysqli_fetch_array($sql);
                    ?>
                    <div class="panel-body">
                        <form name="dept" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="UserName">Student Name</label>
                                <input type="text" class="form-control" id="UserName" name="UserName" value="<?php echo htmlentities($row['UserName']);?>" />
                            </div>
                            <div class="form-group">
                                <label for="Regno">Student Reg No</label>
                                <input type="text" class="form-control" id="Regno" name="Regno" value="<?php echo htmlentities($row['Regno']);?>" readonly />
                            </div>
                            <div class="form-group">
                                <label for="Pincode">Pincode</label>
                                <input type="text" class="form-control" id="Pincode" name="Pincode" value="<?php echo htmlentities($row['pincode']);?>" readonly required />
                            </div>
                            <div class="form-group">
                                <label for="CGPA">CGPA</label>
                                <input type="text" class="form-control" id="cgpa" name="cgpa" value="<?php echo htmlentities($row['cgpa']);?>" required />
                            </div>
                            <div class="form-group">
                                <label for="studentPhoto">Student Photo</label><br>
                                <?php if($row['studentPhoto']=="") { ?>
                                    <img src="studentphoto/noimage.png" width="200" height="200">
                                <?php } else { ?>
                                    <img src="studentphoto/<?php echo htmlentities($row['studentPhoto']);?>" width="200" height="200">
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label for="photo">Upload New Photo</label>
                                <input type="file" class="form-control" id="photo" name="photo" value="<?php echo htmlentities($row['studentPhoto']);?>" />
                            </div>
                            <button type="submit" name="submit" id="submit" class="btn btn-default">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <?php include('includes/footer.php');?> -->
<script src="assets/js/jquery-1.11.1.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>
