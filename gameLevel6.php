<?php
    include_once 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Game Level 5</title>
    <link href="css/gamesLevelStyle.css" rel="stylesheet" type="text/css">
</head>
<body>
    <br/><br/>
	<h1>Game Level 6: Identify Maximum and Minimum Number</h1>
	<p>A set of 6 different numbers generated randomly is shown below. Write the maximum and minimum from the order 0 to 100.</p>
	<form action="level6.php" method="post">
		<?php
			$numbers = [];
            for($i = 0; $i<6; $i++){
                $numbers[] = rand(0,100);
            }
            shuffle($numbers);
			$selectedNumbers = array_slice($numbers, 0, 6);
			echo "<p>" . implode(" ", $numbers) . "</p>";
		?>
		<label for="maximumNumber">Maximum Number:</label>
		<input type="text" name="maximumNumber" id="maximumNumber" required>
        <br>
		<label for="minimumNumber">Minimum Number:</label>
		<input type="text" name="minimumNumber" id="minimumNumber" required>
        <br>
		<input type="submit" value="Submit">
	</form>
    <br/><br/>
</body>
</html>

<?php
    include_once 'footer.php';
?>
