<?php

$hostname  = "localhost";
$username = "root";
$password = "";
$database = "sphare_healthcare";

$connection = new mysqli($hostname, $username, $password, $database);

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
    // echo "db not connected successfully";
// } else {
    // echo "db connected successfully /n";
}

// die("Database connection failed: " . mysqli_connect_error());