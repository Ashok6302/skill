<?php
session_start();
include('includes/config.php');
error_reporting(0);

if (!isset($_SESSION['login']) || empty($_SESSION['login'])) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Enroll History</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body style="background-color: #5791d959;">
<?php $activePage = basename($_SERVER['PHP_SELF'],".php"); ?>

<?php include('includes/header.php'); ?>
<!-- LOGO HEADER END-->
<?php if(isset($_SESSION['login']) && !empty($_SESSION['login'])) {
    // include('includes/menubar.php');
} ?>
<!-- MENU SECTION END-->
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Enroll History</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Enroll History
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive table-bordered">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Student Name</th>
                                        <th>Course Name</th>
                                        <th>Department</th>
                                        <th>Course Score</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = mysqli_query($con, "SELECT * FROM students WHERE Regno='".$_SESSION['login']."'");
                                    $cnt = 1;
                                    while ($row = mysqli_fetch_array($sql)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $cnt; ?></td>
                                            <td><?php echo htmlentities($row['UserName']);?></td>
                                            <td><?php echo htmlentities($row['course']);?></td>
                                            <td><?php echo htmlentities($row['department']);?></td>
                                            <td><?php echo htmlentities($row['points']); ?></td>
                                           
                                            <!-- <td>
                                                <a href="print.php?id=<?php echo $row['cid']?>" target="_blank">
                                                    <button class="btn btn-primary"><i class="fa fa-print"></i> Print</button>
                                                </a>
                                            </td> -->
                                        </tr>
                                        <?php
                                        $cnt++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <?php include('includes/footer.php'); ?> -->
<script src="assets/js/jquery-1.11.1.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>
