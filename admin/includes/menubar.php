<section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 px-0">
                    <div class="navbar-collapse collapse "style =" margin-right: 126px;">
                        <ul id="menu-top" class="nav navbar-nav">

                          
                            <li class="<?= ($activePage == 'addcourse') ? 'active':'' ?>"><a href="addcourse.php">Add courses</a></li>
                            <!-- <li class="<?= ($activePage == 'department') ? 'active':'' ?>"><a   href="department.php">Department</a></li> -->
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
    </section>
    <style>
    .menu-section {
    background-color: #0f6063;
}
</style>
