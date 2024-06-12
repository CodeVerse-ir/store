<?php

// import database information
include '../env.php';

$in_product_line_id = $_POST['product_line_id'];


// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// execute query
$sql = " SELECT * FROM products WHERE product_line_id = '{$in_product_line_id}'";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $table = $result->fetch_all();
    echo json_encode($table);
} else {
    echo "0 results";
}

// disconnect from database
$conn->close();
