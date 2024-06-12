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
    $comment_id = $data['comment_id'];
    $comment_text = $data['comment_text'];
    $comment_date = date('Y-m-d H:i:s');
    $product_code = $data['product_code'];
    $customer_name = $data['customer_name'];
    $reply_comment = $data['reply_comment'];
    
   

    // Create the document with received JSON values
    $documents = [
        "comment_id" => $comment_id,
        "comment_text" => $comment_text,
        "comment_date" => $comment_date,
        "product_code" => $product_code,
        "customer_name" => $customer_name,
        "reply_comment" => $reply_comment
    ];

    try {
        $mdb = new Client();
        $db = $mdb->store;
        $table = $db->comments; 

        $insertResult = $table->insertOne($documents);

        echo "Document inserted successfully!";
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
} else {
    echo "Only POST requests are allowed.";
}