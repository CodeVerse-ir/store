<?php

// import database information
include '../env.php';

// variable
$tableName = 'comments';


$in_comment_text = $_POST['comment_text'];

$in_comment_date = date('Y-m-d H:i:s');

$in_product_code = $_POST['product_code'];
$in_customer_name = $_POST['customer_name'];
$in_reply_comment = $_POST['reply_comment'];


// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// execute query
$sql = "INSERT INTO {$tableName} (
    comment_text,
    comment_date,
    product_code,
    customer_name,
    reply_comment
    )
    VALUES (
'{$in_comment_text}',
'{$in_comment_date}',
'{$in_product_code}',
'{$in_customer_name}',
'{$in_reply_comment}'
)";

$result = $conn->query($sql);

if ($result) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// disconnect from database
$conn->close();
