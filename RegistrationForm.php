<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/registerFormStyle.css" rel="stylesheet" type="text/css">
    <title>Register</title>
</head>
<body>
<?php
    include_once 'header.php';
?>

<br/>
    <center>
    <h3>Sign-Up</h3>
    </center>
    <form action="register.php" method="post">
      <div>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
    </div>
    <div>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    </div>
    <div>
      <label for="confirmPassword">Confirm Password:</label>
      <input type="password" id="confirmPassword" name="confirmPassword" required>
    </div>
    <div>
      <label for="firstName">First Name:</label>
      <input type="text" id="firstName" name="firstName" required>
    </div>
    <div>
      <label for="lastName">Last Name:</label>
      <input type="text" id="lastName" name="lastName" required>
    </div>
    <div>
        <label for="agree">
            <input type="checkbox" name="agree" id="agree" value="yes"/> I agree with the
            <a href="#" title="term of services">term of services</a>
            </label>
    </div>
    <div>
      <input type="submit" value="Create" name="create">
      <a href="RegistrationForm.php"><input type="button" value="signUp"></a>
    </div>
        
        
    </form>

<?php
    include_once 'footer.php';
?>
</body>
</html>