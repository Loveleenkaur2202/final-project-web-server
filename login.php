<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <link href="css/registerFormStyle.css" rel="stylesheet" type="text/css">

</head>

<body>
    <br /><br /><br /><br /><br />
    <?php
    include_once 'header.php';
    ?>
    
    <?php
    // Connect to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kidsGames";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username exists
    $sql = "SELECT * FROM player WHERE userName='$username'";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        echo "Username not found.";
        echo '<b><a href="main.php">Go To Home Page</a></b>';
    }

    // Check if password is correct
    $row = $result->fetch_assoc();
    $registrationOrder = $row['registrationOrder'];
    $sql = "SELECT * FROM authenticator WHERE registrationOrder='$registrationOrder'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $stored_password = $row['passCode'];
    if (password_verify($password, $stored_password)) {
        // Password is correct, set session variable
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['registrationOrder'] = $registrationOrder;
        header("Location: gameLevel1.php");
        exit();
    } else {
        // Password is incorrect
        echo "Incorrect password.";
        echo '<b><a href="main.php">Go To Home Page</a></b>';
    }

    $conn->close();
    ?>
    <br />
    
    <br /><br /><br /><br /><br />
    <?php
    include_once 'footer.php'
    ?>
</div>
</body>

</html>