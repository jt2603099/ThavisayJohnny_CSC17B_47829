<?php

$servername = "209.129.8.7";
$username = "47697";
$password = "cis17b47697";
$dbname = "47697";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>