<?php

// import database information
include '../env.php';


$in_customer_name = $_POST['customer_name'];

$in_shipped_date = date('Y-m-d H:i:s');

// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// execute query
$sql = " UPDATE orders
SET order_status = 3
WHERE orders.customer_name = '{$in_customer_name}' AND order_status = 2 ";

$result = $conn->query($sql);

if ($result) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// disconnect from database
$conn->close();
