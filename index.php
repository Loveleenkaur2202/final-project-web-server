<!DOCTYPE html>
<html>
    <head>
            <Title>User Login</Title>
            <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
    
        <center>
        
        <form action="#" method="post">
        <label for="usrname">Username:</label>
        <br><br>
        <input type="text" name="usrname" id="usrname">
        <br><br>
        <label for="paswd">Password:</label>
        <br><br>
        <input type="text" name="paswd" id="paswd">
        <br><br>
        <input type="submit" name= "Connect" value="Connect" >
        <br>
        <input type="submit" name= "Sign-Up" value = "Sign-Up" height="50" width="50">
    
    
    
    
        </center>
    
        <?php

            if(isset($_POST["Connect"])){
             $username = $_POST = ["usrname"];
                $password = $_POST["paswd"];
                if(!($username="" and $password="")){

                header("Location:Index.php");
                exit();
                }
                

            }
            elseif(isset($_POST["Sign-Up"])){

            }
        

        
    
    
        ?>
        
        <div class="error-message">

        </div>



    </form>
    </body>
</html>