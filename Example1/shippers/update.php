<?php

require '../vendor/autoload.php';

use MongoDB\Client;

// Check if the request is a PUT request
if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    // Get the JSON data from the request body
    $json = file_get_contents('php://input');
    // Decode the JSON data to an associative array
    $data = json_decode($json, true);

    $shipper_id = $data['shipper_id'];
    $company = $data['company']; // New password to be updated

    try {
        $mdb = new Client();
        $db = $mdb->store;
        $table = $db->shippers;

        // Update the document that matches the customer_name
        $updateResult = $table->updateOne(
            ['shipper_id' => $shipper_id],
            ['$set' => ['company' => $company]]
        );

        echo "Document updated successfully";
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
    
} else {
    echo "Only PUT requests are allowed.";
}