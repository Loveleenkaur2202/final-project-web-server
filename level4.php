
<?php

// Generating an array of 6 random numbers between 1 and 100
$numbers = array();
for ($i = 0; $i < 6; $i++) {
  $numbers[] = rand(1, 100);
}

// Check if the form has been submitted
if (isset($_POST['submit'])) {

  $sorted_numbers = $_POST['user_input'];

  rsort($numbers);

  if ($sorted_numbers == $numbers) {
    echo "Congratulations! You sorted the numbers correctly.";
  } else {
    echo "Sorry, the sorted numbers did not match the original numbers. Please try again.";
  }
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
	<div id="game-container">
		
		<h3>Sort the given numbers in descending order</h3>
		<ul>
            <?php foreach ($numbers as $number): ?>
            <li><?php echo $number; ?></li>
            <?php endforeach; ?>
        </ul>
		<form id="game-form" >
			<label for="user_input">Enter the numbers here separated by commas : </label>
			<input type="text" id="user_input" name="user_input">
			<br><br><br>
			<input type="submit" value="Submit" name ="submit">
      <a href ="logout.php"><input type="button" value="End session"></a>
            
             <br><br>
		</form>
		<p id="result"></p>
	</div>
	
    <?php
        include_once 'footer.php';
    ?>
</body>
</html>
