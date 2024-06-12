<?php

// import database information
include '../env.php';

// variable
$tableName = 'product_bookmark';

$in_product_code = $_POST['product_code'];
$in_customer_name = $_POST['customer_name'];

// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// execute query
$sql = "DELETE FROM {$tableName} WHERE product_code = '{$in_product_code}' AND customer_name = '{$in_customer_name}'";

$result = $conn->query($sql);

if ($result) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// disconnect from database
$conn->close();
