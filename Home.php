<?php
session_start();

// Check if the session ID exists
if (!isset($_SESSION['sid'])) {
    // Redirect to the login page
    header('Location: form.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<body>
 
<h1>Welcome to the home page!</h1>
<p>You are logged in successfully.</p>
 
<p><a href="logout.php">Logout</a></p>
 
</body>
</html>
