<?php
$conn = mysqli_connect("localhost:3309", "student1", "pass", "baseball_01");

if (!$conn) {
    die("Connection failed");
}

// Insert data
$sql = "INSERT INTO favorite_games (game_name, genre, platform, release_year, rating) VALUES
('Doom Eternal','FPS','PC',2020,9.5),
('Terraria','Sandbox','PC',2011,9.0),
('Halo 2','FPS','Xbox',2004,9.2),
('Just Cause 2','Action','PC',2010,8.5),
('Factorio','Simulation','PC',2020,9.7)";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>