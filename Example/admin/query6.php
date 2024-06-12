<?php

// import database information
include '../env.php';


// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// execute query
$sql = " SELECT DISTINCT shippers.company
FROM shippers
INNER JOIN orders
ON shippers.shipper_id = orders.shipper_id
INNER JOIN order_detail
ON orders.order_number = order_detail.order_number
WHERE order_detail.price_each > 20
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
