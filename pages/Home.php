<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../styles/stylesHome.css" type="text/css" />
    </head>
<body>
 
<h1>Welcome to the home page!</h1>
<p>You are logged in successfully.</p>
<p><a href="logout.php">Logout</a></p>

<br>
<br>
<h1>Looking for a good car? <br> Check out the inventory</h1>
 
</body>
</html>

<?php
session_start();

// Check if the session ID exists
if (!isset($_SESSION['sid'])) {
    // Redirect to the login page
    header('Location: form.php');
    exit();
}


// setting up the multidimensional array
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15),
    array("Toyota",18,16),
    array("Kia",51,53),
    array("Nissan",9,44),
    array("Audi",22,32)
  );

//   making a for loop to get only 4 rows according to the multidimensional array
echo "<div class=list>";
  for ($row = 0; $row < 8; $row++) {
    echo "<div class=fix>";
    echo "<p><b>Column number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
    echo "</div>";
    
  }
  echo "</div>";
?>

