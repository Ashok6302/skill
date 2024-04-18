<?php
// Database connection parameters
$db_host        = "localhost";
$db_username    = "root";
$db_password    = "";
$db_name        = "onlinecourse2";

// Create connection
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Define the data to be inserted into tbl_records
$RecordArray = array(
    "user_id" => $_POST['id'],
    "course_id" => $_POST['product_id'],
    "payment_id" => $_POST['razorpay_payment_id'],
    "amount" => $_POST['totalAmount'],
    "status" => "paid" // Set the status to "paid"
);

// Escape values to prevent SQL injection
$escaped_values = array_map(array($conn, 'real_escape_string'), array_values($RecordArray));

// Build the SQL query
$columns = implode(", ", array_keys($RecordArray));
$values = implode("', '", $escaped_values);
$Query = "INSERT INTO tbl_records ($columns) VALUES ('$values')";

// Execute the query
$Execute = mysqli_query($conn, $Query) or die ("Error in query: $Query. " . mysqli_error($conn));

// Retrieve the last inserted ID
$last_inserted_id = mysqli_insert_id($conn);

// Update tbl_orders to set status as "paid"
$updateQuery = "UPDATE tbl_orders SET status = 'paid' WHERE payment_id = '" . $_POST['razorpay_payment_id'] . "'";
$updateExecute = mysqli_query($conn, $updateQuery) or die ("Error in query: $updateQuery. " . mysqli_error($conn));

// Prepare the response array
$response = array(
    'rid' => $last_inserted_id,
    'msg' => 'Payment successfully credited',
    'status' => true
);

// Send JSON response
echo json_encode($response);

// Close the connection
mysqli_close($conn);
?>
