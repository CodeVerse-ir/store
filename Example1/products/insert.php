<?php

require '../vendor/autoload.php';

use MongoDB\Client;

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the JSON data from the request body
    $json = file_get_contents('php://input');
    // Decode the JSON data to an associative array
    $data = json_decode($json, true);

    // Extract data from the JSON array
    $product_code = $data['product_code'];
    $product_name = $data['product_name'];
    $product_vendor = $data['product_vendor'];
    $product_attributes = $data['product_attributes'];
    $product_description = $data['product_description'];
    $product_image = $data['product_image'];
    $color = $data['color'];
    $discount = $data['discount'];
    $buy_price = $data['buy_price'];
    $quantity_in_stock = $data['quantity_in_stock'];
    $product_line_id = $data['product_line_id'];
   

    // Create the document with received JSON values
    $documents = [
        "product_code" => $product_code,
        "product_name" => $product_name,
        "product_vendor" => $product_vendor,
        "product_attributes" => $product_attributes,
        "product_description" => $product_description,
        "product_image" => $product_image,
        "color" => $color,
        "discount" => $discount,
        "buy_price" => $buy_price,
        "quantity_in_stock" => $quantity_in_stock,
        "product_line_id" => $product_line_id
    ];

    try {
        $mdb = new Client();
        $db = $mdb->store;
        $table = $db->products; 

        $insertResult = $table->insertOne($documents);

        echo "Document inserted successfully!";
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
} else {
    echo "Only POST requests are allowed.";
}