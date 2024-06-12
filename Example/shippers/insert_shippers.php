<?php

// import database information
include '../env.php';

// variable
$tableName = 'shippers';



$in_company = $_POST['company'];
$in_first_name = $_POST['first_name'];
$in_last_name = $_POST['last_name'];
$in_email_address = $_POST['email_address'];
$in_job_title = $_POST['job_title'];
$in_business_phone = $_POST['business_phone'];
$in_address_state = $_POST['address_state'];
$in_address_city = $_POST['address_city'];
$in_address_street = $_POST['address_street'];
$in_address_alley = $_POST['address_alley'];
$in_address_postal_code = $_POST['address_postal_code'];



// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// execute query
$sql = "INSERT INTO {$tableName} (
    company,
    first_name,
    last_name,
    email_address,
    job_title,
    business_phone, 
    address_state, 
    address_city,
    address_street,
    address_alley,
    address_postal_code
    )
    VALUES (
'{$in_company}',
'{$in_first_name}',
'{$in_last_name}',
'{$in_email_address}',
'{$in_job_title}',
'{$in_business_phone}',
'{$in_address_state}',
'{$in_address_city}',
'{$in_address_street}',
'{$in_address_alley}',
'{$in_address_postal_code}'
)";

$result = $conn->query($sql);

if ($result) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// disconnect from database
$conn->close();
