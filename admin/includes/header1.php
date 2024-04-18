<?php
error_reporting(0);
?>

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
                   <img src="../image/log2.jpeg" width="150" style="margin-top: 5px;">
                </a>
            </div>

            <div class="right-div">
                <div class="navbar-collapse collapse px-0">
                    <ul id="menu-top" class="nav navbar-nav">
                        <!-- <li class=""><a href="page1.php">Home</a></li> -->
                       
                        <!-- <li class="<?= ($activePage == 'addcourse') ? 'active':'' ?>"><a href="addcourse.php">Add courses</a></li> -->
                            <!-- <li class="<?= ($activePage == 'department') ? 'active':'' ?>"><a   href="department.php">Add Tutorial</a></li> -->
                            <li class="<?= ($activePage == 'course') ? 'active':'' ?>"><a href="course.php">Course</a></li>
                            <li class="<?= ($activePage == 'student-registration') ? 'active':'' ?>"><a href="student-registration.php">Registration</a></li>
                            <li class="<?= ($activePage == 'manage-students') ? 'active':'' ?>"><a href="manage-students.php">Manage Students</a></li>
                               <!-- <li><a href="Meet.php">Live Meet</a></li> -->
                            <li class="<?= ($activePage == 'enroll-history') ? 'active':'' ?>"><a href="enroll-history.php">Enroll History</a></li>
                               <!-- <li><a href="user-log.php">Student Logs </a></li> -->
                            <li class="<?= ($activePage == 'logout') ? 'active':'' ?>"><a href="logout.php">Logout</a></li>
                        
                    </ul>
                </div>
            </div>
        
        </div>
            </div>
        </div>
        <style>
            .navbar-brand > img {
                display: block;
                position: relative;
                top: -25px;
                width: 60px;
                height: 60px;
            }
            *{
    font-family: sans-serif;
  } .navbar-nav li a:hover {
    color: #0051ff !important;
}
   
        </style>