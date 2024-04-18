<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form with Rating</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        textarea {
            height: 150px;
            resize: vertical;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body style="    background-color: #5791d959;">
<?php include('includes/header.php');?><br><br>
    <div class="container">
        <h2>Feedback Form</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Database connection
            $servername = "localhost";
            $username = "username";
            $password = "";
            $dbname = "onlinecourse2";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Get form data
            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $rating = $_POST['rating'] ?? '';
            $message = $_POST['message'] ?? '';

            // Insert data into database with current date and time
            $sql = "INSERT INTO feedback (name, email, rating, message, date) 
                    VALUES ('$name', '$email', '$rating', '$message', NOW())";

            if ($conn->query($sql) === TRUE) {
                echo "<p style='color: green;'>Feedback submitted successfully</p>";
            } else {
                echo "<p style='color: red;'>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }

            $conn->close();
        }
        ?>
        <form action="" method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="rating">Rating:</label><br>
            <select id="rating" name="rating">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select><br>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" required></textarea><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
