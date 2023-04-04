<?php
    include_once 'header.php';
?>

<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kidsGames";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the database connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$lives = isset($_SESSION['lives']) ? $_SESSION['lives'] : 6;

if ($lives == 6) {
    // Generate 6 random numbers between 0 and 100
    $numbers = array();
    for ($i = 0; $i < 6; $i++) {
        $numbers[] = rand(0, 100);
    }
    // Save the generated numbers in session
    $_SESSION['numbers'] = $numbers;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if user input is valid
    $max = isset($_POST['max']) ? intval($_POST['max']) : -1;
    $min = isset($_POST['min']) ? intval($_POST['min']) : -1;
    if ($max == -1 || $min == -1 || $max <= $min || $max > 100 || $min < 0) {
        echo "Invalid input. Please enter valid numbers.";
    } else {
        // Check if user input matches the maximum and minimum numbers
        $numbers = $_SESSION['numbers'];
        $actual_max = max($numbers);
        $actual_min = min($numbers);
        if ($max == $actual_max && $min == $actual_min) {
            echo "Congratulations! You win!";
			$result = 'success';
            // Prompt the user to play again or end the session
            echo "<br><br>";
			echo '<a href="#">Play Again?</a><br/>';
            echo '<a href="main.php">Home Page</a><br/>';
			echo '<a href="main.php">End Session</a><br/>';
            session_destroy();
        } else {
			
            $lives--;
            $_SESSION['lives'] = $lives;
            if ($lives == 0) {
                echo "You lost. Better luck next time!";
                // Prompt the user to play again or end the session
                echo "<br><br>";
                echo '<a href="#">Play Again?</a><br>';
            	echo '<a href="main.php">Home Page</a><br>';
				echo '<a href="main.php">End Session</a><br>';
                session_destroy();
				$result = "failure";
            } else {
                echo "Incorrect answer. You have {$lives} lives left.";
				$result = 'incomplete';
			}
        }
    }
$sql = "INSERT INTO score (scoreTime, result, livesUsed, registrationOrder) VALUES (NOW(), '$result', '{$_SESSION['lives']}', (SELECT registrationOrder FROM player WHERE userName='{$_SESSION['username']}'))";
if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

// Close the database connection
$conn->close();
?>
<form method="post">
    <?php
    // Display the generated numbers
    $numbers = $_SESSION['numbers'];
    foreach ($numbers as $number) {
        echo "<input type='text' name='number[]' value='{$number}' readonly>";
    }
    ?>
    <br><br>
    Max: <input type="number" name="max" required>
    Min: <input type="number" name="min" required>
    <br><br>
    <input type="submit" value="Submit">
</form>
<?php
    include_once 'footer.php';
?>