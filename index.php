<!DOCTYPE html>
<html>
    <head>
            <Title>User Login</Title>
            <link href="css/loginStyle.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <?php
    include_once 'header.php';
    ?>
    <br/>
    <center>
    <h3>Login</h3>
    </center>
        <form method="post" action="login.php">
        
            <label for="usrname">Username:</label>
            <input type="text" name="username" id="username">
            
            <label for="password">Password:</label>
            <input type="text" name="password" id="password">
            
            <input type="submit" name= "Connect" value="Connect">
            <a href="RegistrationForm.php"><input type="button" value="signUp"></a>
        
            <div class="error-message">

            </div>



    </form>
    <?php
    include_once 'footer.php';
?>
    </body>
</html>