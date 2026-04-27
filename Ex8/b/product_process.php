<?php

$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];

// Validation
if (empty($name) || empty($price) || empty($description)) {
    echo "Please complete every field.";
    exit();
}

// Price must be numeric
if (!is_numeric($price)) {
    echo "Price must be numeric.";
    exit();
}

echo "Product added successfully.<br>";
echo "Name: $name <br>";
echo "Price: $price <br>";
echo "Description: $description";

?>