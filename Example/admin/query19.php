<?php

// import database information
include '../env.php';



// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// execute query
$sql = " SELECT shippers.company , YEAR(order_date) AS year , COUNT(order_number) AS number
FROM shippers
LEFT JOIN orders
ON shippers.shipper_id = orders.shipper_id
GROUP BY year , shippers.shipper_id
ORDER BY shippers.company , year ASC
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
