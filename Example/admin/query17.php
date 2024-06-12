<?php

// import database information
include '../env.php';



// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// execute query
$sql = " SELECT MONTHNAME(order_date) AS mounth_name , COUNT(order_number) AS number
FROM orders
WHERE YEAR(order_date) = YEAR(CURRENT_DATE)
GROUP BY mounth_name
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
