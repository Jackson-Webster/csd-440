<?php
include 'JacksonConnection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Games</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>Search Favorite Games</h1>

<form method="post">

    Enter Game Name:

    <br><br>

    <input type="text" name="search">

    <br><br>

    <input type="submit" value="Search">

</form>

<?php

if (isset($_POST['search'])) {

    $search = $_POST['search'];

    $sql = "SELECT * FROM favorite_games
            WHERE game_name LIKE '%$search%'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        echo "<table>";

        echo "<tr>
                <th>ID</th>
                <th>Game Name</th>
                <th>Genre</th>
                <th>Platform</th>
              </tr>";

        while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr>";

            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['game_name'] . "</td>";
            echo "<td>" . $row['genre'] . "</td>";
            echo "<td>" . $row['platform'] . "</td>";

            echo "</tr>";
        }

        echo "</table>";

    } else {

        echo "<p>No records found.</p>";
    }
}
?>

<br>

<a href="JacksonIndex.php">Back Home</a>

</div>

</body>
</html>