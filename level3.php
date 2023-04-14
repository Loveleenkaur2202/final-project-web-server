<?php

// Generate an array of 6 random numbers between 1 and 100
$nums = array();
for ($i = 0; $i < 6; $i++) {
  $nums[] = rand(1, 100);
}

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // get the sorted numbers fom the form
  $sorted_nums = $_POST['user_ans'];

  sort($nums);

  if ($sorted_nums === $nums) {
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
	<title>Sort the numbers</title>
    <link href="css/games.css" rel="stylesheet" type="text/css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
	<div id="game-container">
		
		<h3>Sort all the given numbers in ascending order</h3>
		<ul>
            <?php foreach ($nums as $number): ?>
            <li><?php echo $number; ?></li>
            <?php endforeach; ?>
         </ul>
		<form id="game-form" >
			<label for="user_ans">Enter the numbers here separated by commas : </label>
            <br><br>
            <input type="text" id="user_ans" name="user_ans">
            <br><br><br>
			<input type="submit" value="Submit">
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




