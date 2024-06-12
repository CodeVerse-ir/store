<?php

// import database information
include '../env.php';


// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// execute query
$sql = " SELECT products.*, count(product_like.product_code) AS likes 
FROM products 
INNER JOIN product_like 
ON products.product_code = product_like.product_code 
GROUP BY product_like.product_code 
HAVING likes > 1 
ORDER BY likes DESC
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
