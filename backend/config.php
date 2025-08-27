<?php
$servername = "localhost";
$dbusername = "root"; // DB username
$dbpassword = "";     // DB password
$dbname = "admin_panel";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
