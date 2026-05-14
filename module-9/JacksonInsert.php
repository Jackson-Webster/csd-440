<?php
include 'JacksonConnection.php';

$game_name = $_POST['game_name'];
$genre = $_POST['genre'];
$platform = $_POST['platform'];
$release_year = $_POST['release_year'];
$rating = $_POST['rating'];

$sql = "INSERT INTO favorite_games
(game_name, genre, platform, release_year, rating)
VALUES
('$game_name', '$genre', '$platform', '$release_year', '$rating')";

$message = "";

if (mysqli_query($conn, $sql)) {
    $message = "Game added successfully.";
} else {
    $message = "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert Game</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>Insert Result</h1>

<p><?php echo $message; ?></p>

<a href="JacksonIndex.php">Back Home</a>

</div>

</body>
</html>