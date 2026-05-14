<?php
/*
    Jackson Webster
    CSD440
    Database connection file
*/

$servername = "localhost:3309";
$username = "student1";
$password = "pass";
$database = "baseball_01";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>