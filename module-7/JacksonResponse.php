<?php
/*
Jackson
04/29/2026
PHP Form
Processes and validates form data
*/
?>

<?php
// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $color = $_POST["color"];
    $comments = $_POST["comments"];

    // Validate fields
    if (empty($name) || empty($email) || empty($age) || empty($password) || empty($gender) || empty($color) || empty($comments)) {
        echo "<h2>Error: All fields are required.</h2>";
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h2>Error: Invalid email format.</h2>";
        exit();
    }

    if (!is_numeric($age) || $age <= 0) {
        echo "<h2>Error: Age must be a positive number.</h2>";
        exit();
    }

    // Display formatted output
    echo "<h2>Submitted Information</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Favorite Color:</strong> <span style='color:$color;'>$color</span></p>";
    echo "<p><strong>Comments:</strong> $comments</p>";

} else {
    echo "<h2>Error: Form not submitted correctly.</h2>";
}
?>