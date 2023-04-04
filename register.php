<?php
    include_once 'header.php';
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the input values
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];

    // Validate the input values
    $errors = [];
    if (empty($username)) {
        $errors[] = 'Please enter a username';
    } else {
        // Check if the username already exists in the database
        $conn = mysqli_connect('localhost', 'root', '', 'kidsGames');
        $result = mysqli_query($conn, "SELECT * FROM player WHERE userName='$username'");
        if (mysqli_num_rows($result) > 0) {
            $errors[] = 'Sorry, this username already exists. Please, choose another one.';
        }
    }

    if (empty($password)) {
        $errors[] = 'Please enter a password';
    }

    if ($password !== $confirmPassword) {
        $errors[] = 'Sorry, you entered 2 different passwords.';
    }

    if (empty($firstName)) {
        $errors[] = 'Please enter your first name';
    } else if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
        $errors[] = 'Sorry, your first name can only contain letters and spaces.';
    }

    if (empty($lastName)) {
        $errors[] = 'Please enter your last name';
    } else if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
        $errors[] = 'Sorry, your last name can only contain letters and spaces.';
    }

    // Insert the user data into the database
    if (empty($errors)) {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $registrationTime = date('Y-m-d H:i:s');
        $query = "INSERT INTO player (fName, lName, userName, registrationTime) VALUES ('$firstName', '$lastName', '$username', '$registrationTime')";
        mysqli_query($conn, $query);
        $playerId = mysqli_insert_id($conn);
        $query = "INSERT INTO authenticator (passCode, registrationOrder) VALUES ('$passwordHash', $playerId)";
        mysqli_query($conn, $query);

        echo "<center><br/><br/><br/>";
    
        echo '<b><a href="index.php">Success!<br/>Go to Login Form</a></b>';
        echo "</center><br/><br/><br/>";
    }
}
?>
<?php
    include_once 'footer.php';
?>