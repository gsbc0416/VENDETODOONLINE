<?php

$conn = new mysqli("localhost", "root", "0826", "vendetodoonline");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
?>