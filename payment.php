<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if(strlen($_SESSION['login']) == 0) {
    header('location:index.php');
    exit();
} 

$userid = $_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP Razorpay Payment Gateway Integration</title>
  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
<?php include('includes/header.php');?>
<?php if($_SESSION['login']!="")
{
//  include('includes/menubar.php');
}
?><br><br>

<div class="container-fluid">
    <div class="row">
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

    // Fetch enrolled courses details for the logged-in student from the students table
    $sql = "SELECT * FROM students WHERE Regno = $userid";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Retrieve the enrolled courses from the student's table
            $enrolled_courses = explode(',', $row['course']);

            // Query to select enrolled courses from the course table
            $enrolled_courses_query = implode("','", $enrolled_courses);
            $enrolled_courses_query = "SELECT * FROM addcourses WHERE courseName IN ('$enrolled_courses_query')";
            $enrolled_courses_result = $conn->query($enrolled_courses_query);

            if ($enrolled_courses_result->num_rows > 0) {
                while ($enrolled_row = $enrolled_courses_result->fetch_assoc()) {
                    // Output course details
                    $image = $enrolled_row['image'];
                    $coursename = $enrolled_row['courseName'];
                    $description = $enrolled_row['description'];
                    $amount = $enrolled_row['amount'];

                    $_SESSION['course'] = $enrolled_row['courseName'];
                    // Output course HTML
                    echo '  <div class="col-md-3">';
                    echo ' <figure class="card card-product">';
                    echo '<div class="img-wrap"><img src="./image/'. $image.' ?>" width="320" height="300" ></div>';
                    echo ' <figcaption class="info-wrap">';
                    echo '<h4 class="title">'.$coursename.'</h4>';
                    echo '<p class="desc">'.$description.'</p>';
                    echo '</figcaption>';
                    echo '<div class="bottom-wrap">';

                    // Output price details
                    echo '<div class="price-wrap h5">';
                    echo '<span class="price-new">'.$amount.'</span> <del class="price-old">₹1200</del>';
                    echo '</div>';

                    // Output payment button based on payment status
                    $check_payment_query = "SELECT * FROM tbl_records WHERE user_id = '$userid' AND course_id = '".$enrolled_row['id']."' AND status = 'paid'";
                    $payment_result = $conn->query($check_payment_query);

                    if ($payment_result->num_rows > 0) {
                        echo '<a href="#" class="btn btn-sm btn-success float-right">Paid</a>';
                        if ($enrolled_row['id'] <= 5) {
                            echo '<a href="quizz' . $enrolled_row['id'] . '.php" class="btn btn-sm btn-primary float-right">Start test</a>';
                        } else {
                            echo '<a href="retest.php" class="btn btn-sm btn-warning float-right">Retest</a>';
                        }{
                     
                        echo '<a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-img="//www.tutsmake.com/wp-content/uploads/2019/03/vvjghg.png" data-amount="'.$amount.'" data-id="'. $enrolled_row['id'].'">Pay Now</a>';
                    }
                    
                    

                    echo '</div>'; // bottom-wrap
                    echo '</figure>';
                    echo '</div>'; // col-md-6
                }
            }
        }
    }
    ?>
    </div> 
</div> 

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $('body').on('click', '.buy_now', function(e){
        var prodimg = $(this).attr("data-img");
        var totalAmount = $(this).attr("data-amount");
        var product_id =  $(this).attr("data-id");
        var id = "<?php echo  $userid; ?>";
        var options = {
        "key": "rzp_test_wz5W3T8jAwKMLW", // secret key id
        "amount": (totalAmount*100), // 2000 paise = INR 20
        "name": "Tutsmake",
        "description": "Payment",

        "handler": function (response){
                $.ajax({
                url: 'payment-proccess.php',
                type: 'post',
                dataType: 'json',
                data: {
                    id: id,razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
                }, 
                success: function (msg) {
                    window.location.href = 'payment-success.php?id='+ msg["rid"];
                }
            });

        },

        "theme": {
            "color": "#528FF0"
        }
    };
    var rzp1 = new Razorpay(options);
    rzp1.open();
    e.preventDefault();
    });
</script>

<script src="assets/js/jquery-1.11.1.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>
