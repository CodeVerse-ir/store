<?php

// import database information
include '../env.php';


$in_product_code = $_POST['product_code'];

// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// execute query
$sql = " SELECT * 
FROM comments
WHERE product_code = '{$in_product_code}'
ORDER BY DATE(comment_date) ASC 
";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $table = $result->fetch_all();
    echo json_encode($table);
} else {
    echo "0 results";
}

// disconnect from database
$conn->close();
