<?php
$hostname = 'localhost'; // Change this if your MySQL server is hosted elsewhere
$username = 'root';      // Change this if you have a different MySQL username
$password = '';          // Set the MySQL password (if you have one)
$database = 'ideas_app'; // Replace with the name of the database you created

// Create a connection to the database
$connection = new mysqli($hostname, $username, $password, $database);

// Check if the connection was successful
if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
}
?>