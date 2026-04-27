<?php
include 'db.php';

$name = $_POST['name'] ?? '';
$price = $_POST['price'] ?? '';
$description = $_POST['description'] ?? '';

if (empty($name) || empty($price) || empty($description)) {
    echo "Please complete every field.";
    exit();
}

if (!is_numeric($price)) {
    echo "Price must be numeric.";
    exit();
}

$sql = "INSERT INTO products (name, price, description)
        VALUES ('$name', '$price', '$description')";

if ($conn->query($sql)) {
    echo "Product added successfully.<br>";
    echo "<a href='display.php'>View Products</a>";
} else {
    echo "Error: " . $conn->error;
}
?>