<?php

require '../vendor/autoload.php';

use MongoDB\Client;

// Check if the request is a GET request
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Get the JSON data from the request body
    $json = file_get_contents('php://input');
    // Decode the JSON data to an associative array
    $data = json_decode($json, true);

    $product_code = $data['product_code'];
    $customer_name = $data['customer_name'];

    try {
        $mdb = new Client();
        $db = $mdb->store;
        $table = $db->basket;

        $cursor = $table->find(['product_code' => $product_code , 'customer_name' => $customer_name]);

        $results = [];
        foreach ($cursor as $document) {
            $results[] = $document;
        }

        header('Content-Type: application/json');
        echo json_encode($results);

    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
    
} else {
    echo "Only GET requests are allowed.";
}