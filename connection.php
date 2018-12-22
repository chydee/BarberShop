<?php
$servername = "localhost";
$username = "Chydee";
$password = "Chidiebere577";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>