<?php

session_start();

if(!isset($_SESSION['cart'])) {
    
    $_SESSION['cart'] = array();
}


?>

<html>
    <head>
        <title>GameStahp</title>
        <meta charset="utf-8"/>
        <style>
            @import url(css/styles.css);
        </style>
        <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    </head>
    <body class="home">
         <h1><strong><img src= "img/controller3.png"> GameStahp <img src= "img/controller3.png"></h1></strong>
         <form method="POST" action="loginProcess.php">
            <div class="login">
                <label id="label1">
                    Username:
                </label>
                
                <input type="text" name="username" /> <br />
                
                <label id="label2">
                    Password:
                </label>
                
                <input type="password" name="password"/> <br />
                
                <input type="submit" name="submitForm" value="Login!" />
            </div>
        </form>
        
        <div class="box">
            <div class="form">
            <h3>Home</h3>
            <!--<hr width="60%"/>-->
            
                <form action="ConsolePage.php">
                    <input type="submit" value="Console">
                </form>
                
                <form action="PCPage.php">
                    <input type="submit" value="PC">
                </form>
                
                <form action="MobilePage.php">
                    <input type="submit" value="Mobile">
                </form>
                
            </div>
           <!-- <div id="box2">
            
            </div>-->
        </div>
        
        
    </body>
</html>