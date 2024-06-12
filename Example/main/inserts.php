<?php

// import database information
include '../env.php';

// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// customers
$tableName = 'customers';

// execute query
$sql = "INSERT INTO {$tableName} (
    customer_name,
    customer_password,
    first_name,
    last_name,
    customer_image ,
    phone,
    email,
    status,
    address_line_state,
    address_line_city,
    address_line_street,
    address_line_alley,
    address_line_postal_code,
    home_address_state,
    home_address_city,
    home_address_street,
    home_address_alley,
    home_address_postal_code
    )
    VALUES
('JohnDoe', 'pass1234', 'John', 'Doe', 'profile.jpg', '1234567890', 'johndoe@example.com', 'admin', 'California', 'Los Angeles', 'Main Street', 'Central Avenue', '12345', 'California', 'San Francisco', 'Oak Street', 'Pine Avenue', '54321'),
('JaneDoe', 'pass5678', 'Jane', 'Doe', 'profile.jpg', '0987654321', 'janedoe@example.com', 'admin', 'California', 'Los Angeles', 'Main Street', 'Central Avenue', '12345', 'California', 'San Francisco', 'Oak Street', 'Pine Avenue', '54321'),
('AliceSmith', 'pass9876', 'Alice', 'Smith', 'profile.jpg', '1112223333', 'alice@example.com', 'user', 'New York', 'New York City', 'Broadway', 'First Avenue', '56789', 'New York', 'Buffalo', 'Elm Street', 'Maple Avenue', '98765'),
('BobJohnson', 'pass5432', 'Bob', 'Johnson', 'profile.jpg', '4445556666', 'bob@example.com', 'user', 'Texas', 'Houston', 'Main Street', 'Second Avenue', '24680', 'Texas', 'Austin', 'Cedar Street', 'Pine Avenue', '13579'),
('EmilyBrown', 'pass1357', 'Emily', 'Brown', 'profile.jpg', '7778889999', 'emily@example.com', 'user', 'Florida', 'Miami', 'Ocean Drive', 'Sunset Boulevard', '54321', 'Florida', 'Orlando', 'Palm Street', 'Grove Avenue', '02468'),
('MichaelDavis', 'pass2468', 'Michael', 'Davis', 'profile.jpg', '2223334444', 'michael@example.com', 'user', 'California', 'Los Angeles', 'Hollywood Boulevard', 'Vine Street', '98765', 'California', 'San Francisco', 'Market Street', 'Mission Avenue', '12345'),
('SarahWilson', 'pass7890', 'Sarah', 'Wilson', 'profile.jpg', '5556667777', 'sarah@example.com', 'user', 'California', 'San Francisco', 'Golden Gate Avenue', 'Ocean Avenue', '54321', 'California', 'Los Angeles', 'Sunset Boulevard', 'Hollywood Boulevard', '98765'),
('DavidClark', 'pass3210', 'David', 'Clark', 'profile.jpg', '8889990000', 'david@example.com', 'user', 'Texas', 'Dallas', 'Main Street', 'First Avenue', '13579', 'Texas', 'Houston', 'River Street', 'Lake Avenue', '24680'),
('OliviaLee', 'pass6543', 'Olivia', 'Lee', 'profile.jpg', '3334445555', 'olivia@example.com', 'user', 'New York', 'Albany', 'State Street', 'Washington Avenue', '02468', 'New York', 'New York City', 'Park Avenue', 'Lexington Avenue', '56789'),
('DanielMiller', 'pass0123', 'Daniel', 'Miller', 'profile.jpg', '6667778888', 'daniel@example.com', 'user', 'California', 'San Diego', 'Beach Boulevard', 'Palm Street', '98765', 'California', 'Los Angeles', 'Rodeo Drive', 'Beverly Boulevard', '12345'),
('SophiaTaylor', 'pass7890', 'Sophia', 'Taylor', 'profile.jpg', '4445556666', 'sophia@example.com', 'user', 'Florida', 'Jacksonville', 'Main Street', 'Second Avenue', '13579', 'Florida', 'Miami', 'Collins Avenue', 'Ocean Drive', '24680'),
('EthanAnderson', 'pass2345', 'Ethan', 'Anderson','profile.jpg', '7778889999', 'ethan@example.com', 'user', 'Florida', 'Miami', 'Ocean Drive', 'Sunset Boulevard', '54321', 'Florida', 'Orlando', 'Palm Street', 'Grove Avenue', '45687')
";

$result = $conn->query($sql);

if ($result) {
    echo "New records created successfully created in <b>{$tableName}</b> table";
} else {
    echo "Error creating database: " . $conn->error;
}
echo "<br>";

// *********************************************************************


// product_lines
$tableName = 'product_lines';

// execute query
$sql = "INSERT INTO {$tableName} (
    product_line_id,
    product_line_name,
    product_line_image,
    product_line_description
    )
    VALUES 
(1 ,'Kitchen Appliances', 'kitchen_appliances.jpg', 'A wide range of kitchen appliances including blenders, mixers, toasters, and more.'),
(2 ,'Home Electronics', 'home_electronics.jpg', 'High-quality home electronics such as televisions, sound systems, and home theater setups.'),
(3 ,'Cleaning Supplies', 'cleaning_supplies.jpg', 'Cleaning supplies for every need, including vacuum cleaners, mops, and cleaning solutions.'),
(4 ,'Cookware', 'cookware.jpg', 'A variety of cookware options including pots, pans, and bakeware.'),
(5 ,'Home Decor', 'home_decor.jpg', 'Stylish and trendy home decor items to enhance the look of your living space.'),
(6 ,'Furniture', 'furniture.jpg', 'Comfortable and durable furniture pieces for every room in your home.'),
(7 ,'Bedding', 'bedding.jpg', 'Luxurious and comfortable bedding sets for a good nightś sleep.'),
(8 ,'Bath Accessories', 'bath_accessories.jpg', 'High-quality bath accessories including towels, shower curtains, and bath mats.'),
(9 ,'Outdoor Living', 'outdoor_living.jpg', 'Outdoor furniture, grills, and accessories to create the perfect outdoor living space.'),
(10 ,'Home Improvement', 'home_improvement.jpg', 'Tools and equipment for all your home improvement projects.'),
(11 ,'Smart Home Devices', 'smart_home_devices.jpg', 'Smart home devices to make your home more convenient and efficient.'),
(12 ,'Appliance Parts & Accessories', 'appliance_parts_accessories.jpg', 'Replacement parts and accessories for your appliances.'),
(13 ,'Small Appliances', 'small_appliances.jpg', 'Small kitchen appliances such as coffee makers, microwaves, and toaster ovens.'),
(14 ,'Laundry & Garment Care', 'laundry_garment_care.jpg', 'Laundry and garment care products including washing machines, dryers, and irons.'),
(15 ,'Heating, Cooling & Air Quality', 'heating_cooling_air_quality.jpg', 'Heating and cooling systems and air quality products for a comfortable home environment.'),
(16 ,'Home Security & Surveillance', 'home_security_surveillance.jpg', 'Security systems and surveillance cameras to protect your home.'),
(17 ,'Pet Supplies', 'pet_supplies.jpg', 'Supplies for your furry friends including pet food, toys, and grooming products.'),
(18 ,'Baby & Kids', 'baby_kids.jpg', 'Products for babies and kids including cribs, strollers, and toys.'),
(19 ,'Health & Personal Care', 'health_personal_care.jpg', 'Health and personal care products including skincare, haircare, and wellness items.'),
(20 ,'Sports & Fitness', 'sports_fitness.jpg', 'Sports equipment and fitness accessories for an active lifestyle.');
";

$result = $conn->query($sql);

if ($result) {
    echo "New records created successfully created in <b>{$tableName}</b> table";
} else {
    echo "Error creating database: " . $conn->error;
}
echo "<br>";


// *********************************************************************

// products
$tableName = 'products';

// execute query
$sql = $conn -> prepare("INSERT INTO {$tableName} (
    product_code,
    product_name,
    product_vendor,
    product_attributes,
    product_description,
    product_image,
    color,
    discount,
    buy_price,
    quantity_in_stock,
    product_line_id
    )
    VALUES 
('P001', 'Blender', 'KitchenAid', '{\"power\": \"800W\", \"capacity\": \"1.5L\"}', 'A powerful blender for all your blending needs.', 'blender.jpg', 'Silver', 0, 100, 10, 1),
('P002', 'Toaster', 'Cuisinart', '{\"slices\": \"4\", \"settings\": \"7\"}', 'A 4-slice toaster with multiple settings for perfect toast every time.', 'toaster.jpg', 'Black', 0, 50, 5, 1),
('P003', 'Television', 'Samsung', '{\"size\": \"55 inches\", \"resolution\": \"4K\"}', 'A high-quality 55-inch television with 4K resolution for stunning picture quality.', 'tv.jpg', 'Black', 0, 1000, 2, 2),
('P004', 'Vacuum Cleaner', 'Dyson', '{\"power\": \"1200W\", \"cordless\": true}', 'A powerful cordless vacuum cleaner for easy cleaning.', 'vacuum_cleaner.jpg', 'Gray', 0, 300, 8, 3),
('P005', 'Cookware Set', 'Calphalon', '{\"pieces\": \"10\", \"material\": \"stainless steel\"}', 'A set of high-quality stainless steel cookware for all your cooking needs.', 'cookware_set.jpg', 'Silver', 0, 200, 3, 4),
('P006', 'Accent Chair', 'Ashley Furniture', '{\"color\": \"gray\", \"material\": \"fabric\"}', 'A stylish gray accent chair to enhance the look of your living room.', 'accent_chair.jpg', 'Gray', 0, 150, 1, 6),
('P007', 'Comforter Set', 'Nautica', '{\"size\": \"queen\", \"color\": \"navy\"}', 'A luxurious navy comforter set for a cozy nightś sleep.', 'comforter_set.jpg', 'Navy', 5, 100, 4, 7),
('P008', 'Towels Set', 'Charisma', '{\"count\": \"6\", \"color\": \"white\"}', 'A set of soft and absorbent white towels for your bathroom.', 'towels_set.jpg', 'White', 0, 50, 6, 8),
('P009', 'Outdoor Dining Set', 'Hampton Bay', '{\"seats\": \"6\", \"material\": \"wicker\"}', 'A stylish outdoor dining set with seating for six.', 'outdoor_dining_set.jpg', 'Brown', 0, 500, 2, 9),
('P010', 'Power Drill', 'DeWalt', '{\"power\": \"18V\", \"cordless\": true}', 'A powerful cordless drill for all your home improvement projects.', 'power_drill.jpg', 'Yellow', 0, 150, 5, 10),
('P011', 'Smart Thermostat', 'Nest', '{\"compatible_with\": \"Amazon Alexa, Google Assistant\", \"sensors\": \"motion, temperature\"}', 'A smart thermostat that learns your schedule and helps save energy.', 'smart_thermostat.jpg', 'White', 0, 200, 3, 11),
('P012', 'Coffee Maker', 'Keurig', '{\"capacity\": \"12 cups\", \"color\": \"black\"}', 'A programmable coffee maker with a large capacity for all your coffee needs.', 'coffee_maker.jpg', 'Black', 0, 80, 7, 13),
('P013', 'Washing Machine', 'LG', '{\"capacity\": \"4.5 cu. ft.\"}', 'A high-capacity washing machine with multiple wash cycles.', 'washing_machine.jpg', 'White', 10, 600, 2, 14),
('P015', 'Security Camera System', 'Arlo', '{\"number_of_cameras\": \"4\", \"resolution\": \"1080p\"}', 'A wireless security camera system with four cameras and HD resolution.', 'security_camera_system.jpg', 'White', 0, 400, 3, 16),
('P016', 'Television', 'LG', '{\"size\": \"55 inches\", \"resolution\": \"4K\"}', 'A high-quality 55-inch television with 4K resolution for stunning picture quality.', 'tv.jpg', 'white', 0, 1000, 2, 2),
('P017', 'Baby Crib', 'Graco', '{\"color\": \"white\", \"material\": \"wood\"}', 'A sturdy and safe white crib for your babyś nursery.', 'baby_crib.jpg','White' ,0 ,200 ,5 ,18),
('P018','Television', 'Sony', '{\"size\": \"44 inches\", \"resolution\": \"4K\"}', 'A high-quality 44-inch television with 4K resolution for stunning picture quality.', 'tv.jpg', 'Gray', 0, 1000, 2, 2),
('P019','Yoga Mat','Gaiam','{\"thickness\":\"6mm\",\"color\":\"purple\"}','A thick and comfortable yoga mat in a beautiful purple color.','yoga_mat.jpg','Purple' ,12 ,20 ,30 ,20),
('P020','Dumbbell Set','Bowflex','{\"weight\":\"20 lbs\",\"number_of_dumbbells\":\"2\"}','A set of adjustable dumbbells with a maximum weight of 20 lbs.','dumbbell_set.jpg','Black' ,0 ,100 ,10 ,21),
('P021', 'Laptop', 'Apple', '{\"screen_size\": \"13 inches\", \"processor\": \"M1 chip\"}', 'A powerful and sleek laptop with an M1 chip for fast performance.', 'laptop.jpg', 'Silver', 0, 1200, 5, 22),
('P022', 'Refrigerator', 'Whirlpool', '{\"capacity\": \"20 cu. ft.\", \"color\": \"stainless steel\"}', 'A spacious stainless steel refrigerator with ample storage space.', 'refrigerator.jpg', 'Stainless Steel', 0, 800, 3, 23),
('P023', 'Microwave Oven', 'Panasonic', '{\"power\": \"1200W\", \"capacity\": \"1.6 cu. ft.\"}', 'A powerful and spacious microwave oven for all your cooking needs.', 'microwave_oven.jpg', 'Black', 0, 150, 7, 24),
('P024', 'Air Fryer', 'Ninja', '{\"capacity\": \"4 quarts\", \"color\": \"gray\"}', 'A versatile and efficient air fryer for healthy and delicious cooking.', 'air_fryer.jpg', 'Gray', 0, 100, 8, 25),
('P025', 'Electric Kettle', 'Breville', '{\"capacity\": \"1.7 liters\", \"color\": \"stainless steel\"}', 'A stylish and efficient electric kettle for boiling water quickly.', 'electric_kettle.jpg', 'Stainless Steel', 0, 80, 10, 26),
('P026', 'Desk Lamp', 'IKEA', '{\"color\": \"black\", \"adjustable\": true}', 'A modern and adjustable desk lamp for your workspace.', 'desk_lamp.jpg', 'Black', 15, 30, 12, 27),
('P027', 'Smart Speaker', 'Amazon', '{\"voice_assistant\": \"Alexa\", \"color\": \"charcoal\"}', 'A smart speaker with Alexa voice assistant for music and more.', 'smart_speaker.jpg', 'Charcoal', 0, 50, 15, 28),
('P028', 'Bluetooth Headphones', 'Sony', '{\"wireless\": true, \"color\": \"black\"}', 'High-quality wireless headphones for a superior listening experience.', 'headphones.jpg', 'Black', 0, 150, 6, 29),
('P029', 'Digital Camera', 'Canon', '{\"megapixels\": \"24.1\", \"color\": \"black\"}', 'A professional-grade digital camera for stunning photography.', 'digital_camera.jpg', 'Black', 0, 1000, 2, 30),
('P030', 'Gaming Console', 'Sony PlayStation', '{\"storage_capacity\": \"1TB\", \"color\": \"white\"}', 'A powerful gaming console with ample storage capacity for all your games.', 'gaming_console.jpg', 'White', 0, 300, 4, 31),
('P031', 'Sneakers', 'Nike', '{\"size\": \"10\", \"color\": \"black\"}', 'Stylish and comfortable black sneakers for everyday wear.', 'sneakers.jpg','Black' , 5 ,100 ,20 ,32),
('P032','Backpack','The North Face','{\"capacity\":\"30L\"}','A durable and spacious gray backpack for all your adventures.','backpack.jpg','Gray' ,0 ,80 ,15 ,33),
('P033','Smartwatch','Apple','{\"display\":\"OLED\",\"color\":\"space gray\"}','An advanced smartwatch with an OLED display in a sleek space gray color.','smartwatch.jpg','Space Gray' ,10 ,400 ,8 ,34),
('P034','Wireless Mouse','Logitech','{\"connectivity\":\"Bluetooth\"}','A reliable and stylish white wireless mouse for smooth navigation.','wireless_mouse.jpg','White' ,0 ,50 ,12 ,35),
('P035','External Hard Drive','Seagate','{\"capacity\":\"2TB\"}','A high-capacity external hard drive in a sleek silver color.','external_hard_drive.jpg','Silver' ,0 ,120 ,10 ,36),
('P036','Portable Charger','Anker','{\"capacity\":\"10000mAh\"}','A compact and powerful black portable charger for your devices.','portable_charger.jpg','Black' ,5 ,40 ,25 ,37),
('P037','Water Bottle','Hydro Flask','{\"capacity\":\"32 oz\"}','A durable and insulated blue water bottle to keep you hydrated on the go.','water_bottle.jpg','Blue' ,0 ,20 ,30 ,38),
('P038','Sunglasses','Ray-Ban','{\"frame_color\":\"black\",\"lens_color\":\"green\"}','Classic black sunglasses with green lenses for timeless style.','sunglasses.jpg','Black' ,0 ,100 ,18 ,39),
('P039','Fitness Tracker','Fitbit','{\"activity_tracking\":\"steps, heart rate\"}','A versatile fitness tracker in a vibrant purple color to monitor your workouts.','fitness_tracker.jpg','Purple' ,0 ,60 ,22 ,40),
('P040','Electric Toothbrush','Philips Sonicare','{\"brushing_modes\":\"3\"}','An advanced electric toothbrush with multiple brushing modes for optimal oral care.','electric_toothbrush.jpg','White' ,0 ,70 ,20 ,41)
");

$result = $sql->execute();

if ($result) {
    echo "New records created successfully created in <b>{$tableName}</b> table";
} else {
    echo "Error creating database: " . $conn->error;
}
echo "<br>";


// *********************************************************************

// order
$tableName = 'orders';

// execute query
$sql = "INSERT INTO {$tableName} (
    order_number,
    order_date,
    shipped_date,
    order_status,
    shipping_cost,
    phone,
    address_line_state, 
    address_line_city,
    address_line_street,
    address_line_alley,
    address_line_postal_code,
    customer_name,
    shipper_id
    )
    VALUES 
(1 ,'2023-03-15 10:30:00', '2023-03-17 08:45:00', 3, 20, '12345678901', 'California', 'Los Angeles', 'Main St.', 'First Alley', '12345', 'AliceSmith',1 ),
(2 ,'2023-03-16 11:45:00', '2023-03-18 09:30:00', 3, 15, '23456789012', 'New York', 'New York City', 'Broadway', 'Second Alley', '23456', 'EmilyBrown',5),
(3 ,'2024-01-17 12:30:00', '2024-01-19 10:15:00', 3, 25, '34567890123', 'Texas', 'Houston', 'Main St.', 'Third Alley', '34567', 'OliviaLee',7),
(4 ,'2024-02-18 13:15:00', '2024-02-20 11:00:00', 3, 30, '45678901234', 'Florida', 'Miami', 'Ocean Ave.', 'Fourth Alley', '45678', 'DavidClark',8),
(5 ,'2024-02-19 14:00:00', '2024-02-21 12:45:00', 3, 18, '56789012345', 'Illinois', 'Chicago', 'Lake St.', 'Fifth Alley', '56789', 'DanielMiller',3),
(6 ,'2024-02-20 15:30:00', '2024-02-22 13:30:00', 3, 22, '67890123456', 'Washington', 'Seattle', 'Pine St.', 'Sixth Alley', '67890', 'AliceSmith',2),
(7 ,'2024-03-21 16:45:00', '2024-03-22 13:30:00', 3, 10, '78901234567', 'Georgia', 'Atlanta', 'Peachtree St.', 'Seventh Alley', '78901', 'SophiaTaylor',4),
(8 ,'2024-03-22 17:30:00', '2024-03-23 13:30:00', 3, 12, '89012345678', 'Arizona', 'Phoenix', 'Sunset Blvd.', 'Eighth Alley', '89012', 'OliviaLee',5),
(9 ,'2024-03-23 18:15:00', '2024-03-24 13:30:00', 3, 8, '90123456789', 'Nevada', 'Las Vegas', 'Strip Ave.', 'Ninth Alley', '90123', 'DavidClark',1),
(10 ,'2024-03-24 19:00:00', '2024-03-24 13:30:00', 3, 6, '01234567890', 'Oregon', 'Portland', 'Forest St.', 'Tenth Alley', '01234', 'MichaelDavis',2),
(11 ,'2024-03-25 20:30:00', '2024-03-26 13:30:00', 3, 5, '12345678901', 'Colorado','Denver','Mountain St.','Eleventh Alley','12345', 'DavidClark',8),
(12 ,'2024-03-26 21:45:00', '2024-03-27 13:30:00' , 3, 7,'23456789012' ,'Hawaii' ,'Honolulu' ,'Beach Ave.' ,'Twelfth Alley' ,'23456' , 'AliceSmith',9),
(13 ,'2024-03-27 22:30:00', '2024-03-28 13:30:00' , 3, 9,'34567890123' ,'Alaska' ,'Anchorage' ,'Glacier St.' ,'Thirteenth Alley' ,'34567' ,'OliviaLee',4),
(14 ,'2024-04-28 23:15:00','2024-05-22 13:30:00' ,2 ,11 ,'45678901234' ,'Montana' ,'Helena' ,'Mountain View St.' ,'Fourteenth Alley' ,'45678' ,'DavidClark',5),
(15 ,'2024-04-29 10:30:00','2024-05-22 13:30:00' ,2 ,13 ,'56789012345' ,'Wyoming' ,'Cheyenne' ,'Prairie St.' ,'Fifteenth Alley' ,'56789' ,'DanielMiller',5),
(16 ,'2024-04-30 11:45:00','2024-05-22 13:30:00' ,2 ,16 ,'67890123456' ,'Utah' ,'Salt Lake City' ,'Temple St.' ,'Sixteenth Alley' ,'67890' , 'MichaelDavis',5),
(17 ,'2024-04-30 12:30:00','2024-05-22 13:30:00' ,2 ,14 ,'78901234567' ,'Idaho' ,'Boise' ,'River St.' ,'Seventeenth Alley' ,'78901' , 'OliviaLee',3),
(18 ,'2024-05-28 13:15:00', NULL ,1 ,17 ,'89012345678' ,'New Mexico' ,'Santa Fe' ,'Desert St.' ,'Eighteenth Alley' ,'89012' , 'EthanAnderson',1),
(19 ,'2024-05-28 14:00:00', NULL ,1 ,19 ,'90123456789' ,'Kansas' ,'Topeka' ,'Meadow St.' ,'Nineteenth Alley' ,'90123' , 'DanielMiller',4),
(20 ,'2024-05-28 15:30:00', NULL ,0 ,21,'01234567890','Nebraska','Lincoln','Field St.','Twentieth Alley','01234', 'SophiaTaylor',7)
";

$result = $conn->query($sql);

if ($result) {
    echo "New records created successfully created in <b>{$tableName}</b> table";
} else {
    echo "Error creating database: " . $conn->error;
}
echo "<br>";


// *********************************************************************


// order_detail
$tableName = 'order_detail';

// execute query
$sql = "INSERT INTO {$tableName} (
    order_number,
    product_code,
    quantity_ordered,
    price_each,
    discount,
    color
    )
    VALUES
(1, 'P001', 2, 10, 0, 'Silver'),
(1, 'P002', 3, 15, 0, 'Black'),
(2, 'P003', 1, 20, 0, 'Black'),
(2, 'P004', 4, 25, 0, 'Gray'),
(3, 'P005', 2, 30, 0, 'Silver'),
(4, 'P006', 3, 18, 0, 'Gray'),
(4, 'P007', 1, 22, 0, 'Navy'),
(4, 'P008', 4, 12, 0, 'White'),
(5, 'P009', 2, 8, 0, 'Brown'),
(5, 'P010', 3, 6, 0, 'Yellow'),
(6, 'P011', 1, 5, 0, 'White'),
(6, 'P012', 4, 7, 0, 'Black'),
(6, 'P013', 2, 9, 0, 'White'),
(6, 'P022', 3, 11, 0, 'White'),
(8, 'P015', 1, 13, 0, 'White'),
(8, 'P016', 4, 16, 0, 'pink'),
(9, 'P017', 2, 14, 0, 'Charcoal'),
(12, 'P018', 3, 17, 0, 'Purple'),
(20, 'P016', 1, 1000, 10, 'Blue'),
(20, 'P021', 4, 1200, 5 , 'black')
    ";

$result = $conn->query($sql);

if ($result) {
    echo "New records created successfully created in <b>{$tableName}</b> table";
} else {
    echo "Error creating database: " . $conn->error;
}
echo "<br>";


// *********************************************************************


// order
$tableName = 'shippers';

// execute query
$sql = "INSERT INTO {$tableName} (
    shipper_id,
    company,
    first_name,
    last_name,
    email_address,
    job_title,
    business_phone, 
    address_state, 
    address_city,
    address_street,
    address_alley,
    address_postal_code
    )
    VALUES 
(1, 'Shipper A', 'John', 'Doe', 'john.doe@example.com', 'Logistics Manager', '1234567890', 'California', 'Los Angeles', 'Main St', '1st Alley', '12345'), 
(2, 'Shipper B', 'Jane', 'Smith', 'jane.smith@example.com', 'Shipping Coordinator', '0987654321', 'New York', 'New York City', 'Broadway', '2nd Alley', '54321'),
(3, 'Shipper C', 'Michael', 'Johnson', 'michael.johnson@example.com', 'Transportation Specialist', '4567890123', 'Texas', 'Houston', 'Oak St', '3rd Alley', '67890'),
(4, 'Shipper D', 'Emily', 'Brown', 'emily.brown@example.com', 'Delivery Supervisor', '7890123456', 'Florida', 'Miami', 'Palm St', '4th Alley', '90123'),
(5, 'Shipper E', 'David', 'Martinez', 'david.martinez@example.com', 'Fleet Manager', '2345678901', 'Illinois', 'Chicago', 'Lake St', '5th Alley', '34567'),
(6, 'Shipper F', 'Sarah', 'Garcia', 'sarah.garcia@example.com', 'Supply Chain Analyst', '8901234567', 'Arizona', 'Phoenix', 'Sunset St', '6th Alley', '89012'),
(7, 'Shipper G', 'Robert', 'Rodriguez', 'robert.rodriguez@example.com', 'Warehouse Coordinator', '5678901234', 'Nevada', 'Las Vegas', 'Casino St', '7th Alley', '56789'),
(8, 'Shipper H', 'Amanda', 'Lopez', 'amanda.lopez@example.com', 'Inventory Manager', '0123456789', 'Washington', 'Seattle', 'Harbor St', '8th Alley', '01234'),
(9, 'Shipper I', 'Daniel', 'Perez', 'daniel.perez@example.com', 'Operations Director', '3456789012', 'Colorado', 'Denver', 'Mountain St','9th Alley','34567'),
(10, 'Shipper J','Jessica','Torres','jessica.torres@example.com','Customer Service Representative','6789012345','Oregon','Portland','River St','10th Alley','67890')
    ";

$result = $conn->query($sql);

if ($result) {
    echo "New records created successfully created in <b>{$tableName}</b> table";
} else {
    echo "Error creating database: " . $conn->error;
}
echo "<br>";


// *********************************************************************


// comment
$tableName = 'comments';

// execute query
$sql = "INSERT INTO {$tableName} (
    comment_id,
    comment_text,
    comment_date,
    product_code,
    customer_name,
    reply_comment
    )
    VALUES 
(1 ,'Great product, very satisfied with my purchase.', '2022-01-15 10:30:00', 'P001', 'EthanAnderson', 0),
(2 ,'The delivery was quick and the product quality is excellent.', '2022-01-16 11:45:00', 'P002', 'SophiaTaylor', 0),
(3 ,'I had an issue with the product but the customer service team resolved it promptly.', '2022-01-17 14:20:00', 'P003', 'DanielMiller', 0),
(4 ,'Highly recommend this product, it exceeded my expectations.', '2022-01-18 09:10:00', 'P004', 'OliviaLee', 0),
(5 ,'The product arrived damaged, waiting for a replacement.', '2022-01-19 15:30:00', 'P005', 'DavidClark', 0),
(6 ,'Great value for money, will definitely buy from this store again.', '2022-01-20 12:25:00', 'P006', 'SarahWilson', 0),
(7 ,'The product description was accurate and the shipping was fast.', '2022-01-21 13:40:00', 'P013', 'MichaelDavis', 0),
(8 ,'Not happy with the product quality, expected better.', '2022-01-22 10:55:00', 'P010', 'SophiaTaylor', 0),
(9 ,'The customer service team was very helpful in assisting me with my order.', '2022-01-23 11:15:00', 'P009', 'EthanAnderson', 0),
(10 ,'Impressed with the durability of the product, worth the price.', '2022-01-24 14:50:00', 'P001', 'DanielMiller', 1),
(11 ,'Good experience overall, would recommend this store to others.', '2022-01-25 09:30:00', 'P001', 'OliviaLee', 10),
(12 ,'The product arrived on time and in perfect condition.', '2022-01-26 15:20:00', 'P005', 'AliceSmith', 0),
(13 ,'Excellent customer service, they went above and beyond to help me.', '2022-01-27 12:45:00', 'P003', 'BobJohnson', 3),
(14 ,'The product design is stylish and functional, very happy with my purchase.', '2022-01-28 13:10:00', 'P011', 'EmilyBrown', 0),
(15 ,'Had an issue with the order but it was quickly resolved by the support team.', '2022-01-29 10:05:00', 'P015', 'MichaelDavis', 0),
(16 ,'The product is exactly what I was looking for, thank you!', '2022-01-30 14:35:00', 'P020', 'EmilyBrown', 0),
(17 ,'Fast shipping and good communication throughout the process.', '2022-01-31 09:20:00', 'P017', 'AliceSmith', 0),
(18 ,'The product exceeded my expectations, very happy with my purchase.', '2022-02-01 15:15:00', 'P001', 'SarahWilson', 1),
(19 ,'Great customer service, they were very responsive to my inquiries.', '2022-02-02 12:30:00', 'P002', 'EmilyBrown', 0),
(20 ,'The product arrived well-packaged and in perfect condition.', '2022-02-03 13:55:00', 'P008', 'SophiaTaylor', 0)
    ";

$result = $conn->query($sql);

if ($result) {
    echo "New records created successfully created in <b>{$tableName}</b> table";
} else {
    echo "Error creating database: " . $conn->error;
}
echo "<br>";


// *********************************************************************


// like_comment
$tableName = 'like_comment';

// execute query
$sql = "INSERT INTO {$tableName} (
    comment_id,
    customer_name
    )
    VALUES
    (1  , 'AliceSmith'),
    (11 ,  'BobJohnson'),
    (3  , 'DavidClark'),
    (12 ,  'EthanAnderson'),
    (17 ,  'SophiaTaylor'),
    (6  , 'DanielMiller'),
    (13 ,  'OliviaLee'),
    (8  , 'EthanAnderson'),
    (2  , 'MichaelDavis'),
    (3  , 'MichaelDavis'),
    (1  , 'EthanAnderson'),
    (4  , 'MichaelDavis'),
    (8  , 'SarahWilson'),
    (8  , 'EmilyBrown'),
    (1  , 'SophiaTaylor'),
    (1  , 'DavidClark'),
    (5  , 'BobJohnson'),
    (6  , 'SarahWilson')
    ";

$result = $conn->query($sql);

if ($result) {
    echo "New records created successfully created in <b>{$tableName}</b> table";
} else {
    echo "Error creating database: " . $conn->error;
}
echo "<br>";


// *********************************************************************


// bookmark
$tableName = 'product_bookmark';

// execute query
$sql = "INSERT INTO {$tableName} (
    product_code,
    customer_name
    )
    VALUES
    ( 'P012' , 'AliceSmith'),
    ( 'P035' ,  'BobJohnson'),
    ( 'P020' , 'DavidClark'),
    ( 'P002' ,  'EthanAnderson'),
    ( 'P014' ,  'SophiaTaylor'),
    ( 'P023' , 'DanielMiller'),
    ( 'P018' ,  'OliviaLee'),
    ( 'P033' , 'EthanAnderson'),
    ( 'P029' , 'MichaelDavis'),
    ( 'P019' , 'MichaelDavis'),
    ( 'P006' , 'EthanAnderson'),
    ( 'P010' , 'MichaelDavis'),
    ( 'P024' , 'SarahWilson'),
    ( 'P036' , 'EmilyBrown'),
    ( 'P016' , 'SophiaTaylor'),
    ( 'P037' , 'DavidClark'),
    ( 'P031' , 'BobJohnson'),
    ( 'P009' , 'SarahWilson')
    ";

$result = $conn->query($sql);

if ($result) {
    echo "New records created successfully created in <b>{$tableName}</b> table";
} else {
    echo "Error creating database: " . $conn->error;
}
echo "<br>";


// *********************************************************************


// likes
$tableName = 'product_like';

// execute query
$sql = "INSERT INTO {$tableName} (
    product_code,
    customer_name
    )
    VALUES
    ( 'P012' , 'AliceSmith'),
    ( 'P035' ,  'BobJohnson'),
    ( 'P020' , 'EthanAnderson'),
    ( 'P002' ,  'EthanAnderson'),
    ( 'P014' ,  'SophiaTaylor'),
    ( 'P023' , 'DanielMiller'),
    ( 'P020' , 'DavidClark'),
    ( 'P018' ,  'OliviaLee'),
    ( 'P033' , 'DavidClark'),
    ( 'P029' , 'MichaelDavis'),
    ( 'P018' ,  'OliviaLee'),
    ( 'P019' , 'MichaelDavis'),
    ( 'P018' ,  'SarahWilson'),
    ( 'P006' , 'EthanAnderson'),
    ( 'P010' , 'MichaelDavis'),
    ( 'P024' , 'SarahWilson'),
    ( 'P036' , 'EmilyBrown'),
    ( 'P016' , 'SophiaTaylor'),
    ( 'P037' , 'DavidClark'),
    ( 'P031' , 'BobJohnson'),
    ( 'P010' , 'OliviaLee'),
    ( 'P012' , 'EthanAnderson'),
    ( 'P040' , 'BobJohnson')
    ";

$result = $conn->query($sql);

if ($result) {
    echo "New records created successfully created in <b>{$tableName}</b> table";
} else {
    echo "Error creating database: " . $conn->error;
}
echo "<br>";


// *********************************************************************


// vote
$tableName = 'product_vote';

// execute query
$sql = "INSERT INTO {$tableName} (
    product_code,
    customer_name,
    vote_quantity
    )
    VALUES
    ( 'P012' , 'DavidClark' , 5),
    ( 'P035' ,  'BobJohnson' , 2),
    ( 'P020' , 'MichaelDavis' , 3),
    ( 'P002' ,  'SarahWilson' , 5),
    ( 'P014' ,  'SophiaTaylor' , 4),
    ( 'P023' , 'DanielMiller' , 3),
    ( 'P020' , 'BobJohnson' , 2),
    ( 'P018' ,  'OliviaLee' , 3),
    ( 'P033' , 'DavidClark' , 5),
    ( 'P029' , 'EthanAnderson' , 1),
    ( 'P018' ,  'OliviaLee' , 2),
    ( 'P019' , 'EthanAnderson' , 3),
    ( 'P018' ,  'SarahWilson' , 4),
    ( 'P006' , 'SarahWilson' , 5),
    ( 'P010' , 'MichaelDavis' , 3),
    ( 'P024' , 'SarahWilson' , 4),
    ( 'P036' , 'OliviaLee' , 3),
    ( 'P016' , 'SophiaTaylor' , 2),
    ( 'P037' , 'DavidClark' , 2),
    ( 'P031' , 'BobJohnson' , 1),
    ( 'P010' , 'OliviaLee' , 5),
    ( 'P012' , 'EthanAnderson' , 3),
    ( 'P040' , 'BobJohnson' , 2)
    ";

$result = $conn->query($sql);

if ($result) {
    echo "New records created successfully created in <b>{$tableName}</b> table";
} else {
    echo "Error creating database: " . $conn->error;
}
echo "<br>";


// *********************************************************************


// basket
$tableName = 'basket';

// execute query
$sql = "INSERT INTO {$tableName} (
    product_code,
    customer_name,
    quantity
    )
    VALUES
    ( 'P012' , 'DavidClark' , 1),
    ( 'P035' ,  'BobJohnson' , 2),
    ( 'P020' , 'MichaelDavis' , 3),
    ( 'P002' ,  'SarahWilson' , 1),
    ( 'P014' ,  'SophiaTaylor' , 4),
    ( 'P023' , 'DanielMiller' , 1),
    ( 'P020' , 'BobJohnson' , 2),
    ( 'P018' ,  'OliviaLee' , 3),
    ( 'P033' , 'DavidClark' , 3),
    ( 'P029' , 'EthanAnderson' , 2),
    ( 'P018' ,  'OliviaLee' , 2),
    ( 'P019' , 'EthanAnderson' , 3),
    ( 'P018' ,  'SarahWilson' , 1),
    ( 'P006' , 'SarahWilson' , 1),
    ( 'P010' , 'MichaelDavis' , 3),
    ( 'P024' , 'SarahWilson' , 2),
    ( 'P036' , 'OliviaLee' , 1),
    ( 'P016' , 'SophiaTaylor' , 2),
    ( 'P037' , 'DavidClark' , 2),
    ( 'P031' , 'BobJohnson' , 1),
    ( 'P010' , 'OliviaLee' , 5),
    ( 'P012' , 'EthanAnderson' , 3),
    ( 'P040' , 'BobJohnson' , 2)
    ";

$result = $conn->query($sql);

if ($result) {
    echo "New records created successfully created in <b>{$tableName}</b> table";
} else {
    echo "Error creating database: " . $conn->error;
}


// disconnect from database
$conn->close();
