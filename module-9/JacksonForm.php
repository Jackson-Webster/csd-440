<!DOCTYPE html>
<html>
<head>
    <title>Add Game</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>Add Favorite Game</h1>

<form action="JacksonInsert.php" method="post">

    Game Name:

    <br><br>

    <input type="text" name="game_name" required>

    <br><br>

    Genre:

    <br><br>

    <input type="text" name="genre" required>

    <br><br>

    Platform:

    <br><br>

    <input type="text" name="platform" required>

    <br><br>

    Release Year:

    <br><br>

    <input type="text" name="release_year" required>

    <br><br>

    Rating:

    <br><br>

    <input type="text" name="rating" required>

    <br><br>

    <input type="submit" value="Add Game">

</form>

<br>

<a href="JacksonIndex.php">Back Home</a>

</div>

</body>
</html>