<!DOCTYPE html> 
<html>
    <head>
        <title>
            Final Project Web Development
        </title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="Page">
            
            <header>
                <h1>
                    Welcome to Netters!
                    
                </h1>
                
                <nav>
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="">LOGIN</a></li>
                        <li><a href="">REGISTER</a></li>
                        <li><a href="">HISTORY</a></li>
                      
                    </ul>
                </nav>
            </header>
           
                <div id="content">
                    <article>
                        <figure>
                            <img src = "images/logo.jpg" alt = "game logo">
                            <figcaption>Logo of the game</figcaption>
                        </figure>
                        <hgroup>
                            <h2>What is Netters?</h2>
                            <h3>The game you are looking for!</h3>
                        </hgroup>
                        <p>
                           We are Netters which adorns your life.We offer
                           fun games with 6 level and 6 lives a session in which
                            you play with letters and numbers.
                            <br/>Plus we offer free games.So just log in and let the fun begin

                        </p>
                    </article>
                    <article>
                        <figure>
                            <img src = "images/team.jpg" alt = "Staff and client">
                            <figcaption>Our true smile</figcaption>
                    </figure>
                    <hgroup>
                        <h2>Why Choose Us?</h2>
                        <h3>Because we are the best!</h3>
                    </hgroup>
                    <p> 
                    Our experience is the power that allows us to provide you 
                    appropriate services that will help you to sharpen your brain. We 
                    have: 
                    <ul>
                            <li> More than 40 years of experience</li>
                            <li>Almost 50 certified professional members</li>
                            <li>Services in more than 10 languages</li>
                            <li>Free of cost</li>
                    </ul>
                    Do not hesitate to choose us!
                    </p>
                    </article>
                </div>
            
            <aside>
                <section>
                    <h2>Know your Stats</h2>
                    <br /><a href="">Check games played</a>
                    <br /><a href="">Check games won</a>
                    <br /><a href="">Check games lost</a>
                    
                </section>
                <section>
                    <h2>Contact Us</h2>
                    <p class="address">
                        <br /><a href="">Netters</a>
                        <br /><a href="">Have Questions?</a>
                        <br /><a href="">Talk with the developers</a>
                        <br /><a href="">Want to join?Click Here!</a>
                    </p>
                </section>
            </aside>
            
            <footer>
                © 2023 - <?php echo date("Y");
                echo "<br/>Developed by <br/>Hebert Pierre Canel<br/>RishabhSareen<br/>Loveleen Kaur"
                ?>
                
            </footer>
            
        </div>
    </body>
</html> 