<?php
/*
    Jackson Webster
    CSD440
    Drop favorite_games table
*/

include 'JacksonConnection.php';

$sql = "DROP TABLE IF EXISTS favorite_games";

$message = "";

if (mysqli_query($conn, $sql)) {
    $message = "Table dropped successfully.";
} else {
    $message = "Error dropping table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Drop Table</title>
</head>

<body>

<h2>Drop Table Result</h2>

<p><?php echo $message; ?></p>

</body>
</html>