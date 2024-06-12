<?php

require '../vendor/autoload.php';

use MongoDB\Client;

// Check if the request is a GET request
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Get the JSON data from the request body
    $json = file_get_contents('php://input');
    // Decode the JSON data to an associative array
    $data = json_decode($json, true);

    $shipper_id = $data['shipper_id'];

    try {
        $mdb = new Client();
        $db = $mdb->store;
        $table = $db->shippers;

        $cursor = $table->find(['shipper_id' => $shipper_id]);

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