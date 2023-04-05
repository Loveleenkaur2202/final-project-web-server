<?php
include_once 'header.php';
session_start();
echo 'Session successfully ended';
echo '<a href ="main.php">Login Again!</a> to Play games';
session_destroy();
include_once 'footer.php';
?>