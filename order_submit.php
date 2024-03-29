<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "delicacy_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into a table named "table3"
$tableName = "order_details";


$sql = "INSERT INTO $tableName (name, number, item, no_orders, message, address)
        VALUES ('$_POST[name]','$_POST[number]','$_POST[item]','$_POST[no_orders]','$_POST[message]','$_POST[address]')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
}

// Close connection
$conn->close();
?>
