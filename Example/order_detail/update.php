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
$sql = "UPDATE {$tableName} 
SET
quantity_ordered = '{$in_quantity_ordered}',
price_each = '{$in_price_each}',
discount = '{$in_discount}',
color = '{$in_color}'

WHERE 
order_number = '{$in_order_number}' AND product_code = '{$in_product_code}'
";


$result = $conn->query($sql);

if ($result) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// disconnect from database
$conn->close();
