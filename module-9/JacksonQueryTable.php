<?php
/*
    Jackson Webster
    CSD440
    Display records from favorite_games table
*/

include 'JacksonConnection.php';

$sql = "SELECT * FROM favorite_games";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Favorite Games</title>

    <style>

        body {
            font-family: Arial;
            margin: 20px;
        }

        table {
            border-collapse: collapse;
            width: 80%;
        }

        table, th, td {
            border: 1px solid black;
            padding: 10px;
        }

        th {
            background-color: lightgray;
        }

    </style>

</head>

<body>

<h2>My Favorite Video Games</h2>

<table>

<tr>
    <th>ID</th>
    <th>Game Name</th>
    <th>Genre</th>
    <th>Platform</th>
    <th>Release Year</th>
    <th>Rating</th>
</tr>

<?php
while ($row = mysqli_fetch_assoc($result)) {
?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['game_name']; ?></td>
    <td><?php echo $row['genre']; ?></td>
    <td><?php echo $row['platform']; ?></td>
    <td><?php echo $row['release_year']; ?></td>
    <td><?php echo $row['rating']; ?></td>
</tr>

<?php
}
?>

</table>

</body>
</html>

<?php
mysqli_close($conn);
?>