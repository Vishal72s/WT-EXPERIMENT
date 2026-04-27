<?php
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username == "admin" && $password == "1234") {

    $_SESSION['user'] = $username;

    setcookie("user", $username, time()+3600);

    header("Location: index.php");
    exit();

} else {
    echo "Invalid login credentials.";
}
?>