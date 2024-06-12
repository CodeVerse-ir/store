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
    $shipper_id = $data['shipper_id'];
    $company = $data['company'];
    $first_name = $data['first_name'];
    $last_name = $data['last_name'];
    $email_address = $data['email_address'];
    $job_title = $data['job_title'];
    $business_phone = $data['business_phone'];
    $state = $data['state'];
    $city = $data['city'];
    $street = $data['street'];
    $alley = $data['alley'];
    $postal_code = $data['postal_code'];

   

    // Create the document with received JSON values
    $documents = [
        "shipper_id" => $shipper_id,
        "company" => $company,
        "first_name" => $first_name,
        "last_name" => $last_name,
        "email_address" => $email_address,
        "job_title" => $job_title,
        "business_phone" => $business_phone,
        "address" => [
            "state" => $state,
            "city" => $city,
            "street" => $street,
            "alley" => $alley,
            "postal_code" => $postal_code
        ]
    ];

    try {
        $mdb = new Client();
        $db = $mdb->store;
        $table = $db->shippers; 

        $insertResult = $table->insertOne($documents);

        echo "Document inserted successfully!";
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
} else {
    echo "Only POST requests are allowed.";
}