<?php

// import database information
include '../env.php';

// variable
$tableName = 'shippers';


$in_shipper_id = $_POST['shipper_id'];
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
$sql = "UPDATE {$tableName} 
SET
company = '{$in_company}',
first_name = '{$in_first_name}',
last_name = '{$in_last_name}',
email_address = '{$in_email_address}',
job_title = '{$in_job_title}',
business_phone = '{$in_business_phone}',
address_state = '{$in_address_state}',
address_city = '{$in_address_city}',
address_street = '{$in_address_street}',
address_alley = '{$in_address_alley}',
address_postal_code = '{$in_address_postal_code}'
WHERE 
shipper_id = '{$in_shipper_id}'
";


$result = $conn->query($sql);

if ($result) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// disconnect from database
$conn->close();
