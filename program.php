<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login']) == 0) 
{
    header('location:index.php');
} 
else

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Student Login</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<style>
    *{
    font-family: sans-serif;
  }
  .card-product .img-wrap {
    border-radius: 3px 3px 0 0;
    overflow: hidden;
    position: relative;
    height: 220px;
    text-align: center;
  }
  .card-product .img-wrap img {
    max-height: 100%;
    max-width: 100%;
    object-fit: cover;
  }
  .card-product .info-wrap {
    overflow: hidden;
    padding: 15px 15px 0;
  }
  .card-product .bottom-wrap {
    padding: 0 15px 15px;
  }
  .desc{
    text-align: justify;
    margin-bottom: 0;
    height: 185px;
  }
  .label-rating { margin-right:10px;
    color: #333;
    display: inline-block;
    vertical-align: middle;
  }

  .card-product .price-old {
    color: #999;
  }
  .price-wrap{
    font-size: 16px;
    font-weight: bold;
  }
  .marquee-wrapper {
            overflow: auto;
            white-space: nowrap;
            padding: 10px 0; /* Add some padding to space out the cards */
        }
        .marquee {
            animation: marquee 15s linear infinite; /* Adjust duration as needed */
        }
        @keyframes marquee {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
        figure.card {
    box-shadow: 1px 1px 5px #ccc;
    padding: 10px;
    background-color: white;
    margin-bottom: 20px;
    height: 510px;
}
h4, .h4 {
    font-size: 18px;
    font-weight: bolder;
    font-size: xx-large;
} 
b, strong {
    font-weight: 400;
    font-size: smaller;
}
a {
    color: #020202;
    text-decoration: none;
}
a:hover, a:focus {
    color: #020202;
    text-decoration: none;
}
</style>
<body style="    background-color: #5791d959;">
<?php $activePage = basename($_SERVER['PHP_SELF'],".php"); ?>
<?php include('includes/header.php'); ?>
<?php if($_SESSION['login']!="")
{
 //include('includes/menubar.php');
}
 ?>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h4>Tutorial</h4>

                </div>

            </div>
          </div>
                </form>

<div class="container-fluid">
    <div class="row">
       
        <div class="col-md-3">
            <a href="java.php">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="./image/java.png" width="370" height="370" ></div>
                        <figcaption class="info-wrap">
                            <h4 class="title"><b>Java</b></h4>
                            <p class="desc">Java is a high-level, object-oriented programming language renowned for its platform independence and robustness. It's widely used in web development, mobile applications, enterprise systems, and more.</p>
                        </figcaption>
                        <div class="bottom-wrap">
                            <!-- <div class="price-wrap h5">
                                <span class="price-new"><?php echo $amount; ?></span> <del class="price-old">₹1200</del>
                            </div>
                            <a href="enroll.php" class="btn btn-sm btn-primary float-right buy_now">Enroll Now</a>
                            
                        </div> -->
                    </figure>
</a>
                </div>

                 
        <div class="col-md-3">
        <a href="c.php">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="./image/C_Programming.jpg" width="370" height="370" ></div>
                        <figcaption class="info-wrap">
                            <h4 class="title"><b>C Programming</b></h4>
                            <p class="desc">C is a powerful, procedural programming language renowned for its efficiency and versatility, used in system software, embedded systems, and applications requiring high performance.</p>
                        </figcaption>
                        <div class="bottom-wrap">
                            <!-- <div class="price-wrap h5">
                                <span class="price-new"><?php echo $amount; ?></span> <del class="price-old">₹1200</del>
                            </div>
                            <a href="enroll.php" class="btn btn-sm btn-primary float-right buy_now">Enroll Now</a>
                            
                        </div> -->
                    </figure>
</a>
                </div>

                 
        <div class="col-md-3">
        <a href="python.php">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="./image/python.jpg" width="370" height="370" ></div>
                        <figcaption class="info-wrap">
                            <h4 class="title"><b>Python</b></h4>
                            <p class="desc">Python is a high-level, interpreted programming language known for its simplicity and readability, suitable for diverse applications including web development, data analysis, artificial intelligence, and automation.</p>
                        </figcaption>
                        <div class="bottom-wrap">
                            <!-- <div class="price-wrap h5">
                                <span class="price-new"><?php echo $amount; ?></span> <del class="price-old">₹1200</del>
                            </div>
                            <a href="enroll.php" class="btn btn-sm btn-primary float-right buy_now">Enroll Now</a>
                            
                        </div> -->
                    </figure>
</a>
                </div>

                 
        <div class="col-md-3">
        <a href="php.php">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="./image/php.jpg" width="370" height="370" ></div>
                        <figcaption class="info-wrap">
                            <h4 class="title"><b>Php</b></h4>
                            <p class="desc">PHP is a server-side scripting language commonly used for web development. It allows for dynamic content generation, database interaction, and is embedded within HTML. PHP code is executed on the server.</p>
                        </figcaption>
                        <div class="bottom-wrap">
                            <!-- <div class="price-wrap h5">
                                <span class="price-new"><?php echo $amount; ?></span> <del class="price-old">₹1200</del>
                            </div>
                            <a href="enroll.php" class="btn btn-sm btn-primary float-right buy_now">Enroll Now</a>
                            
                        </div> -->
                    </figure>
</a>
                </div>

                 
        <div class="col-md-3">
        <a href="html.php">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="./image/html.png" width="370" height="370" ></div>
                        <figcaption class="info-wrap">
                            <h4 class="title"><b>Html</b></h4>
                            <p class="desc">HTML, or HyperText Markup Language, is the standard language used to create and design web pages. It provides a structured way to format content on the web, including text, images, links, multimedia, and more.</p>
                        </figcaption>
                        <div class="bottom-wrap">
                            <!-- <div class="price-wrap h5">
                                <span class="price-new"><?php echo $amount; ?></span> <del class="price-old">₹1200</del>
                            </div>
                            <a href="enroll.php" class="btn btn-sm btn-primary float-right buy_now">Enroll Now</a>
                            
                        </div> -->
                    </figure>
</a>
                </div>
       
    </div> <!-- row.// -->
</div> <!-- container.// -->

  
  <br><br>
  
                    <!-- <div class="alert alert-info" >
                        This is a Study buddy app  with basic Courses. 
                        From Saveetha School of Engineering
                        <br />
                         <strong> Some of its features are given below :</strong>
                        <ul>
                            <li>
                                 Responsive Classes Used
                            </li>
                            <li>
                                Easy to use and customize
                            </li>
                            <li>
                                Font awesome icons included
                            </li>
                            <li>
                                Clean and light code used.
                            </li>
                            <li>
                                Education for your brighthness
                            </li>
                        </ul>
                    </div> -->
                                    </div>


            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <!-- <?php include('includes/footer.php');?> -->
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html> 