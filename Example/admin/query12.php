<?php

// import database information
include '../env.php';



// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// execute query
$sql = " SELECT customers.first_name , customers.last_name , COUNT( orders.order_number ) AS COUNT_order_number
FROM customers
LEFT JOIN orders
ON customers.customer_name = orders.customer_name
GROUP BY orders.customer_name
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
