<?php

// import database information
include '../env.php';

// variable
$tableName = 'products';

$in_product_code = $_POST['product_code'];
$in_product_name = $_POST['product_name'];
$in_product_vendor = $_POST['product_vendor'];
$in_product_attributes = $_POST['product_attributes'];
$product_attributes = json_decode($in_product_attributes, true);
$in_product_description = $_POST['product_description'];
$in_product_image = $_POST['product_image'];
$in_color = $_POST['color'];
$in_discount = $_POST['discount'];
$in_buy_price = $_POST['buy_price'];
$in_quantity_in_stock = $_POST['quantity_in_stock'];
$in_product_line_id = $_POST['product_line_id'];


// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// execute query
$sql = $conn->prepare("UPDATE {$tableName} SET product_name=?, product_vendor=?, product_attributes=?, product_description=?, product_image=?, color=?, discount=?, buy_price=?, quantity_in_stock=?, product_line_id=? WHERE product_code=?"); 


$json_product_attributes = json_encode($product_attributes);
$sql->bind_param('sssssssssis', $in_product_name, $in_product_vendor, $json_product_attributes, $in_product_description, $in_product_image, $in_color, $in_discount, $in_buy_price, $in_quantity_in_stock, $in_product_line_id , $in_product_code);

$result = $sql->execute();

if ($result) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// disconnect from database
$conn->close();
?>