<?php

// import database information
include '../env.php';

// variable
$tableName = 'order_detail';



$in_order_number = $_POST['order_number'];
$in_product_code = $_POST['product_code'];
$in_quantity_ordered = $_POST['quantity_ordered'];
$in_price_each = $_POST['price_each'];
$in_discount = $_POST['discount'];
$in_color = $_POST['color'];


// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// execute query
$sql = "INSERT INTO {$tableName} (
    order_number,
    product_code,
    quantity_ordered,
    price_each,
    discount,
    color
    )
    VALUES (
'{$in_order_number}',
'{$in_product_code}',
'{$in_quantity_ordered}',
'{$in_price_each}',
'{$in_discount}',
'{$in_color}'
)";

$result = $conn->query($sql);

if ($result) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// disconnect from database
$conn->close();
