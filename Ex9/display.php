<?php
include 'db.php';

$result = $conn->query("SELECT * FROM products");

echo "<h2>Products</h2>";

while ($row = $result->fetch_assoc()) {
    echo "Name: " . $row['name'] . "<br>";
    echo "Price: " . $row['price'] . "<br>";
    echo "Description: " . $row['description'] . "<br><br>";
}
?>