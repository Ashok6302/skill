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
</style>
<body style="    background-color: #bbc9c8;">
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
                    <h4>Courses</h4>

                </div>

            </div>
          </div>
                </form>

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

// Query to select all images from the table
$sql = "SELECT * FROM addcourses ";
$result = $conn->query($sql);

?>

<div class="container-fluid">
    <div class="row">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Retrieve the image data
                $image = $row['image'];
                $coursename = $row['coursename'];
                $description = $row['description'];
                $amount = $row['amount'];
        ?>
        <div class="col-md-3">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="./image/<?php echo $image; ?>" width="370" height="370" ></div>
                        <figcaption class="info-wrap">
                            <!-- <h4 class="title"><b><?php echo $coursename; ?></b></h4> -->
                            <p class="desc"><?php echo $description; ?></p>
                        </figcaption>
                        <div class="bottom-wrap">
                            <div class="price-wrap h5">
                                <span class="price-new"><?php echo $amount; ?></span> <del class="price-old">₹1200</del>
                            </div>
                            <a href="enroll.php" class="btn btn-sm btn-primary float-right buy_now">Enroll Now</a>
                            
                        </div>
                    </figure>
                </div>
        <?php
            }
        } else {
            echo 'No images found in the table.';
        }
        $conn->close();
        ?>
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