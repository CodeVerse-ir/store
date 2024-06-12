<?php

// import database information
include '../env.php';

// variable
$tableName = 'comments';


$in_comment_id = $_POST['comment_id'];
$in_comment_text = $_POST['comment_text'];




// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// execute query
$sql = "UPDATE {$tableName} 
SET
comment_text = '{$in_comment_text}'
WHERE 
comment_id = '{$in_comment_id}'
";


$result = $conn->query($sql);

if ($result) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// disconnect from database
$conn->close();
