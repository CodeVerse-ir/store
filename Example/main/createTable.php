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
$sql = "CREATE TABLE {$tableName}(
    customer_name VARCHAR(25) NOT NULL,
    customer_password VARCHAR(25),
    first_name VARCHAR(25),
    last_name VARCHAR(25),
    customer_image VARCHAR(255),
    phone VARCHAR(11),
    email VARCHAR(25),
    status VARCHAR(25),
    address_line_state VARCHAR(25),
    address_line_city VARCHAR(25),
    address_line_street VARCHAR(25),
    address_line_alley VARCHAR(25),
    address_line_postal_code VARCHAR(10),
    home_address_state VARCHAR(25),
    home_address_city VARCHAR(25),
    home_address_street VARCHAR(25),
    home_address_alley VARCHAR(25),
    home_address_postal_code VARCHAR(10),
    PRIMARY KEY (customer_name)
)";

$result = $conn->query($sql);

if ($result) {
    echo "Table {$tableName} created successfully";
} else {
    echo "Error creating table {$tableName}: " . $conn->error;
}
echo "<br>";

// *********************************************************************


// product_lines
$tableName = 'product_lines';

// execute query
$sql = "CREATE TABLE {$tableName}(
    product_line_id INT NOT NULL AUTO_INCREMENT,
    product_line_name VARCHAR(50),
    product_line_image VARCHAR(255),
    product_line_description TEXT,
    PRIMARY KEY (product_line_id)
    )";

$result = $conn->query($sql);

if ($result) {
    echo "Table {$tableName} created successfully";
} else {
    echo "Error creating table {$tableName}: " . $conn->error;
}
echo "<br>";


// *********************************************************************

// products
$tableName = 'products';

// execute query
$sql = "CREATE TABLE {$tableName}(
    product_code VARCHAR(50) NOT NULL,
    product_name VARCHAR(25),
    product_vendor VARCHAR(25),
    product_attributes JSON,
    product_description TEXT,
    product_image VARCHAR(255),
    color VARCHAR(50),
    discount INT,
    buy_price INT,
    quantity_in_stock INT,
    product_line_id INT NOT NULL,
    PRIMARY KEY (product_code),
    FOREIGN KEY (product_line_id) REFERENCES product_lines (product_line_id)
    )";

$result = $conn->query($sql);

if ($result) {
    echo "Table {$tableName} created successfully";
} else {
    echo "Error creating table {$tableName}: " . $conn->error;
}
echo "<br>";


// *********************************************************************

// order
$tableName = 'orders';

// execute query
$sql = "CREATE TABLE {$tableName}(
    order_number INT NOT NULL AUTO_INCREMENT,
    order_date DATETIME,
    shipped_date DATETIME,
    order_status INT,
    shipping_cost INT,
    phone VARCHAR(11),
    address_line_state VARCHAR(25), 
    address_line_city VARCHAR(25),
    address_line_street VARCHAR(25),
    address_line_alley VARCHAR(25),
    address_line_postal_code VARCHAR(25),
    customer_name VARCHAR(25) NOT NULL,
    shipper_id INT NOT NULL,
    PRIMARY KEY (order_number),
    FOREIGN KEY (customer_name) REFERENCES customers (customer_name),
    FOREIGN KEY (shipper_id) REFERENCES shippers (shipper_id)
    )";

$result = $conn->query($sql);

if ($result) {
    echo "Table {$tableName} created successfully";
} else {
    echo "Error creating table {$tableName}: " . $conn->error;
}
echo "<br>";


// *********************************************************************


// order_detail
$tableName = 'order_detail';

// execute query
$sql = "CREATE TABLE {$tableName}(
    order_number INT NOT NULL,
    product_code VARCHAR(50) NOT NULL,
    quantity_ordered INT,
    price_each INT,
    discount INT,
    color VARCHAR(50),
    FOREIGN KEY (order_number) REFERENCES orders (order_number),
    FOREIGN KEY (product_code) REFERENCES products (product_code)
    )";

$result = $conn->query($sql);

if ($result) {
    echo "Table {$tableName} created successfully";
} else {
    echo "Error creating table {$tableName}: " . $conn->error;
}
echo "<br>";


// *********************************************************************


// order
$tableName = 'shippers';

// execute query
$sql = "CREATE TABLE {$tableName}(
    shipper_id INT NOT NULL AUTO_INCREMENT,
    company VARCHAR(50),
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email_address VARCHAR(50),
    job_title VARCHAR(50),
    business_phone VARCHAR(11), 
    address_state VARCHAR(25), 
    address_city VARCHAR(25),
    address_street VARCHAR(25),
    address_alley VARCHAR(25),
    address_postal_code VARCHAR(25),
    PRIMARY KEY (shipper_id)
    )";

$result = $conn->query($sql);

if ($result) {
    echo "Table {$tableName} created successfully";
} else {
    echo "Error creating table {$tableName}: " . $conn->error;
}
echo "<br>";


// *********************************************************************


// comment
$tableName = 'comments';

// execute query
$sql = "CREATE TABLE {$tableName}(
    comment_id INT NOT NULL AUTO_INCREMENT,
    comment_text VARCHAR(255),
    comment_date DATETIME,
    product_code VARCHAR(50) NOT NULL,
    customer_name VARCHAR(25) NOT NULL,
    reply_comment INT NOT NULL,
    PRIMARY KEY (comment_id),
    FOREIGN KEY (reply_comment) REFERENCES comments (comment_id),
    FOREIGN KEY (product_code) REFERENCES products (product_code),
    FOREIGN KEY (customer_name) REFERENCES customers (customer_name)
    )";

$result = $conn->query($sql);

if ($result) {
    echo "Table {$tableName} created successfully";
} else {
    echo "Error creating table {$tableName}: " . $conn->error;
}
echo "<br>";


// *********************************************************************


// like_comment
$tableName = 'like_comment';

// execute query
$sql = "CREATE TABLE {$tableName}(
    comment_id INT NOT NULL,
    customer_name VARCHAR(25) NOT NULL,
    FOREIGN KEY (comment_id) REFERENCES comments (comment_id),
    FOREIGN KEY (customer_name) REFERENCES customers (customer_name)
    )";

$result = $conn->query($sql);

if ($result) {
    echo "Table {$tableName} created successfully";
} else {
    echo "Error creating table {$tableName}: " . $conn->error;
}
echo "<br>";


// *********************************************************************


// bookmark
$tableName = 'product_bookmark';

// execute query
$sql = "CREATE TABLE {$tableName}(
    product_code VARCHAR(50) NOT NULL,
    customer_name VARCHAR(25) NOT NULL,
    FOREIGN KEY (product_code) REFERENCES products (product_code),
    FOREIGN KEY (customer_name) REFERENCES customers (customer_name)
    )";

$result = $conn->query($sql);

if ($result) {
    echo "Table {$tableName} created successfully";
} else {
    echo "Error creating table {$tableName}: " . $conn->error;
}
echo "<br>";


// *********************************************************************


// likes
$tableName = 'product_like';

// execute query
$sql = "CREATE TABLE {$tableName}(
    product_code VARCHAR(50) NOT NULL,
    customer_name VARCHAR(25) NOT NULL,
    FOREIGN KEY (product_code) REFERENCES products (product_code),
    FOREIGN KEY (customer_name) REFERENCES customers (customer_name)
    )";

$result = $conn->query($sql);

if ($result) {
    echo "Table {$tableName} created successfully";
} else {
    echo "Error creating table {$tableName}: " . $conn->error;
}
echo "<br>";


// *********************************************************************


// vote
$tableName = 'product_vote';

// execute query
$sql = "CREATE TABLE {$tableName}(
    product_code VARCHAR(50) NOT NULL,
    customer_name VARCHAR(25) NOT NULL,
    vote_quantity INT,
    FOREIGN KEY (product_code) REFERENCES products (product_code),
    FOREIGN KEY (customer_name) REFERENCES customers (customer_name)
    )";

$result = $conn->query($sql);

if ($result) {
    echo "Table {$tableName} created successfully";
} else {
    echo "Error creating table {$tableName}: " . $conn->error;
}
echo "<br>";


// *********************************************************************


// basket
$tableName = 'basket';

// execute query
$sql = "CREATE TABLE {$tableName}(
    product_code VARCHAR(50) NOT NULL,
    customer_name VARCHAR(25) NOT NULL,
    quantity INT,
    FOREIGN KEY (product_code) REFERENCES products (product_code),
    FOREIGN KEY (customer_name) REFERENCES customers (customer_name)
    )";

$result = $conn->query($sql);

if ($result) {
    echo "Table {$tableName} created successfully";
} else {
    echo "Error creating table {$tableName}: " . $conn->error;
}


// disconnect from database
$conn->close();
