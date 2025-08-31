<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$db_username = "velkiage";          // Hosting DB username
$db_password = "rvJh5N)0PNb-03";    // Hosting DB password
$dbname     = "velkiage_velki_agents"; 

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
