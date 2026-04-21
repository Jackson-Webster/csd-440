<?php
/*
Jackson Webster
MyInteger Class
2026-04-21


This program defines a class called JacksonMyInteger.
The class stores one integer value and includes methods to check
if the number is even, odd, or prime. It also includes a getter
and setter. Two objects are created and tested.
*/

class JacksonMyInteger {

    // Property
    private $value;

    // Constructor
    public function __construct($value) {
        $this->value = $value;
    }

    // Getter
    public function getValue() {
        return $this->value;
    }

    // Setter
    public function setValue($value) {
        $this->value = $value;
    }

    // Check if even
    public function isEven($num) {
        return $num % 2 == 0;
    }

    // Check if odd
    public function isOdd($num) {
        return $num % 2 != 0;
    }

    // Check if prime
    public function isPrime() {
        if ($this->value <= 1) {
            return false;
        }

        for ($i = 2; $i <= sqrt($this->value); $i++) {
            if ($this->value % $i == 0) {
                return false;
            }
        }
        return true;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>JacksonMyInteger</title>
</head>
<body>

<h2>Testing JacksonMyInteger Class</h2>

<?php
// Create two instances
$num1 = new JacksonMyInteger(10);
$num2 = new JacksonMyInteger(7);

// Test first object
echo "<h3>Object 1 Value: " . $num1->getValue() . "</h3>";
echo "Is Even: " . ($num1->isEven($num1->getValue()) ? "Yes" : "No") . "<br>";
echo "Is Odd: " . ($num1->isOdd($num1->getValue()) ? "Yes" : "No") . "<br>";
echo "Is Prime: " . ($num1->isPrime() ? "Yes" : "No") . "<br>";

// Test second object
echo "<h3>Object 2 Value: " . $num2->getValue() . "</h3>";
echo "Is Even: " . ($num2->isEven($num2->getValue()) ? "Yes" : "No") . "<br>";
echo "Is Odd: " . ($num2->isOdd($num2->getValue()) ? "Yes" : "No") . "<br>";
echo "Is Prime: " . ($num2->isPrime() ? "Yes" : "No") . "<br>";

// Test setter
$num1->setValue(13);
echo "<h3>After Changing Object 1 Value to 13</h3>";
echo "New Value: " . $num1->getValue() . "<br>";
echo "Is Prime: " . ($num1->isPrime() ? "Yes" : "No") . "<br>";
?>

</body>
</html>