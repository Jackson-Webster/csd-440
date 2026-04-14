<?php
/*
Jackson Webster
2026-04-14
Jackson Customers.php
Customer array program with filtering

Store customer records and display filtered results
*/

// Customer data set
$customers = [
    ["firstName" => "John", "lastName" => "Smith", "age" => 28, "phone" => "555-111-1001"],
    ["firstName" => "Emma", "lastName" => "Johnson", "age" => 34, "phone" => "555-111-1002"],
    ["firstName" => "Michael", "lastName" => "Brown", "age" => 22, "phone" => "555-111-1003"],
    ["firstName" => "Olivia", "lastName" => "Davis", "age" => 45, "phone" => "555-111-1004"],
    ["firstName" => "William", "lastName" => "Miller", "age" => 31, "phone" => "555-111-1005"],
    ["firstName" => "Sophia", "lastName" => "Wilson", "age" => 27, "phone" => "555-111-1006"],
    ["firstName" => "James", "lastName" => "Moore", "age" => 39, "phone" => "555-111-1007"],
    ["firstName" => "Ava", "lastName" => "Taylor", "age" => 19, "phone" => "555-111-1008"],
    ["firstName" => "Liam", "lastName" => "Anderson", "age" => 52, "phone" => "555-111-1009"],
    ["firstName" => "Isabella", "lastName" => "Thomas", "age" => 26, "phone" => "555-111-1010"]
];

// Output one customer in readable format
function displayCustomer($customer) {
    echo "<p>";
    echo $customer["firstName"] . " " . $customer["lastName"] . "<br>";
    echo "Age: " . $customer["age"] . "<br>";
    echo "Phone: " . $customer["phone"];
    echo "</p>";
}

// last name Wilson
$wilsonCustomers = array_filter($customers, function($customer) {
    return $customer["lastName"] === "Wilson";
});

// age greater than 30
$ageAbove30 = array_filter($customers, function($customer) {
    return $customer["age"] > 30;
});

// first name Ava
$avaCustomers = array_filter($customers, function($customer) {
    return $customer["firstName"] === "Ava";
});
?>

<!DOCTYPE html>
<html>
<head>
    <title>Customer List</title>
</head>
<body>

<!-- Display all customers -->
<h2>All Customers</h2>
<?php foreach ($customers as $customer) {
    displayCustomer($customer);
} ?>

<!-- Display filtered by last name -->
<h2>Last Name Search: Wilson</h2>
<?php foreach ($wilsonCustomers as $customer) {
    displayCustomer($customer);
} ?>

<!-- Display filtered by age -->
<h2>Age Above 30</h2>
<?php foreach ($ageAbove30 as $customer) {
    displayCustomer($customer);
} ?>

<!-- Display filtered by first name -->
<h2>First Name Search: Ava</h2>
<?php foreach ($avaCustomers as $customer) {
    displayCustomer($customer);
} ?>

</body>
</html>