<?php

// import database information
include '../env.php';

$in_low_buy_price = $_POST['low_buy_price'];
$in_high_buy_price = $_POST['high_buy_price'];


// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// execute query
$sql = " SELECT * FROM products WHERE buy_price >= '{$in_low_buy_price}' AND buy_price <= '{$in_high_buy_price}' ORDER BY buy_price ASC";


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
