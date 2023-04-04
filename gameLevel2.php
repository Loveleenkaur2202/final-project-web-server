<?php
    include_once 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Game Level 2</title>
    <link href="css/gamesLevelStyle.css" rel="stylesheet" type="text/css">
</head>
<body>
    <br/><br/>
	<center><h1>Game Level 2: Place numbers in descending order </h1></center>
	<form action="level1.php" method="post">
		<?php
			$letters = range('A','Z'); 
            $random_letters = array_rand($letters, 6);
            shuffle($random_letters);
		?>
		<label for="letters">Please sort these letters in descending order:</label>
        <?php foreach ($random_letters as $letters)?><br>
		<input type="text" name="letters[]" maxlength="1" value="<?php echo $letters; ?>" style="text-transform: lowercase;">
        <br>
        <br>
		<center><input type="submit" value="Submit"></center>
	</form>
    <br/><br/>
</body>
</html>
<?php
    include_once 'footer.php';
?>
