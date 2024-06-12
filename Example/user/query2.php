<?php

// import database information
include '../env.php';


$in_customer_name = $_POST['customer_name'];


// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// execute query
$sql = " SELECT products.product_name , products.color , basket.quantity
FROM products
INNER JOIN basket
ON products.product_code = basket.product_code
where basket.customer_name = '{$in_customer_name}' ";

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
