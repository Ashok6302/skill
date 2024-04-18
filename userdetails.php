<?php
$localhost="localhost";
$user="root";
$Password="";
$database="onlinecourse2";
$conn=mysqli_connect($localhost, $user, $Password, $database);

    

    $Regno = $_POST['Regno'];
    $Department = $_POST['Department'];
    $UserName = $_POST['UserName'];
    $MobileNumber = $_POST['MobileNumber'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    
    
     if (empty($Department)) 
    {
        header("Location: signup.php?ms=AdminName is required");
        exit;
    }
    else if (empty($Regno))
    {
        header("Location: signup.php?ms=ID is already existed");
        exit;
    } 

     else if (empty($MobileNumber))
    {
        header("Location: signup.php?ms=MobileNumber is required");
        exit;
    } 
    else if (empty($Email)) 
    {
        header("Location: signup.php?ms=Email is required");
        exit;
    } else if (empty($Password)) {
        header("Location: signup.php?ms=Password is required");
        exit;
    } 
    else {
        // Check if the connection is established before executing queries
        
            $sql = "INSERT INTO students (UserName,Department,Regno, MobileNumber,Email,Password)  VALUES ( '$UserName', '$Department','$Regno', '$MobileNumber','$Email','$Password')";

            $result = mysqli_query($conn, $sql);
            if ($result) {
                $ms = "Successfully created";  
                header("Location:index.php?ms=$ms");
                exit;
            } else {
                $ms = "Unknown error occurred";
                header("Location: signup.php?ms=$ms");
                exit;
            }
        
} 
    
?>