<?php

// import database information
include '../env.php';

// variable
$tableName = 'product_lines';


$in_product_line_name = $_POST['product_line_name'];
$in_product_line_image = $_POST['product_line_image'];
$in_product_line_description = $_POST['product_line_description'];


// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// execute query
$sql = "INSERT INTO {$tableName} (
    product_line_name,
    product_line_image,
    product_line_description
    )
    VALUES (
'{$in_product_line_name}',
'{$in_product_line_image}',
'{$in_product_line_description}'
)";

$result = $conn->query($sql);

if ($result) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// disconnect from database
$conn->close();
