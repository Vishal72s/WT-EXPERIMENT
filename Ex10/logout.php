<?php
session_start();
session_destroy();

echo "Logged out successfully.";
echo "<br><a href='login_form.html'>Login again</a>";
?>