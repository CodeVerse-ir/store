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
    $customer_name = $data['customer_name'];
    $customer_password = $data['customer_password'];
    $first_name = $data['first_name'];
    $last_name = $data['last_name'];
    $customer_image = $data['customer_image'];
    $phone = $data['phone'];
    $email = $data['email'];
    $status = $data['status'];
    $state = $data['state'];
    $city = $data['city'];
    $street = $data['street'];
    $alley = $data['alley'];
    $postal_code = $data['postal_code'];

    // Create the document with received JSON values
    $documents = [
        "customer_name" => $customer_name,
        "customer_password" => $customer_password,
        "first_name" => $first_name,
        "last_name" => $last_name,
        "customer_image" => $customer_image,
        "phone" => $phone,
        "email" => $email,
        "status" => $status,
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
        $table = $db->customers;

        $insertResult = $table->insertOne($documents);

        echo "Document inserted successfully!";
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
} else {
    echo "Only POST requests are allowed.";
}