<?php

// import database information
include '../env.php';


$in_customer_name = $_POST['customer_name'];

$in_address_line_state = $_POST['address_line_state'];
$in_address_line_city = $_POST['address_line_city'];
$in_address_line_street = $_POST['address_line_street'];
$in_address_line_alley = $_POST['address_line_alley'];
$in_address_line_postal_code = $_POST['address_line_postal_code'];


// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// execute query
$sql = " UPDATE orders
SET address_line_state = '{$in_address_line_state}' ,
address_line_city = '{$in_address_line_city}' ,
address_line_street = '{$in_address_line_street}' ,
address_line_alley = '{$in_address_line_alley}' ,
address_line_postal_code = '{$in_address_line_postal_code}'
WHERE orders.customer_name = '{$in_customer_name}' AND order_status = 0 ";

$result = $conn->query($sql);

if ($result) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// disconnect from database
$conn->close();
