<?php
session_start();
echo 'Session successfully ended';
echo '<a href ="mian.php">Login Again!</a> to Play games';
session_destroy();
?>