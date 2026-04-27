<?php
session_start();

// Check session
if (!isset($_SESSION['user'])) {
    echo "Please sign in first!";
    exit();
}

echo "<h2>Welcome " . $_SESSION['user'] . "</h2>";

// Show cookie
if (isset($_COOKIE['user'])) {
    echo "Cookie User: " . $_COOKIE['user'] . "<br>";
}

echo "<a href='logout.php'>Logout</a>";
?>