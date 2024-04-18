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
}
?>


<div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">JAVA Tutorial</h1>
                    </div>
                </div>
               <div class="row" >
</div>
<main>
    <div>

        <p class="fast-para">
            If you are looking to learn JAVA programming online, there are more
            than enough resources out there to teach you everything you need to
            know. In fact, many (if not most) of the web developers in the world
            today have launched successful careers by learning web development
            online from scratch. But even the most ambitious self-starters run
            into the problem of deciding where to begin. Below you will find our
            picks for the top 10 websites to help you learn web development
            online
        </p>
        <br />
        <h2 class="fast-para">Why Learn JAVA programming Online</h2>
        <p class="fast-para">
        Learning Java programming online offers a convenient and accessible pathway to mastering one of the most widely-used programming languages in the world. Through online courses, individuals can delve into Java's robust features, object-oriented principles, and versatile applications from the comfort of their own homes. The flexibility of online learning allows students to progress at their own pace, fitting lessons into their busy schedules while accessing a wealth of resources, including tutorials, coding exercises, and interactive platforms. Moreover, online Java communities provide invaluable support, fostering collaboration and knowledge-sharing among learners worldwide. By honing Java skills online, aspiring developers gain the expertise needed to excel in various domains, including web development, mobile applications, enterprise solutions, and big data processing. Ultimately, online Java programming not only equips individuals with practical coding abilities but also empowers them to explore exciting career opportunities in the ever-evolving landscape of technology.
       </p>
        <br />

 
        <div align="center" class="video-container">
            <img src="image/java1.png" alt="java1">
        </div>
        <h2 class="fast-para"> JAVA DATATYPES</h2>

        <p class="fast-para">
        Java provides a rich set of data types to accommodate different kinds of data and optimize memory usage and performance in programming. Java's data types can be categorized into two main groups: primitive data types and reference data types.

Primitive data types include byte, short, int, long, float, double, char, and boolean. These types represent basic data values and are used to store numeric and character data as well as true/false values. Each primitive data type has a specific range and memory allocation, allowing developers to choose the most appropriate type for their data to conserve memory and enhance efficiency.

On the other hand, reference data types, also known as object types, include classes, interfaces, arrays, and enums. These data types are used to create complex data structures and objects that can hold multiple values and methods. Reference data types store references to objects in memory rather than the actual data itself, enabling developers to manipulate and interact with objects dynamically.

Java's robust data type system enables developers to write efficient, type-safe code that is both reliable and scalable. Understanding and leveraging Java's data types effectively is essential for writing clear, concise, and maintainable code in various applications and domains.
       </p>

        <br />
        <div align="center" class="video-container">
            <img src="image/java2.jpg" alt="java2">
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
