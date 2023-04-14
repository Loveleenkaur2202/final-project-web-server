<!DOCTYPE html>
<html>
<head>
<?php
        include_once 'header.php';
        
	
        session_start(); // Start the session
        if (!isset($_SESSION['level_won']) || $_SESSION['level_won'] !== true) {
          echo '<h2><a href="level4.php">Complete Level 4 to continue</a></h2>';
          exit; 
        }
    
    ?>

	<title>Random Letters Game</title>
    <link href="css/games.css" rel="stylesheet" type="text/css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
	<div id="game-container">
		
		<h3>Find the maximum and minimum letters</h3>
		<div id="letters-container"></div>
		<form id="game-form">
		
			<label for="min-letter">Minimum Letter:</label>
			<input type="text" id="min-letter" name="min-letter" maxlength="1" required>
			
			<label for="max-letter">Maximum Letter:</label>
			<input type="text" id="max-letter" name="max-letter" maxlength="1" required>
			<br><br><br>
			<input type="submit" value="Submit">
            <a href ="logout.php"><input type="button" value="End session"></a>
            
             <br><br>
		</form>
		<p id="result"></p>
	</div>
	
 
	<script src="level5Script.js"></script>
    <?php
        include_once 'footer.php';
    ?>
</body>
</html>
