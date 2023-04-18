<!DOCTYPE html>
<html>
<head>
<?php
        include_once 'header.php';
        
	
        session_start(); // Start the session
         if (!isset($_SESSION['level_won']) || $_SESSION['level_won'] !== true) {
          echo '<h2><a href="level1.php">Complete Level 1 to continue</a></h2>';
          exit; 
        } 
    
    ?>

	<title>Random Letters Game</title>
    <link href="css/games.css" rel="stylesheet" type="text/css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

  <h3>Descending Order</h3>
  <p>Generated letters: <span id="letters"></span></p>
  <form id="form">
    <label for="input">Enter the letters in descending order:</label>
    <input type="text" id="input" name="input" required><br>
    <input type="submit" value="Submit">
    <a href ="logout.php"><input type="button" value="End session"></a>
  </form>
  <script src="level2Script.js"></script>



<?php
        include_once 'footer.php';
?>
</body>
</html>