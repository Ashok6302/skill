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
                        <h1 class="page-head-line">PHP Tutorial</h1>
                    </div>
                </div>
               <div class="row" >
</div>
<main>
    <div>

        <p class="fast-para">
            If you are looking to learn PHP programming online, there are more
            than enough resources out there to teach you everything you need to
            know. In fact, many (if not most) of the web developers in the world
            today have launched successful careers by learning web development
            online from scratch. But even the most ambitious self-starters run
            into the problem of deciding where to begin. Below you will find our
            picks for the top 10 websites to help you learn web development
            online
        </p>
        <br />
        <h2 class="fast-para">Why Learn PHP programming Online</h2>
        <p class="fast-para">
        Learning PHP programming online offers numerous benefits and opportunities for aspiring developers and experienced programmers alike. PHP is a powerful server-side scripting language widely used for web development, making it a valuable skill for anyone interested in building dynamic and interactive websites, web applications, and content management systems. Online PHP courses provide accessibility and flexibility, allowing individuals to learn at their own pace and according to their own schedules, regardless of their location. These courses often offer a variety of learning resources, including tutorials, interactive coding exercises, video lectures, and real-world projects, catering to diverse learning styles and preferences. Moreover, online PHP communities and forums provide opportunities for collaboration, knowledge sharing, and mentorship, fostering a supportive learning environment. PHP's popularity in the web development industry ensures that acquiring PHP skills online opens doors to a wide range of career opportunities and professional growth. Whether pursuing a career as a web developer, software engineer, or freelancer, learning PHP online equips individuals with the necessary skills and expertise to thrive in the dynamic and competitive field of web development.
</p>
        <br />

 
        <div align="center" class="video-container">
            <img src="image/php.jpg" alt="php1" width="600">
        </div>
        <h2 class="fast-para"> PHP DATATYPES</h2>

        <p class="fast-para">
        In PHP, data types are fundamental elements used to define variables and manipulate data within scripts. PHP supports several core data types, including integers, floating-point numbers, strings, booleans, arrays, objects, and resource types. Integers represent whole numbers without decimal points, while floating-point numbers include decimal fractions. Strings are sequences of characters enclosed within single quotes, double quotes, or heredoc syntax, facilitating text manipulation and processing. Booleans represent logical values of true or false, essential for conditional statements and comparisons. Arrays are versatile data structures capable of storing multiple values of different types under a single variable name, enabling efficient data organization and manipulation. Objects allow developers to create custom data types with properties and methods, promoting code reusability and modularity. Additionally, PHP supports resource types to handle external resources, such as file handles and database connections, providing seamless integration with external services and functionalities. Understanding PHP's diverse data types is crucial for writing efficient, scalable, and maintainable code in various web development projects, ranging from simple scripts to complex applications and frameworks.




     </p>

        <br />
        <div align="center" class="video-container">
            <img src="image/php.jpg" alt="php2">
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
