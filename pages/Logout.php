<?php
// when you are logged out you destroy the session
session_start();
session_destroy();
header('Location: form.php'); // Redirect the user to the login page
exit();
?>
<!DOCTYPE html>
<html>
<body>
 
<?php
echo "Logged out successfully";
?>
 
</body>
</html>
