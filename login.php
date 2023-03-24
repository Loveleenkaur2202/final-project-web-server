<!DOCTYPE html>
<html>

<head>
    <title>Password Modification Form</title>
    <link href="css/registerFormStyle.css" rel="stylesheet" type="text/css">

</head>

<body>
    <br /><br /><br /><br /><br />
    <?php
    include_once 'header.php';
    ?><?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Welcome!";
    }
    ?>
<br />
    <b><a href="main.php">Go To Home Page</a></b>
    <br /><br /><br /><br /><br />
    <?php
    include_once 'footer.php'
    ?>
</div>
</body>

</html>