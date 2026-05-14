<?php
/*
    Jackson Webster
    CSD440
    Insert records into favorite_games table
*/

include 'JacksonConnection.php';

$sql = "INSERT INTO favorite_games
(game_name, genre, platform, release_year, rating)
VALUES
('Doom Eternal','FPS','PC',2020,9.5),
('Terraria','Sandbox','PC',2011,9.0),
('Halo 2','FPS','Xbox',2004,9.2),
('Just Cause 2','Action','PC',2010,8.5),
('Factorio','Simulation','PC',2020,9.7)";

$message = "";

if (mysqli_query($conn, $sql)) {
    $message = "Records inserted successfully.";
} else {
    $message = "Error inserting records: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Populate Table</title>
</head>

<body>

<h2>Populate Table Result</h2>

<p><?php echo $message; ?></p>

</body>
</html>