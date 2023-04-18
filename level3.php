<?php
// Generate 6 random numbers from 0 to 100
$numbers = [];
for ($i = 0; $i < 6; $i++) {
    $numbers[] = rand(0, 100);
}
// Save the numbers to a session variable
session_start();
$_SESSION['numbers'] = $numbers;
?>
<!DOCTYPE html>
<html>
<head>
    <?php
        include_once 'header.php';
        
       /*  if (!isset($_SESSION['level_won']) || $_SESSION['level_won'] !== true) {
          echo '<h2><a href="level2.php">Complete Level 2 to continue</a></h2>';
          exit; 
        } */
    ?>
    <title>Number Arrangement</title>
    <link href="css/games.css" rel="stylesheet" type="text/css">
    
</head>
<body>
    
    <h3>Arrange the numbers below in ascending order separated by commas</h3>
    <p id="numbers"><?php echo implode(', ', $numbers); ?></p>
    <form id="form" >

        <input type="numbers" id="input" /><br>
        <input type="Submit" id="submit">
    </form>
    
    <p id="result"></p>
    <script src="level3Script.js"></script>
    <?php
        include_once 'footer.php';
    ?>
</body>
</html>
