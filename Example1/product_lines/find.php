<?php

require '../vendor/autoload.php';

use MongoDB\Client;

// Check if the request is a GET request
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Get the JSON data from the request body
    $json = file_get_contents('php://input');
    // Decode the JSON data to an associative array
    $data = json_decode($json, true);

    $product_line_id = $data['product_line_id'];

    try {
        $mdb = new Client();
        $db = $mdb->store;
        $table = $db->product_lines;

        $cursor = $table->find(['product_line_id' => $product_line_id]);

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