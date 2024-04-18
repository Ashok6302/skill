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


<div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Python Tutorial</h1>
                    </div>
                </div>
               <div class="row" >
</div>
<main>
    <div>

        <p class="fast-para">
            If you are looking to learn PYTHON programming online, there are more
            than enough resources out there to teach you everything you need to
            know. In fact, many (if not most) of the web developers in the world
            today have launched successful careers by learning web development
            online from scratch. But even the most ambitious self-starters run
            into the problem of deciding where to begin. Below you will find our
            picks for the top 10 websites to help you learn web development
            online
        </p>
        <br />
        <h2 class="fast-para">Why Learn PYTHON programming Online</h2>
        <p class="fast-para">
        Learning Python programming online offers numerous advantages for beginners and experienced developers alike. Python's simplicity, versatility, and readability make it an excellent choice for a wide range of applications, from web development and data analysis to artificial intelligence and scientific computing. Online Python courses provide accessibility and flexibility, allowing individuals to learn at their own pace and according to their own schedules, regardless of geographical location. These courses often offer a variety of learning resources, including tutorials, interactive coding exercises, video lectures, and real-world projects, catering to diverse learning styles and preferences. Moreover, online Python communities and forums provide opportunities for collaboration, knowledge sharing, and mentorship, fostering a supportive learning environment. Python's popularity in both industry and academia ensures that acquiring Python skills online opens doors to diverse career opportunities and professional growth. Whether pursuing a career in software development, data science, machine learning, or any other field, learning Python online equips individuals with valuable skills and expertise to succeed in the rapidly evolving landscape of technology.
</p>
        <br />

 
        <div align="center" class="video-container">
            <img src="image/python.jpg" alt="python1" width="600">
        </div>
        <h2 class="fast-para"> PYTHON DATATYPES</h2>

        <p class="fast-para">
        Python, a dynamically typed language, offers a rich variety of data types to facilitate efficient and flexible programming. Python's data types include fundamental types like integers, floating-point numbers, complex numbers, strings, and boolean values. These types enable developers to represent and manipulate basic data effectively. Additionally, Python provides compound data types such as lists, tuples, dictionaries, and sets. Lists are versatile, ordered collections of items that allow for dynamic resizing and modification. Tuples, similar to lists, are immutable sequences commonly used to store heterogeneous data. Dictionaries are key-value pairs that offer efficient data retrieval based on keys, while sets are unordered collections of unique elements, useful for mathematical operations like union, intersection, and difference. Python also supports custom data types through classes, allowing developers to create objects with attributes and methods tailored to specific requirements. Understanding Python's diverse data types is essential for writing clear, concise, and efficient code that meets the demands of various applications, from web development and data analysis to scientific computing and artificial intelligence.




     </p>

        <br />
        <div align="center" class="video-container">
            <img src="image/python.jpg" alt="python2">
        </div>
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
