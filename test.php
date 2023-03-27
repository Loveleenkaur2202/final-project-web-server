
    <?php
    // Establish database connection
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "kidsGames";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Query database for matching username and password
        $sql = "SELECT p.fName, p.lName, p.userName, a.passCode
                FROM player p
                INNER JOIN authenticator a ON p.registrationOrder = a.registrationOrder
                WHERE p.userName = '$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row["passCode"])) {
                // Login successful, redirect to home page
                header("Location: home.php");
            } else {
                // Incorrect password, prompt user to go to password modification form
                echo "Incorrect password. Please go to the password modification form.";
            }
        } else {
            // Username not found, prompt user to sign up
            echo "Username not found. Please sign up.";
        }
    }

    // Close database connection
    $conn->close();
    ?>

    <br>
    <a href="signup.php">Sign up</a><br>
    <a href="password_modification.php">Password modification</a>


    <?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "kidsGames");

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT p.fName, p.lName, p.userName, a.passCode FROM player p INNER JOIN authenticator a ON p.registrationOrder = a.registrationOrder WHERE p.userName='$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
	if (password_verify($password, $row['passCode'])) {
		$_SESSION['username'] = $row['userName'];
		header("Location: gameLevel1.php");
	} else {
		header("Location: passwordModificationForm.php");
	}
} else {
	echo "Username not found!";
}

mysqli_close($conn);
?>
