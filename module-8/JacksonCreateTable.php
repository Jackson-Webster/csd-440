<?php
// Connect to database
$conn = mysqli_connect("localhost:3309", "student1", "pass", "baseball_01");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create table
$sql = "CREATE TABLE favorite_games (
    id INT AUTO_INCREMENT PRIMARY KEY,
    game_name VARCHAR(50),
    genre VARCHAR(50),
    platform VARCHAR(50),
    release_year INT,
    rating DOUBLE
)";

// Execute query
if (mysqli_query($conn, $sql)) {
    echo "Table favorite_games created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>