<!DOCTYPE html>
<html>
    <head>
        <title> STAR TREK SHIPS </title>
        <meta charset="utf-8" />
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        
        <style>
            body
            {
                background-image: url("img/theFederation.jpg"); background-size: 100%;
            }
        </style>
    
    </head>
    <body>
        
        
        <header id="header"> STAR TREK SHIPS <br> RANDOM SHIP GENERATOR </header>
        
        <main>
            <figure id="STCaptains">
                <img src="img/StarTrekCaptains.jpg" length = "800" width = "800" alt="StarTrekCaptains" />
            </figure>
            
            <?php
                include 'functions/functions.php';
                play();
                //displayBackground();
            ?>
            <br>
            <br>
            <form>
                <input class="button" type="submit" value="Engage!"/>
            </form>
        </main>
        <footer>
            <hr>
            <figure id="logo">
                <img src="img/CSUMB_logo.png" alt="CSUMB_logo"/>
            </figure>
            
            Internet Programming 336. 2018&copy; De Alba <br />
            <strong>Disclaimer:</strong> The information in this webpage is fictious. <br />
            It is used for academic purposes only.
        </footer>
    </body>
</html>