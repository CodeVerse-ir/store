<?php

// import database information
include '../env.php';

// variable
$tableName = 'comments';

$in_comment_id = $_POST['comment_id'];

// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// execute query
$sql = "DELETE FROM {$tableName} WHERE comment_id = '{$in_comment_id}'";

$result = $conn->query($sql);

if ($result) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// disconnect from database
$conn->close();
