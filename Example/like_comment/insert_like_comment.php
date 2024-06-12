<?php

// import database information
include '../env.php';

// variable
$tableName = 'like_comment';



$in_comment_id = $_POST['comment_id'];
$in_customer_name = $_POST['customer_name'];


// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// execute query
$sql = "INSERT INTO {$tableName} (
    comment_id,
    customer_name
    )
    VALUES (
'{$in_comment_id}',
'{$in_customer_name}'
)";

$result = $conn->query($sql);

if ($result) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// disconnect from database
$conn->close();
