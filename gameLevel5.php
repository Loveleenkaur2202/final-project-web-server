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
	<h1>Game Level 5: Identify First and Last Letters</h1>
	<p>A set of 6 different letters generated randomly is shown below. Write the first and last letters from the order a to z.</p>
	<form action="level5.php" method="post">
		<?php
			$letters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
			shuffle($letters);
			$selected_letters = array_slice($letters, 0, 6);
			echo "<p>" . implode(" ", $selected_letters) . "</p>";
		?>
		<label for="firstLetter">First letter:</label>
		<input type="text" name="firstLetter" id="firstLetter" required>
        <br>
		<label for="lastLetter">Last letter:</label>
		<input type="text" name="lastLetter" id="lastLetter" required>
        <br>
		<input type="submit" value="Submit">
	</form>
    <br/><br/>
</body>
</html>

<?php
    include_once 'footer.php';
?>
