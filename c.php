<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login']) == 0) 
{
    header('location:index.php');
} 
else
{
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tutorial</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
<?php include('includes/header.php'); ?>

<!-- LOGO HEADER END -->
<?php if ($_SESSION['login'] != "") {
    // include('includes/menubar.php'); // Include the menu bar here
}
?>
<!-- <div class="course-navbar">
    <ul>
        <li><a href="Tutorial.php">php</a></li>
        <li><a href="c.php">C programming</a></li>
        <!-- Add more course links as needed -->
    </ul>
</div> -->

<div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">C Programming</h1>
                    </div>
                </div>
               <div class="row" >
</div>
<hr />
<main>
    <div>
        <!-- <img class="banner" src="image/Studylogin.png" width="50" height="50" /> -->

        <p class="fast-para">
            If you are looking to learn C programming online, there are more
            than enough resources out there to teach you everything you need to
            know. In fact, many (if not most) of the web developers in the world
            today have launched successful careers by learning web development
            online from scratch. But even the most ambitious self-starters run
            into the problem of deciding where to begin. Below you will find our
            picks for the top 10 websites to help you learn web development
            online
        </p>
        <br />
        <h2 class="fast-para">Why Learn C programming Online</h2>
        <p class="fast-para">
            As a web developer, your credibility is more about the strength of
            your portfolio than it is about your credentials. Your employment
            opportunities will often come from concrete skills and samples of
            your work rather than a degree from a university. It’s not that a
            proper college education isn’t important or valuable as a web
            developer. Rather, it’s to say that if attending a university isn’t
            in the cards, you can learn everything you need to know about web
            development online. The web development industry continues to grow
            exponentially, so you won’t find a shortage of resources. The most
            important thing to do is start.
        </p>
        <br />

        <h3>
            Great YouTube Saveetha channel to help you learn C programming online
        </h3>
        <div align="center" class="video-container">
    <!-- <iframe width="800" height="500" src="https://www.bing.com/videos/search?q=c+programming+language&&view=detail&mid=D410550027E2B7482B84D410550027E2B7482B84&&FORM=VRDGAR&ru=%2Fvideos%2Fsearch%3Fq%3Dc%2Bprogramming%2Blanguage%26FORM%3DHDRSC4"
        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe> -->
</div>

        <br />
        <br />
        <br />

        <h4 class="last">Final Thoughts</h4>
        <p class="last">
            When it comes to starting a career in web development, getting
            started can be the hardest part. But once you do, you might be
            surprised at just how much you can learn in just a single day with
            the online resources available. Then it is just a matter of
            mastering your skills toward your new career. Hopefully, these web
            developer resources can help you along the way
        </p>
        <br />
        <p class="last">
            Feel free to share some of your favorite online resources in the
            comments below
        </p>

        <p class="last">Cheers!</p>

    </div>
</main>

<hr />
</div>


    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>

<?php
}
?>
