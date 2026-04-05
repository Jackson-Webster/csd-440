<?php
/**
 * Jackson
 * 4/5/2026
 * Module 3 - Table with Function
 * Generates a table using random numbers and displays their sums using an external function.
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Table 3 - Random Sum Table</title>
</head>
<body>

<h2>Random Number Sum Table</h2>

<?php
// Include external function file
include 'functions.php';
?>

<table border="1" cellpadding="10">
<?php
for ($row = 1; $row <= 5; $row++) {
    echo "<tr>";
    
    for ($col = 1; $col <= 5; $col++) {
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        
        // Call function to get sum
        $result = addNumbers($num1, $num2);
        
        echo "<td>$num1 + $num2 = $result</td>";
    }
    
    echo "</tr>";
}
?>
</table>

</body>
</html>