<?php

$servername     = "localhost";
$username       = "srsomgcd_krishiadmin";
$password       = "123@jAmifree";
$db             = "srsomgcd_krishihut";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// echo "connected";
// Check connection
if ($conn->connect_error) {
    // die("Connection failed: " . $conn->connect_error);
} 

// echo 'website maintance is running';