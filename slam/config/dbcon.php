<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "!@#$"; // Provide your MySQL root password here
$database = "slambook"; // Your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>
