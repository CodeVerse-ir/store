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
    $order_number = $data['order_number'];
    $order_date = date('Y-m-d H:i:s');
    $order_status = $data['order_status'];
    $shipping_cost = $data['shipping_cost'];
    $phone = $data['phone'];
    $state = $data['state'];
    $city = $data['city'];
    $street = $data['street'];
    $alley = $data['alley'];
    $postal_code = $data['postal_code'];
    $customer_name = $data['customer_name'];
    $shipper_id = $data['shipper_id'];

   

    // Create the document with received JSON values
    $documents = [
        "order_number" => $order_number,
        "order_date" => $order_date,
        "shipped_date" => "",
        "order_status" => $order_status,
        "shipping_cost" => $shipping_cost,
        "phone" => $phone,
        "address" => [
            "state" => $state,
            "city" => $city,
            "street" => $street,
            "alley" => $alley,
            "postal_code" => $postal_code
        ],
        "customer_name" => $customer_name,
        "shipper_id" => $shipper_id
    ];

    try {
        $mdb = new Client();
        $db = $mdb->store;
        $table = $db->orders; 

        $insertResult = $table->insertOne($documents);

        echo "Document inserted successfully!";
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
} else {
    echo "Only POST requests are allowed.";
}