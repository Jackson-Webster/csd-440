<!DOCTYPE html>
<html>
<head>
    <title>PHP Random Table</title>
    <style>
        table, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Random Number Table</h2>

<table>
<?php
// Jackson
// 3/26/2026
// Module 2 Assignment
// This program creates a table using nested loops and fills it with random numbers

for ($row = 1; $row <= 5; $row++) {
?>
    <tr>
<?php
    for ($col = 1; $col <= 5; $col++) {
        $num = rand(1, 100);
?>
        <td><?php echo $num; ?></td>
<?php
    }
?>
    </tr>
<?php
}
?>
</table>

</body>
</html>