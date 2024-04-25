<?php
// MySQL server configuration
$servername = 'localhost'; // Change this if your MySQL server is running on a different host
$username = 'root'; // Change this to your MySQL username
$password = ''; // Change this to your MySQL password
$database = 'jewelry_db'; // Change this to the name of your MySQL database

// Create a new MySQLi connection
$conn = new mysqli($servername, $username, $password, $database);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Could not connect to MySQL: " . $conn->connect_error);
}
?>
