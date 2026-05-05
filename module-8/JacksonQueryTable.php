<?php
$conn = mysqli_connect("localhost:3309", "student1", "pass", "baseball_01");

if (!$conn) {
    die("Connection failed");
}

// Query table
$sql = "SELECT * FROM favorite_games";
$result = mysqli_query($conn, $sql);
?>

<html>
<head>
    <title>Favorite Games</title>
</head>
<body>

<h2>My Favorite Video Games</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Game Name</th>
    <th>Genre</th>
    <th>Platform</th>
    <th>Release Year</th>
    <th>Rating</th>
</tr>

<?php
while ($row = mysqli_fetch_array($result)) {
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