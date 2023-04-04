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
    // Generate 6 random alphabets between a and z
    $alphabets = array();
    for ($i = 0; $i < 6; $i++) {
        $alphabets[] = chr(rand(97, 122));
    }
    // Save the generated alphabets in session
    $_SESSION['alphabets'] = $alphabets;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if user input is valid
    $max = isset($_POST['max']) ? strtoupper($_POST['max']) : '';
    $min = isset($_POST['min']) ? strtoupper($_POST['min']) : '';
    if (!ctype_alpha($max) || !ctype_alpha($min)) {
        echo "Invalid input. Please enter valid alphabets.";
    } else {
        // Check if user input matches the maximum and minimum alphabets
        $alphabets = $_SESSION['alphabets'];
        $actual_max = max($alphabets);
        $actual_min = min($alphabets);
        if ($max == $actual_max && $min == $actual_min) {
            echo "Congratulations! You win!";
			$result = 'success';
            // Prompt the user to play again or end the session
            echo "<br><br>";
			echo '<a href="#">Play Again?</a><br/>';
            echo '<a href="gameLevel6.php">Go To Next Level</a><br/>';
            echo '<a href="main.php">Home Page</a><br/>';
			echo '<a href="main.php">End Session</a><br/>';
            session_destroy();
        } else {
			
            $lives--;
            $_SESSION['lives'] = $lives;
            if ($lives == 0) {
                echo "You lost. Better luck next time!";
                echo "The actual  maximum $actual_max and minimum  $actual_min";
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
    // Display the generated alphabets
    $alphabets = $_SESSION['alphabets'];
    foreach ($alphabets as $alphabet) {
        echo "<input type='text' name='alphabet[]' value='{$alphabet}' readonly>";
    }
    ?>
    <br><br>
    Max: <input type="text" name="max" required>
    Min: <input type="text" name="min" required>
    <br><br>
    <input type="submit" value="Submit">
</form>
<?php
    include_once 'footer.php';
?>