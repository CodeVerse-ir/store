<?php

require '../vendor/autoload.php';

use MongoDB\Client;

// Check if the request is a DELETE request
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    // Get the JSON data from the request body
    $json = file_get_contents('php://input');
    // Decode the JSON data to an associative array
    $data = json_decode($json, true);

    $customer_name = $data['customer_name'];

    try {
        $mdb = new Client();
        $db = $mdb->store;
        $table = $db->customers;

        $deleteResult = $table->deleteOne(['customer_name' => $customer_name]);

        echo "Document deleted successfully";

    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
    
} else {
    echo "Only DELETE requests are allowed.";
}