<?php

require '../vendor/autoload.php';

use MongoDB\Client;

// Check if the request is a PUT request
if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    // Get the JSON data from the request body
    $json = file_get_contents('php://input');
    // Decode the JSON data to an associative array
    $data = json_decode($json, true);

    $comment_id = $data['comment_id'];
    $comment_text = $data['comment_text']; // New password to be updated

    try {
        $mdb = new Client();
        $db = $mdb->store;
        $table = $db->comments;

        // Update the document that matches the customer_name
        $updateResult = $table->updateOne(
            ['comment_id' => $comment_id],
            ['$set' => ['comment_text' => $comment_text]]
        );

        echo "Document updated successfully";
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
    
} else {
    echo "Only PUT requests are allowed.";
}