<?php
include("includes/config.php");
error_reporting(0);
?>
   <?php
// Database connection
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'onlinecourse2';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id=$_SESSION['sid'];
// Query to select all images from the table
$sql = "SELECT * FROM students where id='$id';  ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
 while ($row = $result->fetch_assoc()) {
     // Retrieve the image data
     $image = $row['studentPhoto'];}}

    
?>
<?php if($_SESSION['login']!="")
{

  ?>


    <?php } ?>
    <!-- HEADER END-->
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
                        <li class="<?= ($activePage == 'page2') ? 'active':'' ?>"><a href="page2.php">Home</a></li>
                        <li class="<?= ($activePage == 'enroll') ? 'active':'' ?>"><a href="enroll.php">Enroll for Course</a></li>
                        <li class="<?= ($activePage == 'program') ? 'active':'' ?>"><a href="program.php">Tutorial</a></li>
                        <li class="<?= ($activePage == 'MockTest') ? 'active':'' ?>"><a href="MockTest.php">Mock Test</a></li>
                        <li class="<?= ($activePage == 'feedback') ? 'active':'' ?>"><a href="feedback.php">Feedback</a></li>
                        <li class="<?= ($activePage == 'enroll-history') ? 'active':'' ?>"><a href="enroll-history.php">Enroll History</a></li>
                        <!-- <li><a href="Meet.php">Live Meet</a></li> 
                        <li class="<?= ($activePage == 'my-profile') ? 'active':'' ?>"><a href="my-profile.php">My Profile</a></li>-->
                        <li class="<?= ($activePage == 'scoreboard') ? 'active':'' ?>"><a href="scoreboard.php">Scoreboard</a></li>
                        <!-- <li class="<?= ($activePage == 'change-password') ? 'active':'' ?>"><a href="change-password.php">Change Password</a></li>
                        <li class="<?= ($activePage == 'logout') ? 'active':'' ?>"><a href="logout.php">Logout</a></li> -->
                        <div class="btn-group">
                        <button type="button" class="dropdown-toggle border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="image/<?php echo $image?>" width="50"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu">
                            <!-- <a class="dropdown-item" href="#">Action</a> -->
                            <a class="dropdown-item" href="my-profile.php">My Profile</a>
                            <a class="dropdown-item" href="change-password.php">Change Password</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                        </div>
                    </ul>
                </div>
        </div>
            </div>
        </div>
        <style>
              *{
    font-family: sans-serif;
  }
  .navbar-nav li a:hover {
    color: #0051ff !important;
}
        </style>