<?php

// import database information
include '../env.php';


$in_product_name = $_POST['product_name'];

// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// execute query
$sql = " SELECT orders.*
FROM orders
INNER JOIN order_detail
ON orders.order_number = order_detail.order_number
INNER JOIN products
ON order_detail.product_code = products.product_code
WHERE products.product_name = '{$in_product_name}'
";

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
