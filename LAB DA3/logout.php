<?php
// Initialize the session
session_start();


// Destroy the session
session_destroy();

// Redirect to the login page or another destination
header("location: index.php"); // Change 'login.php' to your desired destination
exit();
?>
