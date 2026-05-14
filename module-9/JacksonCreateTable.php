<?php
/*
    Jackson Webster
    CSD440
    Create favorite_games table
*/

include 'JacksonConnection.php';

$sql = "CREATE TABLE favorite_games (
    id INT AUTO_INCREMENT PRIMARY KEY,
    game_name VARCHAR(50),
    genre VARCHAR(50),
    platform VARCHAR(50),
    release_year INT,
    rating DOUBLE
)";

$message = "";

if (mysqli_query($conn, $sql)) {
    $message = "Table favorite_games created successfully.";
} else {
    $message = "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Table</title>
</head>

<body>

<h2>Create Table Result</h2>

<p><?php echo $message; ?></p>

</body>
</html>