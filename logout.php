<?php
include_once 'header.php';
session_start();
unset($_SESSION['logged_in']);
echo '<br><br>Session successfully ended<br>';
echo '<a href ="index.php"> Login Again!</a> to Play games<br><br>';
session_destroy();
include_once 'footer.php';
?>

