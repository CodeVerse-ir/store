<?php

// import database information
include '../env.php';

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE {$dbname}";

$result = $conn->query($sql);

if ($result) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

// disconnect from database
$conn->close();
