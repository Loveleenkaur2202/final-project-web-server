<?php
session_start();
include_once 'header.php';
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
   echo'<a href="index.php">Login to access game levels</a>';
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
<?php
        include_once 'header.php';
?>
	<title>Random Letters Game</title>
    <link href="css/games.css" rel="stylesheet" type="text/css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
 
  <h3>Ascending Order</h3>
  <p>Generated letters: <span id="letters"></span></p>
  <form id="form">
    <label for="input">Enter the letters in ascending order:</label>
    <input type="text" id="input" name="input" required><br>
    <input type="submit" value="Submit">
    <a href ="logout.php"><input type="button" value="End session"></a>
  </form>
  <script src="level1Script.js"></script>


  </body>
 <?php
  include_once 'footer.php';
 ?>
 
</html>