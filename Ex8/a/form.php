<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Validation
if (empty($name) || empty($email) || empty($password)) {
    echo "Please complete every field.";
    exit();
}

// Email validation
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Please use a valid email address.";
    exit();
}

// Password length
if (strlen($password) < 6) {
    echo "Password should be at least 6 characters.";
    exit();
}

echo "Form submitted successfully.<br>";
echo "Name: " . $name . "<br>";
echo "Email: " . $email;

?>