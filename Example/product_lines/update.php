<?php

// import database information
include '../env.php';

// variable
$tableName = 'product_lines';

$in_product_line_id = $_POST['product_line_id'];
$in_product_line_name = $_POST['product_line_name'];
$in_product_line_image = $_POST['product_line_image'];
$in_product_line_description = $_POST['product_line_description'];



// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// execute query
$sql = "UPDATE {$tableName} 
SET
product_line_name = '{$in_product_line_name}',
product_line_image = '{$in_product_line_image}',
product_line_description = '{$in_product_line_description}'
WHERE 
product_line_id = '{$in_product_line_id}'
";


$result = $conn->query($sql);

if ($result) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// disconnect from database
$conn->close();
