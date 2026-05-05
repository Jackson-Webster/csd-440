<?php
$conn = mysqli_connect("localhost:3309", "student1", "pass", "baseball_01");

if (!$conn) {
    die("Connection failed");
}

// Drop table
$sql = "DROP TABLE IF EXISTS favorite_games";

if (mysqli_query($conn, $sql)) {
    echo "Table dropped successfully";
} else {
    echo "Error dropping table";
}

mysqli_close($conn);
?>