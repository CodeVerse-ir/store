<?php

require '../vendor/autoload.php';

use MongoDB\Client;

// Check if the request is a PUT request
if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    // Get the JSON data from the request body
    $json = file_get_contents('php://input');
    // Decode the JSON data to an associative array
    $data = json_decode($json, true);

    $order_number = $data['order_number'];
    $shipped_date = date('Y-m-d H:i:s'); // New password to be updated
    $order_status = $data['order_status']; // New password to be updated

    try {
        $mdb = new Client();
        $db = $mdb->store;
        $table = $db->orders;

        // Update the document that matches the customer_name
        $updateResult = $table->updateOne(
            ['order_number' => $order_number],
            ['$set' => ['shipped_date' => $shipped_date , 'order_status' => $order_status]]
        );

        echo "Document updated successfully";
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
    
} else {
    echo "Only PUT requests are allowed.";
}