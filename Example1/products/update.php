<?php

require '../vendor/autoload.php';

use MongoDB\Client;

// Check if the request is a PUT request
if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    // Get the JSON data from the request body
    $json = file_get_contents('php://input');
    // Decode the JSON data to an associative array
    $data = json_decode($json, true);

    $product_code = $data['product_code'];
    $discount = $data['discount']; // New password to be updated

    try {
        $mdb = new Client();
        $db = $mdb->store;
        $table = $db->products;

        // Update the document that matches the customer_name
        $updateResult = $table->updateOne(
            ['product_code' => $product_code],
            ['$set' => ['discount' => $discount]]
        );

        echo "Document updated successfully";
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
    
} else {
    echo "Only PUT requests are allowed.";
}