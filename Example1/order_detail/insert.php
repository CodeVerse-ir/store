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
    $order_number = $data['order_number'];
    $product_code = $data['product_code'];
    $quantity_ordered = $data['quantity_ordered'];
    $price_each = $data['price_each'];
    $discount = $data['discount'];
    $color = $data['color'];

   

    // Create the document with received JSON values
    $documents = [
        "order_number" => $order_number,
        "product_code" => $product_code,
        "quantity_ordered" => $quantity_ordered,
        "price_each" => $price_each,
        "discount" => $discount,
        "color" => $color
    ];

    try {
        $mdb = new Client();
        $db = $mdb->store;
        $table = $db->order_detail; 

        $insertResult = $table->insertOne($documents);

        echo "Document inserted successfully!";
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
} else {
    echo "Only POST requests are allowed.";
}