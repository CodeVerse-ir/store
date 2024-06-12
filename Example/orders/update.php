<?php

// import database information
include '../env.php';

// variable
$tableName = 'orders';

$in_order_number = $_POST['order_number'];
$in_order_status = $_POST['order_status'];
$in_shipping_cost = $_POST['shipping_cost'];
$in_phone = $_POST['phone'];
$in_address_line_state = $_POST['address_line_state'];
$in_address_line_city = $_POST['address_line_city'];
$in_address_line_street = $_POST['address_line_street'];
$in_address_line_alley = $_POST['address_line_alley'];
$in_address_line_postal_code = $_POST['address_line_postal_code'];
$in_customer_name = $_POST['customer_name'];
$in_shipper_id = $_POST['shipper_id'];



// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// execute query
$sql = "UPDATE {$tableName} 
SET
order_status = '{$in_order_status}',
shipping_cost = '{$in_shipping_cost}',
phone = '{$in_phone}',
address_line_state = '{$in_address_line_state}',
address_line_city = '{$in_address_line_city}',
address_line_street = '{$in_address_line_street}',
address_line_alley = '{$in_address_line_alley}',
address_line_postal_code = '{$in_address_line_postal_code}',
customer_name = '{$in_customer_name}',
shipper_id = '{$in_shipper_id}'
WHERE 
order_number = {$in_order_number}
";


$result = $conn->query($sql);

if ($result) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// disconnect from database
$conn->close();
