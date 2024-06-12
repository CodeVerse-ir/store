<?php

// import database information
include '../env.php';

// variable
$tableName = 'customers';


$in_customer_name = $_POST['customer_name'];
$in_customer_password = $_POST['customer_password'];
$in_first_name = $_POST['first_name'];
$in_last_name = $_POST['last_name'];
$in_customer_image = $_POST['customer_image'];
$in_phone = $_POST['phone'];
$in_email = $_POST['email'];
$in_status = $_POST['status'];

$in_address_line_state = $_POST['address_line_state'];
$in_address_line_city = $_POST['address_line_city'];
$in_address_line_street = $_POST['address_line_street'];
$in_address_line_alley = $_POST['address_line_alley'];
$in_address_line_postal_code = $_POST['address_line_postal_code'];

$in_home_address_state = $_POST['home_address_state'];
$in_home_address_city = $_POST['home_address_city'];
$in_home_address_street = $_POST['home_address_street'];
$in_home_address_alley = $_POST['home_address_alley'];
$in_home_address_postal_code = $_POST['home_address_postal_code'];


// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// execute query
$sql = "INSERT INTO {$tableName} (
    customer_name,
    customer_password,
    first_name,
    last_name,
    customer_image ,
    phone,
    email,
    status,
    address_line_state,
    address_line_city,
    address_line_street,
    address_line_alley,
    address_line_postal_code,
    home_address_state,
    home_address_city,
    home_address_street,
    home_address_alley,
    home_address_postal_code
    )
    VALUES (
'{$in_customer_name}',
'{$in_customer_password}',
'{$in_first_name}',
'{$in_last_name}',
'{$in_customer_image}',
'{$in_phone}',
'{$in_email}',
'{$in_status}',
'{$in_address_line_state}',
'{$in_address_line_city}',
'{$in_address_line_street}',
'{$in_address_line_alley}',
'{$in_address_line_postal_code}',
'{$in_home_address_state}',
'{$in_home_address_city}',
'{$in_home_address_street}',
'{$in_home_address_alley}',
'{$in_home_address_postal_code}'
)";

$result = $conn->query($sql);

if ($result) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// disconnect from database
$conn->close();
