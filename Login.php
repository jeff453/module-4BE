<?php
$uid = filter_var($_POST['userid'], FILTER_DEFAULT);
$pw = filter_var($_POST['password'], FILTER_DEFAULT);

if($uid == 'jeff' and $pw == 'jeff453') {
    session_start();
    $_SESSION['sid']=session_id();
    echo "Logged in successfully";
    echo "<p><a href='home.php'>Go to Home page</a></p>";
} else {
    echo "Invalid ID or password";
    echo "<p><a href='Form.php'>Try again</a></p>";
}
?>
