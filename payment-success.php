<?php
 $db_host        = "localhost";
 $db_username    = "root";
 $db_password    = "";
 $db_name        = "onlinecourse2";

 $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

 if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
 }


function getExam($conn, $id){
    $GetAuthors = "SELECT tbl_records.id, tbl_records.user_id,  course.id AS course_id, course.courseName FROM course INNER JOIN tbl_records ON course.id = tbl_records.course_id WHERE tbl_records.id = $id";
    $Results    = mysqli_query($conn,$GetAuthors);
    $ListArray = array();

    if (mysqli_num_rows($Results) > 0) 
    {
        while($record = mysqli_fetch_assoc($Results)) 
        {
            $data = array();
            $data["id"]           = $record["id"];
            $data["user_id"]      = $record["user_id"];
            $data["cid"]          = $record["course_id"];
            $data["courseName"]   = $record["courseName"];
            array_push($ListArray,$data);

        }

    }

    return $ListArray;
}

$Exam = getExam($conn, $_GET['id']);


?>

<!DOCTYPE html>
<html>
<head>
<title>Thank You Student</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body class="">
<br><br><br><br>
<article class="bg-secondary mb-3">  
<div class="card-body text-center">
<h4 class="text-black">Thank you for payment<br></h4>

<br>

<?php 
foreach($Exam as $value){
    if($value["cid"] == "3"){
        echo '<p><a class="btn btn-warning" target="_blank" href="Examination.php?course='.$value['courseName'].'" data-id="3"> Take Mock Test on '. $value['courseName'];
    } else if($value["cid"] == "4"){
        echo '<p><a class="btn btn-warning" target="_blank" href="py.php?course='.$value['courseName'].'" data-id="4"> Take Mock Test on '.  $value['courseName'];
    } else if($value["cid"] == "2"){
        echo '<p><a class="btn btn-warning" target="_blank" href="cpro.php?course='.$value['courseName'].'" data-id="2"> Take Mock Test on '.  $value['courseName'];
    }
    else if($value["cid"] == "1"){
        echo '<p><a class="btn btn-warning" target="_blank" href="quiz3.php?course='.$value['courseName'].'" data-id="1"> Take Mock Test on '.  $value['courseName'];
}
}

// <p><a class="btn btn-warning" target="_blank" href="Examination.php" data-id="1"> Vellampalli Aishwarya.com  
// <p><a class="btn btn-warning" target="_blank" href="py.php" data-id="2"> Vellampalli Aishwarya.com  
?>
 <i class="fa fa-window-restore "></i></a></p>
</div>
<br><br><br>
</article>
 
</body>
</html>
