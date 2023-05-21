<?php
// Database configuration
$dbHost = 'localhost'; // Assuming the database is on the same server
$dbUser = 'suren';
$dbPass = 'suren123';
$dbName = 'my_db';

// Create a database connection
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Check the connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Connected successfully
echo 'Connected to the database!';

// Close the connection
$conn->close();
?>

