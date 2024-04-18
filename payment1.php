<?php
// Include your database connection file
include("includes/config.php");
session_start();

// Fetch the user_id from the session (assuming you have stored it during login)
$StudentRegno = $_SESSION['Regno'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <title>Payment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #528FF0;
            color: black;
            padding: 10px 20px;
            margin-bottom:20px;
        }
        .logo {
            display: flex;
            align-items: center;
        }
        .logo img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }
        .nav-links {
            display: flex;
            gap: 20px;
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .nav-links li {
            cursor: pointer;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            border: 1px solid #ddd;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        td{
            background-color: white;
        }
        th {
            background-color: #FD3A3A;
        }
        .paid {
            
            color:  #4CAF50;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Style for the dropdown content */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            padding: 12px 16px;
            display: block;
            text-align: left;
        }

        /* Style for the dropdown items on hover */
        .dropdown-content a:hover {
            background-color: #ddd;
        }

        /* Show the dropdown content when hovering over the dropdown container */
        .dropdown:hover .dropdown-content {
            display: block;
        }
 

    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">
        <img src="image/Studylogin.png" width="50" height="50" alt="Image 2">
            <h1>Study Buddy</h1>
        </div>
        <ul class="nav-links">
        <li><a href="pincode-verification.php">Enroll for Course</a></li>
        <li><a href="Tutorial.php">Tutorial</a></li>
        <li><a href="MockTest.php">Mock Test</a></li>
        <li><a href="Query.php">Query</a></li>
        <li><a href="enroll-history.php">Enroll History</a></li>
            <li class="dropdown">
                <span style="color:#6C06BC">Payment</span>
                <div class="dropdown-content">
                    <a href="payment1.php" style="text-decoration: none">Single Pay</a>
                    <a href="payment.php" style="text-decoration: none">Annual Pay</a>
                </div>
            </li>
            <li><a href="my-profile.php">My Profile</a></li>
            <li><a href="change-password.php">Change Password</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <h2 style="text-align: center;">Payment</h2>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Amount</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $currentDate = date('Y-m-d');

            // Modify the SQL query to join the tables and filter based on conditions
            $sql = "SELECT s.type, s.amount, s.status 
                    FROM bus_request AS s
                    JOIN day_request AS b ON s.id = b.did
                    WHERE b.student_id = '$StudentRegno' 
                    AND b.status = 'Accepted'
                    AND b.date = '$currentDate'";
            $result = $conn->query($sql);
            $counter = 1;
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $statusClass = $row["status"] == 1 ? 'paid' : '';
                    echo "<tr>";
                    echo "<td>" . $counter . "</td>";
                    echo "<td>" . $row["type"] . "</td>";
                    echo "<td>" . $row["amount"] . "</td>";
                    echo "<td class='$statusClass'>" . ($row["status"] == 1 ? "Paid" : "<a href='javascript:void(0)' class='btn btn-sm btn-primary float-right buy_now' data-amount='1280' data-id='2'><button class='pay-button' data-id='" . $counter. "'>Pay Now</button></a>") . "</td>";
                    // echo "<td><a href='javascript:void(0)' class='btn btn-sm btn-primary float-right buy_now' data-amount='1280' data-id='2'>Order Now</a></td>";

                    echo "</tr>";
                    $counter++;
                }
            } else {
                echo "<tr><td colspan='3'>No requests found</td></tr>";
            }
            ?>
        </tbody>
    </table>
<p>      
</p>
    <!-- <script>
        // JavaScript to handle the "Pay Now" button click event
        const payButtons = document.querySelectorAll('.pay-button');
        payButtons.forEach(button => {
            button.addEventListener('click', function () {
                const requestId = this.getAttribute('data-id');
                // You should implement your payment processing logic here
                // For demonstration purposes, we'll simulate a successful payment
                // You can replace this with actual payment processing code
                setTimeout(function () {
                    alert("Payment successful");
                    const statusCell = button.parentElement;
                    statusCell.innerHTML = "Paid";
                    statusCell.classList.add('paid');
                }, 2000); // Simulate a delay for payment processing
            });
        });
    </script> -->
<!-- razorpay -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

  $('body').on('click', '.buy_now', function(e){
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_test_H2UTYFN9YkS4xf",
    "amount": (totalAmount*100), // 2000 paise = INR 20
    "name": "Tutsmake",
    "description": "Payment",
    "image": "//www.tutsmake.com/wp-content/uploads/2018/12/cropped-favicon-1024-1-180x180.png",
    "handler": function (response){
          $.ajax({
            url: 'payment-proccess.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            }, 
            success: function (msg) {

               window.location.href = 'https://www.tutsmake.com/Demos/php/razorpay/success.php';
            }
        });
     
    },

    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.`preventDefault`();
  });

</script>

<script src=""></script>
<script>
 
  $('body').on('click', '.buy_now', function(e){
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_test_H2UTYFN9YkS4xf", // secret key id
    "amount": (totalAmount*100), // 2000 paise = INR 20
    "name": "Tutsmake",
    "description": "Payment",
    "image": "http://www.tutsmake.com/wp-content/uploads/2019/03/c05917807.png",
    "handler": function (response){
          $.ajax({
            url: 'payment-proccess.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            }, 
            success: function (msg) {
 
               window.location.href = 'payment-success.php';
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
</body>
</html>