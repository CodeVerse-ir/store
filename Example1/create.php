<?php

require 'vendor/autoload.php';

use MongoDB\Client;

try {
    $mdb = new Client();    

    $db = $mdb->store;
    $table = $db->customers;


    $documents = [
    [
        "customer_name" => "JohnDoe",
        "customer_password" => "pass1234",
        "first_name" => "John",
        "last_name" => "Doe",
        "customer_image" => "profile.jpg",
        "phone" => "1234567890",
        "email" => "johndoe@example.com",
        "status" => "admin",
        "address" => [
            "state" => "California",
            "city" => "Los Angeles",
            "street" => "Main Street",
            "alley" => "Central Avenue",
            "postal_code" => "12345"
        ],
        "home_address" => [
            "state" => "California",
            "city" => "San Francisco",
            "street" => "Oak Street",
            "alley" => "Pine Avenue",
            "postal_code" => "54321"
        ]
    ],
    [
        "customer_name" => "JaneDoe",
        "customer_password" => "pass1234",
        "first_name" => "Jane",
        "last_name" => "Doe",
        "customer_image" => "profile.jpg",
        "phone" => "165111313",
        "email" => "janedoe@example.com",
        "status" => "admin",
        "address" => [
            "state" => "California",
            "city" => "Los Angeles",
            "street" => "Main Street",
            "alley" => "Central Avenue",
            "postal_code" => "12345"
        ],
        "home_address" => [
            "state" => "California",
            "city" => "San Francisco",
            "street" => "Oak Street",
            "alley" => "Pine Avenue",
            "postal_code" => "54321"
        ]
    ],
    [
        "customer_name" => "AliceSmith",
        "customer_password" => "pass1894",
        "first_name" => "Alice",
        "last_name" => "Smith",
        "customer_image" => "profile.jpg",
        "phone" => "12345465890",
        "email" => "alice@example.com",
        "status" => "user",
        "address" => [
            "state" => "New York",
            "city" => "New York City",
            "street" => "Broadway",
            "alley" => "First Avenue",
            "postal_code" => "465489"
        ],
        "home_address" => [
            "state" => "New York",
            "city" => "Buffalo",
            "street" => "Elm Street",
            "alley" => "Maple Avenue",
            "postal_code" => "54321"
        ]
    ],
    [
        "customer_name" => "BobJohnson",
        "customer_password" => "pass1894",
        "first_name" => "Bob",
        "last_name" => "Johnson",
        "customer_image" => "profile.jpg",
        "phone" => "12345465890",
        "email" => "bob@example.com",
        "status" => "user",
        "address" => [
            "state" => "Texas",
            "city" => "Houston",
            "street" => "Main Street",
            "alley" => "Second Avenue",
            "postal_code" => "465489"
        ],
        "home_address" => [
            "state" => "Texas",
            "city" => "Austin",
            "street" => "Cedar Street",
            "alley" => "Pine Avenue",
            "postal_code" => "54321"
        ]
    ],
    [
        "customer_name" => "EmilyBrown",
        "customer_password" => "pass1894",
        "first_name" => "Emily",
        "last_name" => "Brown",
        "customer_image" => "profile.jpg",
        "phone" => "12345465890",
        "email" => "emily@example.com",
        "status" => "user",
        "address" => [
            "state" => "Florida",
            "city" => "Miami",
            "street" => "Ocean Drive",
            "alley" => "Sunset Boulevard",
            "postal_code" => "6545465"
        ],
        "home_address" => [
            "state" => "Florida",
            "city" => "Orlando",
            "street" => "Palm Street",
            "alley" => "Grove Avenue",
            "postal_code" => "45678"
        ]
    ],
    [
        "customer_name" => "MichaelDavis",
        "customer_password" => "pass1894",
        "first_name" => "Michael",
        "last_name" => "Davis",
        "customer_image" => "profile.jpg",
        "phone" => "12345465890",
        "email" => "michael@example.com",
        "status" => "user",
        "address" => [
            "state" => "California",
            "city" => "Los Angeles",
            "street" => "Hollywood Boulevard",
            "alley" => "Vine Avenue",
            "postal_code" => "546546"
        ],
        "home_address" => [
            "state" => "California",
            "city" => "San Francisco",
            "street" => "Market Street",
            "alley" => "Mission Avenue",
            "postal_code" => "464641"
        ]
    ],
    [
        "customer_name" => "SarahWilson",
        "customer_password" => "pass1894",
        "first_name" => "Sarah",
        "last_name" => "Wilson",
        "customer_image" => "profile.jpg",
        "phone" => "12345465890",
        "email" => "sarah@example.com",
        "status" => "user",
        "address" => [
            "state" => "California",
            "city" => "San Francisco",
            "street" => "Golden Gate Avenue",
            "alley" => "Ocean Avenue",
            "postal_code" => "546547"
        ],
        "home_address" => [
            "state" => "California",
            "city" => "Los Angeles",
            "street" => "Sunset Boulevard",
            "alley" => "Hollywood Boulevard",
            "postal_code" => "987546"
        ]
    ],
    [
        "customer_name" => "DavidClark",
        "customer_password" => "pass1894",
        "first_name" => "David",
        "last_name" => "Clark",
        "customer_image" => "profile.jpg",
        "phone" => "12345465890",
        "email" => "david@example.com",
        "status" => "user",
        "address" => [
            "state" => "Texas",
            "city" => "Dallas",
            "street" => "Main Street",
            "alley" => "First Avenue",
            "postal_code" => "6545678"
        ],
        "home_address" => [
            "state" => "Texas",
            "city" => "Houston",
            "street" => "River Street",
            "alley" => "Lake Avenue",
            "postal_code" => "123546"
        ]
    ],
    [
        "customer_name" => "OliviaLee",
        "customer_password" => "pass1894",
        "first_name" => "Olivia",
        "last_name" => "Lee",
        "customer_image" => "profile.jpg",
        "phone" => "12345465890",
        "email" => "olivia@example.com",
        "status" => "user",
        "address" => [
            "state" => "New York",
            "city" => "Albany",
            "street" => "State Street",
            "alley" => "Washington Avenue",
            "postal_code" => "313654"
        ],
        "home_address" => [
            "state" => "New York",
            "city" => "New York City",
            "street" => "Park Street",
            "alley" => "Lexington Avenue",
            "postal_code" => "511121"
        ]
    ],
    [
        "customer_name" => "DanielMiller",
        "customer_password" => "pass1894",
        "first_name" => "Daniel",
        "last_name" => "Miller",
        "customer_image" => "profile.jpg",
        "phone" => "654564989897",
        "email" => "daniel@example.com",
        "status" => "user",
        "address" => [
            "state" => "California",
            "city" => "San Diego",
            "street" => "Beach Boulevard",
            "alley" => "Palm Street",
            "postal_code" => "5644445"
        ],
        "home_address" => [
            "state" => "California",
            "city" => "Los Angeles",
            "street" => "Rodeo Drive",
            "alley" => "Beverly Boulevard",
            "postal_code" => "5645412"
        ]
    ],
    [
        "customer_name" => "SophiaTaylor",
        "customer_password" => "pass1894",
        "first_name" => "Sophia",
        "last_name" => "Taylor",
        "customer_image" => "profile.jpg",
        "phone" => "46546554132",
        "email" => "sophia@example.com",
        "status" => "user",
        "address" => [
            "state" => "Florida",
            "city" => "Jacksonville",
            "street" => "Main Street",
            "alley" => "Second Avenue",
            "postal_code" => "231875"
        ],
        "home_address" => [
            "state" => "Florida",
            "city" => "Miami",
            "street" => "Collins Avenue",
            "alley" => "Ocean Drive",
            "postal_code" => "213465"
        ]
    ],
    [
        "customer_name" => "EthanAnderson",
        "customer_password" => "pass1894",
        "first_name" => "Ethan",
        "last_name" => "Anderson",
        "customer_image" => "profile.jpg",
        "phone" => "654564989897",
        "email" => "ethan@example.com",
        "status" => "user",
        "address" => [
            "state" => "Florida",
            "city" => "Miami",
            "street" => "Ocean Drive",
            "alley" => "Sunset Boulevard",
            "postal_code" => "1468781"
        ],
        "home_address" => [
            "state" => "Florida",
            "city" => "Orlando",
            "street" => "Palm Street",
            "alley" => "Grove Avenue",
            "postal_code" => "3218984"
        ]
    ]
    ];

    $insertResult = $table->insertMany($documents);

    // *********************************************************************

    $table = $db->product_lines;


    $documents = [
    [
        "product_line_id" => 1,
        "product_line_name" => "Kitchen Appliances",
        "product_line_image" => "kitchen_appliances.jpg",
        "product_line_description" => "A wide range of kitchen appliances including blenders, mixers, toasters, and more."
        
    ],
    [
        "product_line_id" => 2,
        "product_line_name" => "Home Electronics",
        "product_line_image" => "home_electronics.jpg",
        "product_line_description" => "High-quality home electronics such as televisions, sound systems, and home theater setups."
        
    ],
    [
        "product_line_id" => 3,
        "product_line_name" => "Cleaning Supplies",
        "product_line_image" => "cleaning_supplies.jpg",
        "product_line_description" => "Cleaning supplies for every need, including vacuum cleaners, mops, and cleaning solutions."
        
    ],
    [
        "product_line_id" => 4,
        "product_line_name" => "Cookware",
        "product_line_image" => "cookware.jpg",
        "product_line_description" => "A variety of cookware options including pots, pans, and bakeware."
        
    ],
    [
        "product_line_id" => 5,
        "product_line_name" => "Home Decor",
        "product_line_image" => "home_decor.jpg",
        "product_line_description" => "Stylish and trendy home decor items to enhance the look of your living space."
        
    ],
    [
        "product_line_id" => 6,
        "product_line_name" => "Furniture",
        "product_line_image" => "furniture.jpg",
        "product_line_description" => "Comfortable and durable furniture pieces for every room in your home."
        
    ],
    [
        "product_line_id" => 7,
        "product_line_name" => "Bedding",
        "product_line_image" => "bedding.jpg",
        "product_line_description" => "Luxurious and comfortable bedding sets for a good nightś sleep."
        
    ],
    [
        "product_line_id" => 8,
        "product_line_name" => "Bath Accessories",
        "product_line_image" => "bath_accessories.jpg",
        "product_line_description" => "High-quality bath accessories including towels, shower curtains, and bath mats."
    ],
    [
        "product_line_id" => 9,
        "product_line_name" => "Outdoor Living",
        "product_line_image" => "outdoor_living.jpg",
        "product_line_description" => "Outdoor furniture, grills, and accessories to create the perfect outdoor living space."
        
    ],
    [
        "product_line_id" => 10,
        "product_line_name" => "Home Improvement",
        "product_line_image" => "home_improvement.jpg",
        "product_line_description" => "Tools and equipment for all your home improvement projects."
        
    ]
    

    ];
    
    $insertResult = $table->insertMany($documents);



    // *********************************************************************


    
    $table = $db->products;


    $documents = [
    [
        "product_code" => "P001",
        "product_name" => "Blender",
        "product_vendor" => "KitchenAid",
        "product_attributes" => [
            "power" => "800W",
            "capacity" => "1.5L"
        ],
        "product_description" => "A powerful blender for all your blending needs.",
        "product_image" => "blender.jpg",
        "color" => "Silver",
        "discount" => 0,
        "buy_price" => 100,
        "quantity_in_stock" => 10,
        "product_line_id" => 1
    ],
    [
        "product_code" => "P002",
        "product_name" => "Toaster",
        "product_vendor" => "Cuisinart",
        "product_attributes" => [
            "slices" => "4",
            "settings" => "7"
        ],
        "product_description" => "A 4-slice toaster with multiple settings for perfect toast every time.",
        "product_image" => "toaster.jpg",
        "color" => "Black",
        "discount" => 0,
        "buy_price" => 50,
        "quantity_in_stock" => 5,
        "product_line_id" => 1
    ],
    [
        "product_code" => "P003",
        "product_name" => "Television",
        "product_vendor" => "Samsung",
        "product_attributes" => [
            "size" => "55 inches",
            "resolution" => "4K"
        ],
        "product_description" => "A high-quality 55-inch television with 4K resolution for stunning picture quality.",
        "product_image" => "tv.jpg",
        "color" => "Black",
        "discount" => 0,
        "buy_price" => 1000,
        "quantity_in_stock" => 2,
        "product_line_id" => 2
    ],
    [
        "product_code" => "P004",
        "product_name" => "Vacuum Cleaner",
        "product_vendor" => "Dyson",
        "product_attributes" => [
            "power" => "1200W",
            "cordless" => "true"
        ],
        "product_description" => "A powerful cordless vacuum cleaner for easy cleaning.",
        "product_image" => "vacuum_cleaner.jpg",
        "color" => "Gray",
        "discount" => 0,
        "buy_price" => 300,
        "quantity_in_stock" => 8,
        "product_line_id" => 3
    ],
    [
        "product_code" => "P005",
        "product_name" => "Cookware Set",
        "product_vendor" => "Calphalon",
        "product_attributes" => [
            "pieces" => "10",
            "material" => "stainless steel"
        ],
        "product_description" => "A set of high-quality stainless steel cookware for all your cooking needs.",
        "product_image" => "cookware_set.jpg",
        "color" => "Silver",
        "discount" => 0,
        "buy_price" => 200,
        "quantity_in_stock" => 3,
        "product_line_id" => 4
    ],
    [
        "product_code" => "P006",
        "product_name" => "Accent Chair",
        "product_vendor" => "Ashley Furniture",
        "product_attributes" => [
            "color" => "gray",
            "material" => "fabric"
        ],
        "product_description" => "A stylish gray accent chair to enhance the look of your living room.",
        "product_image" => "accent_chair.jpg",
        "color" => "Gray",
        "discount" => 0,
        "buy_price" => 150,
        "quantity_in_stock" => 1,
        "product_line_id" => 6
    ],
    [
        "product_code" => "P007",
        "product_name" => "Comforter Set",
        "product_vendor" => "Nautica",
        "product_attributes" => [
            "size" => "queen",
            "color" => "navy"
        ],
        "product_description" => "A luxurious navy comforter set for a cozy nightś sleep.",
        "product_image" => "comforter_set.jpg",
        "color" => "Navy",
        "discount" => 5,
        "buy_price" => 100,
        "quantity_in_stock" => 4,
        "product_line_id" => 7
    ],
    [
        "product_code" => "P008",
        "product_name" => "Towels Set",
        "product_vendor" => "Charisma",
        "product_attributes" => [
            "count" => "6",
            "color" => "white"
        ],
        "product_description" => "A set of soft and absorbent white towels for your bathroom.",
        "product_image" => "towels_set.jpg",
        "color" => "White",
        "discount" => 0,
        "buy_price" => 50,
        "quantity_in_stock" => 6,
        "product_line_id" => 8
    ],
    [
        "product_code" => "P009",
        "product_name" => "Outdoor Dining Set",
        "product_vendor" => "Hampton Bay",
        "product_attributes" => [
            "seats" => "6",
            "material" => "wicker"
        ],
        "product_description" => "A stylish outdoor dining set with seating for six.",
        "product_image" => "outdoor_dining_set.jpg",
        "color" => "Brown",
        "discount" => 0,
        "buy_price" => 500,
        "quantity_in_stock" => 2,
        "product_line_id" => 9
    ],
    [
        "product_code" => "P010",
        "product_name" => "Power Drill",
        "product_vendor" => "DeWalt",
        "product_attributes" => [
            "power" => "18V",
            "cordless" => "true"
        ],
        "product_description" => "A powerful cordless drill for all your home improvement projects.",
        "product_image" => "power_drill.jpg",
        "color" => "Yellow",
        "discount" => 0,
        "buy_price" => 150,
        "quantity_in_stock" => 5,
        "product_line_id" => 10
    ],
    [
        "product_code" => "P011",
        "product_name" => "Television",
        "product_vendor" => "LG",
        "product_attributes" => [
            "size" => "55 inches",
            "resolution" => "4K"
        ],
        "product_description" => "A high-quality 55-inch television with 4K resolution for stunning picture quality.",
        "product_image" => "tv.jpg",
        "color" => "white",
        "discount" => 0,
        "buy_price" => 1000,
        "quantity_in_stock" => 2,
        "product_line_id" => 2
    ],
    [
        "product_code" => "P012",
        "product_name" => "Television",
        "product_vendor" => "Sony",
        "product_attributes" => [
            "size" => "44 inches",
            "resolution" => "4K"
        ],
        "product_description" => "A high-quality 44-inch television with 4K resolution for stunning picture quality.",
        "product_image" => "tv.jpg",
        "color" => "Gray",
        "discount" => 0,
        "buy_price" => 1000,
        "quantity_in_stock" => 2,
        "product_line_id" => 2
    ]

    ];

    
    $insertResult = $table->insertMany($documents);



    // *********************************************************************


    
$table = $db->orders;


$documents = [
[
    "order_number" => 1,
    "order_date" => "2023-03-15 10:30:00",
    "shipped_date" => "2023-03-17 08:45:00",
    "order_status" => 3,
    "shipping_cost" => 20,
    "phone" => "12345678901",
    "address" => [
        "state" => "California",
        "city" => "Los Angeles",
        "street" => "Main Street",
        "alley" => "Central Avenue",
        "postal_code" => "12345"
    ],
    "customer_name" => "AliceSmith",
    "shipper_id" => 1
],
[
    "order_number" => 2,
    "order_date" => "2023-03-16 11:45:00",
    "shipped_date" => "2023-03-18 09:30:00",
    "order_status" => 3,
    "shipping_cost" => 15,
    "phone" => "23456789012",
    "address" => [
        "state" => "New York",
        "city" => "New York City",
        "street" => "Broadway",
        "alley" => "Second Alley",
        "postal_code" => "665433"
    ],
    "customer_name" => "EmilyBrown",
    "shipper_id" => 5
],
[
    "order_number" => 3,
    "order_date" => "2024-01-17 12:30:00",
    "shipped_date" => "2024-01-19 10:15:00",
    "order_status" => 3,
    "shipping_cost" => 25,
    "phone" => "34567890123",
    "address" => [
        "state" => "Texas",
        "city" => "Houston",
        "street" => "Main St.",
        "alley" => "Third Alley",
        "postal_code" => "13214"
    ],
    "customer_name" => "OliviaLee",
    "shipper_id" => 7
],
[
    "order_number" => 4,
    "order_date" => "2024-02-18 13:15:00",
    "shipped_date" => "2024-02-20 11:00:00",
    "order_status" => 3,
    "shipping_cost" => 30,
    "phone" => "45678901234",
    "address" => [
        "state" => "Florida",
        "city" => "Miami",
        "street" => "Ocean Ave.",
        "alley" => "Fourth Alley",
        "postal_code" => "65487"
    ],
    "customer_name" => "DavidClark",
    "shipper_id" => 8
],
[
    "order_number" => 5,
    "order_date" => "2024-02-19 14:00:00",
    "shipped_date" => "2024-02-21 12:45:00",
    "order_status" => 3,
    "shipping_cost" => 18,
    "phone" => "56789012345",
    "address" => [
        "state" => "Illinois",
        "city" => "Chicago",
        "street" => "Lake St.",
        "alley" => "Fifth Alley",
        "postal_code" => "23578"
    ],
    "customer_name" => "DanielMiller",
    "shipper_id" => 3
],
[
    "order_number" => 6,
    "order_date" => "2024-02-20 15:30:00",
    "shipped_date" => "2024-02-22 13:30:00",
    "order_status" => 3,
    "shipping_cost" => 22,
    "phone" => "67890123456",
    "address" => [
        "state" => "Washington",
        "city" => "Seattle",
        "street" => "Pine St.",
        "alley" => "Sixth Alley",
        "postal_code" => "123458"
    ],
    "customer_name" => "AliceSmith",
    "shipper_id" => 2
],
[
    "order_number" => 7,
    "order_date" => "2024-03-21 16:45:00",
    "shipped_date" => "2024-03-22 13:30:00",
    "order_status" => 3,
    "shipping_cost" => 10,
    "phone" => "78901234567",
    "address" => [
        "state" => "Georgia",
        "city" => "Atlanta",
        "street" => "Peachtree St.",
        "alley" => "Seventh Alley",
        "postal_code" => "45687"
    ],
    "customer_name" => "SophiaTaylor",
    "shipper_id" => 4
],
[
    "order_number" => 8,
    "order_date" => "2024-04-28 23:15:00",
    "shipped_date" => "2024-05-22 13:30:00",
    "order_status" => 2,
    "shipping_cost" => 11,
    "phone" => "45678901234",
    "address" => [
        "state" => "Montana",
        "city" => "Helena",
        "street" => "Mountain View St.",
        "alley" => "Fourteenth Alley",
        "postal_code" => "456879"
    ],
    "customer_name" => "DavidClark",
    "shipper_id" => 5
],
[
    "order_number" => 9,
    "order_date" => "2024-04-29 10:30:00",
    "shipped_date" => "2024-05-22 13:30:00",
    "order_status" => 2,
    "shipping_cost" => 13,
    "phone" => "56789012345",
    "address" => [
        "state" => "Wyoming",
        "city" => "Cheyenne",
        "street" => "Prairie Street",
        "alley" => "Fifteenth Alley",
        "postal_code" => "45677"
    ],
    "customer_name" => "DanielMiller",
    "shipper_id" => 5
],
[
    "order_number" => 10,
    "order_date" => "2024-04-30 11:45:00",
    "shipped_date" => "2024-05-22 13:30:00",
    "order_status" => 2,
    "shipping_cost" => 16,
    "phone" => "67890123456",
    "address" => [
        "state" => "Utah",
        "city" => "Salt Lake City",
        "street" => "Temple St.",
        "alley" => "Sixteenth Alley",
        "postal_code" => "789456"
    ],
    "customer_name" => "MichaelDavis",
    "shipper_id" => 5
],
[
    "order_number" => 11,
    "order_date" => "2024-04-31 12:30:00",
    "shipped_date" => "2024-05-22 13:30:00",
    "order_status" => 2,
    "shipping_cost" => 14,
    "phone" => "78901234567",
    "address" => [
        "state" => "Idaho",
        "city" => "Boise",
        "street" => "River Street",
        "alley" => "Seventeenth Alley",
        "postal_code" => "4567897"
    ],
    "customer_name" => "OliviaLee",
    "shipper_id" => 3
],
[
    "order_number" => 12,
    "order_date" => "2024-05-28 13:15:00",
    "shipped_date" => "",
    "order_status" => 1,
    "shipping_cost" => 17,
    "phone" => "89012345678",
    "address" => [
        "state" => "New Mexico",
        "city" => "Santa Fe",
        "street" => "Desert Street",
        "alley" => "Eighteenth Alley",
        "postal_code" => "875646"
    ],
    "customer_name" => "EthanAnderson",
    "shipper_id" => 1
],
[
    "order_number" => 13,
    "order_date" => "2024-05-28 14:00:00",
    "shipped_date" => "",
    "order_status" => 1,
    "shipping_cost" => 19,
    "phone" => "90123456789",
    "address" => [
        "state" => "Kansas",
        "city" => "Topeka",
        "street" => "Meadow Street",
        "alley" => "Nineteenth Alley",
        "postal_code" => "90123"
    ],
    "customer_name" => "DanielMiller",
    "shipper_id" => 4
],
[
    "order_number" => 14,
    "order_date" => "2024-05-28 15:30:00",
    "shipped_date" => "",
    "order_status" => 0,
    "shipping_cost" => 21,
    "phone" => "01234567890",
    "address" => [
        "state" => "Nebraska",
        "city" => "Lincoln",
        "street" => "Field Street",
        "alley" => "Twentieth Alley",
        "postal_code" => "12354"
    ],
    "customer_name" => "SophiaTaylor",
    "shipper_id" => 7
]
];

$insertResult = $table->insertMany($documents);




    // *********************************************************************


    
    $table = $db->order_detail;


    $documents = [
    [
        "order_number" => 1,
        "product_code" => "P001",
        "quantity_ordered" => 3,
        "price_each" => 10,
        "discount" => 0,
        "color" => "Gray"
    ],
    [
        "order_number" => 5,
        "product_code" => "P002",
        "quantity_ordered" => 5,
        "price_each" => 25,
        "discount" => 0,
        "color" => "Navy"
    ],
    [
        "order_number" => 6,
        "product_code" => "P003",
        "quantity_ordered" => 4,
        "price_each" => 50,
        "discount" => 0,
        "color" => "Yellow"
    ],
    [
        "order_number" => 6,
        "product_code" => "P004",
        "quantity_ordered" => 3,
        "price_each" => 100,
        "discount" => 0,
        "color" => "Purple"
    ],
    [
        "order_number" => 6,
        "product_code" => "P005",
        "quantity_ordered" => 2,
        "price_each" => 150,
        "discount" => 0,
        "color" => "Black"
    ],
    [
        "order_number" => 8,
        "product_code" => "P006",
        "quantity_ordered" => 1,
        "price_each" => 200,
        "discount" => 0,
        "color" => "Gray"
    ],
    [
        "order_number" => 8,
        "product_code" => "P007",
        "quantity_ordered" => 1,
        "price_each" => 60,
        "discount" => 0,
        "color" => "Black"
    ],
    [
        "order_number" => 9,
        "product_code" => "P008",
        "quantity_ordered" => 1,
        "price_each" => 250,
        "discount" => 0,
        "color" => "Silver"
    ],
    [
        "order_number" => 14,
        "product_code" => "P011",
        "quantity_ordered" => 1,
        "price_each" => 1000,
        "discount" => 10,
        "color" => "White"
    ],
    [
        "order_number" => 14,
        "product_code" => "P012",
        "quantity_ordered" => 4,
        "price_each" => 1200,
        "discount" => 5,
        "color" => "black"
    ]
    
    ];
    
    $insertResult = $table->insertMany($documents);
    



    // *********************************************************************


    
    $table = $db->shippers;


    $documents = [
    [
        "shipper_id" => 1,
        "company" => "Shipper A",
        "first_name" => "John",
        "last_name" => "Doe",
        "email_address" => "john.doe@example.com",
        "job_title" => "Logistics Manager",
        "business_phone" => "12345678900",
        "address" => [
            "state" => "California",
            "city" => "Los Angeles",
            "street" => "Main Street",
            "alley" => "Central Avenue",
            "postal_code" => "12345"
        ]
    ],
    [
        "shipper_id" => 2,
        "company" => "Shipper B",
        "first_name" => "Jane",
        "last_name" => "Smith",
        "email_address" => "jane.doe@example.com",
        "job_title" => "Shipping Coordinator",
        "business_phone" => "0987654321",
        "address" => [
            "state" => "Nebraska",
            "city" => "Lincoln",
            "street" => "Field Street",
            "alley" => "Twentieth Alley",
            "postal_code" => "12354"
        ]
    ],
    [
        "shipper_id" => 3,
        "company" => "Shipper C",
        "first_name" => "Michael",
        "last_name" => "Johnson",
        "email_address" => "michael.doe@example.com",
        "job_title" => "Transportation Specialist",
        "business_phone" => "5484896498",
        "address" => [
            "state" => "Kansas",
            "city" => "Topeka",
            "street" => "Meadow Street",
            "alley" => "Nineteenth Alley",
            "postal_code" => "90123"
        ]
    ],
    [
        "shipper_id" => 4,
        "company" => "Shipper D",
        "first_name" => "Emily",
        "last_name" => "Brown",
        "email_address" => "emily.doe@example.com",
        "job_title" => "Delivery Supervisor",
        "business_phone" => "12345678900",
        "address" => [
            "state" => "California",
            "city" => "Los Angeles",
            "street" => "Main Street",
            "alley" => "Central Avenue",
            "postal_code" => "12345"
        ]
    ],
    [
        "shipper_id" => 5,
        "company" => "Shipper E",
        "first_name" => "David",
        "last_name" => "Martinez",
        "email_address" => "david.doe@example.com",
        "job_title" => "Fleet Manager",
        "business_phone" => "12345678900",
        "address" => [
            "state" => "Idaho",
            "city" => "Boise",
            "street" => "River Street",
            "alley" => "Seventeenth Alley",
            "postal_code" => "4567897"
        ]
    ],
    [
        "shipper_id" => 6,
        "company" => "Shipper F",
        "first_name" => "Sarah",
        "last_name" => "Garcia",
        "email_address" => "sarah.doe@example.com",
        "job_title" => "Supply Chain Analyst",
        "business_phone" => "12345678900",
        "address" => [
            "state" => "Utah",
            "city" => "Salt Lake City",
            "street" => "Temple St.",
            "alley" => "Sixteenth Alley",
            "postal_code" => "789456"
        ]
    ],
    [
        "shipper_id" => 7,
        "company" => "Shipper G",
        "first_name" => "Robert",
        "last_name" => "Rodriguez",
        "email_address" => "robert.doe@example.com",
        "job_title" => "Warehouse Coordinator",
        "business_phone" => "12345678900",
        "address" => [
            "state" => "Wyoming",
            "city" => "Cheyenne",
            "street" => "Prairie Street",
            "alley" => "Fifteenth Alley",
            "postal_code" => "45677"
        ]
    ],
    [
        "shipper_id" => 8,
        "company" => "Shipper H",
        "first_name" => "Amanda",
        "last_name" => "Lopez",
        "email_address" => "amanda.doe@example.com",
        "job_title" => "Inventory Manager",
        "business_phone" => "12345678900",
        "address" => [
            "state" => "Montana",
            "city" => "Helena",
            "street" => "Mountain View St.",
            "alley" => "Fourteenth Alley",
            "postal_code" => "456879"
        ]
    ],
    [
        "shipper_id" => 9,
        "company" => "Shipper I",
        "first_name" => "Daniel",
        "last_name" => "Perez",
        "email_address" => "daniel.doe@example.com",
        "job_title" => "Operations Director",
        "business_phone" => "12345678900",
        "address" => [
            "state" => "Georgia",
            "city" => "Atlanta",
            "street" => "Peachtree St.",
            "alley" => "Seventh Alley",
            "postal_code" => "45687"
        ]
    ],
    [
        "shipper_id" => 10,
        "company" => "Shipper J",
        "first_name" => "Jessica",
        "last_name" => "Torres",
        "email_address" => "jessica.torres@example.com",
        "job_title" => "Customer Service Representative",
        "business_phone" => "12345678900",
        "address" => [
            "state" => "Washington",
            "city" => "Seattle",
            "street" => "Pine St.",
            "alley" => "Sixth Alley",
            "postal_code" => "123458"
        ]
    ]
    
    ];
    
    $insertResult = $table->insertMany($documents);
    


    // *********************************************************************


    
    $table = $db->comments;


    $documents = [
    [
        "comment_id" => 1,
        "comment_text" => "Great product, very satisfied with my purchase.",
        "comment_date" => "2022-01-15 10:30:00",
        "product_code" => "P001",
        "customer_name" => "EthanAnderson",
        "reply_comment" => 0
    ],
    [
        "comment_id" => 2,
        "comment_text" => "The delivery was quick and the product quality is excellent.",
        "comment_date" => "2022-01-16 11:45:00",
        "product_code" => "P001",
        "customer_name" => "SophiaTaylor",
        "reply_comment" => 1
    ],
    [
        "comment_id" => 3,
        "comment_text" => "I had an issue with the product but the customer service team resolved it promptly.",
        "comment_date" => "2022-01-17 14:20:00",
        "product_code" => "P003",
        "customer_name" => "DanielMiller",
        "reply_comment" => 0
    ],
    [
        "comment_id" => 4,
        "comment_text" => "Impressed with the durability of the product, worth the price.",
        "comment_date" => "2022-01-24 14:50:00",
        "product_code" => "P001",
        "customer_name" => "DanielMiller",
        "reply_comment" => 1
    ],
    [
        "comment_id" => 5,
        "comment_text" => "Good experience overall, would recommend this store to others.",
        "comment_date" => "2022-01-25 09:30:00",
        "product_code" => "P001",
        "customer_name" => "OliviaLee",
        "reply_comment" => 4
    ],
    [
        "comment_id" => 6,
        "comment_text" => "Excellent customer service, they went above and beyond to help me.",
        "comment_date" => "2022-01-27 12:45:00",
        "product_code" => "P003",
        "customer_name" => "BobJohnson",
        "reply_comment" => 3
    ],
    [
        "comment_id" => 7,
        "comment_text" => "Had an issue with the order but it was quickly resolved by the support team.",
        "comment_date" => "2022-01-29 10:05:00",
        "product_code" => "P009",
        "customer_name" => "MichaelDavis",
        "reply_comment" => 0
    ],
    [
        "comment_id" => 8,
        "comment_text" => "Fast shipping and good communication throughout the process.",
        "comment_date" => "2022-01-31 09:20:00",
        "product_code" => "P004",
        "customer_name" => "AliceSmith",
        "reply_comment" => 0
    ],
    [
        "comment_id" => 9,
        "comment_text" => "The product exceeded my expectations, very happy with my purchase.",
        "comment_date" => "2022-02-01 15:15:00",
        "product_code" => "P006",
        "customer_name" => "SarahWilson",
        "reply_comment" => 0
    ],
    [
        "comment_id" => 10,
        "comment_text" => "Impressed with the durability of the product, worth the price.",
        "comment_date" => "2022-02-02 12:30:00",
        "product_code" => "P007",
        "customer_name" => "EmilyBrown",
        "reply_comment" => 0
    ]
    
    
    ];
    
    $insertResult = $table->insertMany($documents);
    



    // *********************************************************************


    
    $table = $db->like_comment;


    $documents = [
    [
        "comment_id" => 1,
        "customer_name" => "AliceSmith" 
    ],
    [
        "comment_id" => 2,
        "customer_name" => "BobJohnson" 
    ],
    [
        "comment_id" => 4,
        "customer_name" => "DavidClark"
    ],
    [
        "comment_id" => 6,
        "customer_name" => "EthanAnderson" 
    ],
    [
        "comment_id" => 7,
        "customer_name" => "SophiaTaylor" 
    ],
    [
        "comment_id" => 8,
        "customer_name" => "DanielMiller" 
    ],
    [
        "comment_id" => 7,
        "customer_name" => "OliviaLee" 
    ],
    [
        "comment_id" => 2,
        "customer_name" => "EthanAnderson" 
    ],
    [
        "comment_id" => 3,
        "customer_name" => "MichaelDavis" 
    ],
    [
        "comment_id" => 2,
        "customer_name" => "EmilyBrown"
    ]
    
    
    ];
    
    $insertResult = $table->insertMany($documents);
    



    // *********************************************************************


    
     $table = $db->product_bookmark;


     $documents = [
     [
         "product_code" => "P012",
         "customer_name" => "AliceSmith" 
     ],
     [
         "product_code" => "P003",
         "customer_name" => "BobJohnson" 
     ],
     [
         "product_code" => "P009",
         "customer_name" => "DavidClark"
     ],
     [
         "product_code" => "P008",
         "customer_name" => "EthanAnderson" 
     ],
     [
         "product_code" => "P002",
         "customer_name" => "SophiaTaylor" 
     ],
     [
         "product_code" => "P001",
         "customer_name" => "DanielMiller" 
     ],
     [
         "product_code" => "P002",
         "customer_name" => "OliviaLee" 
     ],
     [
         "product_code" => "P003",
         "customer_name" => "EthanAnderson" 
     ],
     [
         "product_code" => "P004",
         "customer_name" => "MichaelDavis" 
     ],
     [
         "product_code" => "P002",
         "customer_name" => "EmilyBrown"
     ]
     
     
     ];
     
     $insertResult = $table->insertMany($documents);
     
 


    // *********************************************************************


    
    $table = $db->product_like;


    $documents = [
    [
        "product_code" => "P012",
        "customer_name" => "AliceSmith" 
    ],
    [
        "product_code" => "P003",
        "customer_name" => "BobJohnson" 
    ],
    [
        "product_code" => "P009",
        "customer_name" => "DavidClark"
    ],
    [
        "product_code" => "P008",
        "customer_name" => "EthanAnderson" 
    ],
    [
        "product_code" => "P002",
        "customer_name" => "SophiaTaylor" 
    ],
    [
        "product_code" => "P001",
        "customer_name" => "DanielMiller" 
    ],
    [
        "product_code" => "P002",
        "customer_name" => "OliviaLee" 
    ],
    [
        "product_code" => "P003",
        "customer_name" => "EthanAnderson" 
    ],
    [
        "product_code" => "P004",
        "customer_name" => "MichaelDavis" 
    ],
    [
        "product_code" => "P002",
        "customer_name" => "EmilyBrown"
    ]
    
    
    ];
    
    $insertResult = $table->insertMany($documents);
    



    // *********************************************************************


    
    $table = $db->product_vote;


    $documents = [
    [
        "product_code" => "P012",
        "customer_name" => "AliceSmith",
        "vote_quantity" => 5
    ],
    [
        "product_code" => "P003",
        "customer_name" => "BobJohnson",
        "vote_quantity" => 2
    ],
    [
        "product_code" => "P009",
        "customer_name" => "DavidClark",
        "vote_quantity" => 1
    ],
    [
        "product_code" => "P008",
        "customer_name" => "EthanAnderson",
        "vote_quantity" => 4
    ],
    [
        "product_code" => "P002",
        "customer_name" => "SophiaTaylor",
        "vote_quantity" => 2 
    ],
    [
        "product_code" => "P001",
        "customer_name" => "DanielMiller",
        "vote_quantity" => 3 
    ],
    [
        "product_code" => "P002",
        "customer_name" => "OliviaLee",
        "vote_quantity" => 1 
    ],
    [
        "product_code" => "P003",
        "customer_name" => "EthanAnderson",
        "vote_quantity" => 2 
    ],
    [
        "product_code" => "P004",
        "customer_name" => "MichaelDavis",
        "vote_quantity" => 4 
    ],
    [
        "product_code" => "P002",
        "customer_name" => "EmilyBrown",
        "vote_quantity" => 3
    ]
    
    
    ];
    
    $insertResult = $table->insertMany($documents);
    



    // *********************************************************************


    
    $table = $db->basket;


    $documents = [
    [
        "product_code" => "P012",
        "customer_name" => "AliceSmith",
        "quantity" => 1
    ],
    [
        "product_code" => "P003",
        "customer_name" => "BobJohnson",
        "vote_quantity" => 2
    ],
    [
        "product_code" => "P009",
        "customer_name" => "DavidClark",
        "vote_quantity" => 1
    ],
    [
        "product_code" => "P008",
        "customer_name" => "EthanAnderson",
        "vote_quantity" => 1
    ],
    [
        "product_code" => "P002",
        "customer_name" => "SophiaTaylor",
        "vote_quantity" => 2 
    ],
    [
        "product_code" => "P001",
        "customer_name" => "DanielMiller",
        "vote_quantity" => 2 
    ],
    [
        "product_code" => "P002",
        "customer_name" => "OliviaLee",
        "vote_quantity" => 1 
    ],
    [
        "product_code" => "P003",
        "customer_name" => "EthanAnderson",
        "vote_quantity" => 2 
    ],
    [
        "product_code" => "P004",
        "customer_name" => "MichaelDavis",
        "vote_quantity" => 1
    ],
    [
        "product_code" => "P002",
        "customer_name" => "EmilyBrown",
        "vote_quantity" => 2
    ]
    
    
    ];
    
    $insertResult = $table->insertMany($documents);
    



    echo "Document inserted successfully!";

    
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}



?>