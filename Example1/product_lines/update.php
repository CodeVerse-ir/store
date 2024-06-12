<?php

require '../vendor/autoload.php';

use MongoDB\Client;

// Check if the request is a PUT request
if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    // Get the JSON data from the request body
    $json = file_get_contents('php://input');
    // Decode the JSON data to an associative array
    $data = json_decode($json, true);

    $product_line_id = $data['product_line_id'];
    $product_line_name = $data['product_line_name']; // New password to be updated
    $product_line_description = $data['product_line_description']; // New password to be updated

    try {
        $mdb = new Client();
        $db = $mdb->store;
        $table = $db->product_lines;

        // Update the document that matches the customer_name
        $updateResult = $table->updateOne(
            ['product_line_id' => $product_line_id],
            ['$set' => ['product_line_name' => $product_line_name , 'product_line_description' => $product_line_description]]
        );

        echo "Document updated successfully";
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
    
} else {
    echo "Only PUT requests are allowed.";
}