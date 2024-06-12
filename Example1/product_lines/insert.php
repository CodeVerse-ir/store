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
    $product_line_id = $data['product_line_id'];
    $product_line_name = $data['product_line_name'];
    $product_line_image = $data['product_line_image'];
    $product_line_description = $data['product_line_description'];
    
    

    // Create the document with received JSON values
    $documents = [
        "product_line_id" => $product_line_id,
        "product_line_name" => $product_line_name,
        "product_line_image" => $product_line_image,
        "product_line_description" => $product_line_description
    ];

    try {
        $mdb = new Client();
        $db = $mdb->store;
        $table = $db->product_lines;

        $insertResult = $table->insertOne($documents);

        echo "Document inserted successfully!";
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
} else {
    echo "Only POST requests are allowed.";
}