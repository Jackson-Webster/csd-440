<?php
/*
 * Jackson
 * 4/9/2026
 * Palindrome Checker
 * This program checks whether a string is a palindrome.
 */

/**
 * Function to check if a string is a palindrome
 * @param string $str
 * @return bool
 */
function isPalindrome($str) {
    // Remove spaces and convert to lowercase
    $cleaned = strtolower(str_replace(' ', '', $str));

    // Reverse the string
    $reversed = strrev($cleaned);

    // Compare original and reversed
    return $cleaned === $reversed;
}

/**
 * Function to display test results
 * @param string $str
 */
function testPalindrome($str) {
    echo "<p>Original: $str</p>";

    // Reverse display
    $reversed = strrev($str);
    echo "<p>Reversed: $reversed</p>";

    // Check result
    if (isPalindrome($str)) {
        echo "<p><strong>Result: This is a palindrome</strong></p>";
    } else {
        echo "<p><strong>Result: This is NOT a palindrome</strong></p>";
    }

    echo "<hr>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Palindrome Checker</title>
</head>
<body>

<h1>Palindrome Test Results</h1>

<?php
// Three palindromes
testPalindrome("racecar");
testPalindrome("level");
testPalindrome("madam");

// Three non-palindromes
testPalindrome("hello");
testPalindrome("target");
testPalindrome("computer");
?>

</body>
</html>