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
    $customer_name = $data['customer_name'];
    $vote_quantity = $data['vote_quantity'];
    
   

    // Create the document with received JSON values
    $documents = [
        "product_code" => $product_code,
        "customer_name" => $customer_name,
        "vote_quantity" => $vote_quantity
    ];

    try {
        $mdb = new Client();
        $db = $mdb->store;
        $table = $db->product_vote; 

        $insertResult = $table->insertOne($documents);

        echo "Document inserted successfully!";
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
} else {
    echo "Only POST requests are allowed.";
}