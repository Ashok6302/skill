<section class="menu-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="navbar-collapse collapse px-0">
                    <ul id="menu-top" class="nav navbar-nav">
                        <li class="<?= ($activePage == 'page2') ? 'active':'' ?>"><a href="page2.php">Home</a></li>
                        <li class="<?= ($activePage == 'enroll') ? 'active':'' ?>"><a href="enroll.php">Enroll for Course</a></li>
                        <li class="<?= ($activePage == 'program') ? 'active':'' ?>"><a href="program.php">Tutorial</a></li>
                        <li class="<?= ($activePage == 'MockTest') ? 'active':'' ?>"><a href="MockTest.php">Mock Test</a></li>
                        <li class="<?= ($activePage == 'feedback') ? 'active':'' ?>"><a href="feedback.php">Feedback</a></li>
                        <li class="<?= ($activePage == 'enroll-history') ? 'active':'' ?>"><a href="enroll-history.php">Enroll History</a></li>
                        <!-- <li><a href="Meet.php">Live Meet</a></li> -->
                        <li class="<?= ($activePage == 'my-profile') ? 'active':'' ?>"><a href="my-profile.php">My Profile</a></li>
                        <li class="<?= ($activePage == 'scoreboard') ? 'active':'' ?>"><a href="scoreboard.php">Scoreboard</a></li>
                        <li class="<?= ($activePage == 'change-password') ? 'active':'' ?>"><a href="change-password.php">Change Password</a></li>
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
