<?php

// import database information
include '../env.php';

// variable
$tableName = 'basket';



$in_product_code = $_POST['product_code'];
$in_customer_name = $_POST['customer_name'];
$in_quantity = $_POST['quantity'];


// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// execute query
$sql = "INSERT INTO {$tableName} (
    product_code,
    customer_name,
    quantity
    )
    VALUES (
'{$in_product_code}',
'{$in_customer_name}',
'{$in_quantity}'
)";

$result = $conn->query($sql);

if ($result) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// disconnect from database
$conn->close();
