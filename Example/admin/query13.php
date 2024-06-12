<?php

// import database information
include '../env.php';



// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// execute query
$sql = " SELECT customers.first_name , customers.last_name , ROUND(SUM( order_detail.quantity_ordered * order_detail.price_each ) - SUM((( order_detail.price_each * discount ) / 100 ) * order_detail.quantity_ordered)) AS COUNT_orders 
FROM customers
INNER JOIN orders
ON customers.customer_name = orders.customer_name
INNER JOIN order_detail
ON orders.order_number = order_detail.order_number
GROUP BY customers.customer_name
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
