<?php
$host = "localhost";
$user = "root";  // Default XAMPP MySQL username
$password = "";  // Default XAMPP MySQL password (empty)
$database = "gandharva_event_db"; // Database name

// Connect to MySQL
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
