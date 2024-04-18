<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <title>Query</title>
    <style>
        #chat-container {
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 10px;
            margin: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #response-box {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
    <!-- LOGO HEADER END-->
<?php if($_SESSION['login']!="")
{
 include('includes/menubar.php');
}
 ?>
    <!-- MENU SECTION END-->
<br><br>
<div id="chat-container">
    <div id="chat-log">
        <!-- Chat messages will be displayed here -->
    </div>
    <form action="chatgpt.php" method="post">
        <div align="center">
            <div id="user-input">
                <input type="text" name="prompt" id="user-message" placeholder="Type your message...">
                <button id="send-button">Send</button>
            </div>
        </div>
    </form>

    <?php
    session_start();

    // Check if the response is set in the session
    if (isset($_SESSION['response'])) {
        $response = $_SESSION['response'];
    
        // Display the response in a colorful box
        echo '<div id="response-box">';
        echo "<h2>Response:</h2>";
        echo "<p>$response</p>";
        echo '</div>';
    
        // Clear the response from the session to prevent displaying it multiple times
        unset($_SESSION['response']);
    }
    ?>
</div>

<div id="code-output">
    <!-- Code replies from GPT-3.5 will be displayed here -->
</div>

    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
