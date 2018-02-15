<?php
    
    function getRandomColor()
    {
        
    }


?>






<!DOCTYPE html>
<html>
    <head>
        <title> Randon Color </title>
        
        <style>
            
            body
            {
                
                <?php
                
                    $red = rand(0,255);
                    $green = rand(0,255);
                    $blue = rand(0,255);
                    $alpha = rand(0,1);
                    echo "background-color: rgba($red, $green, $blue, $alpha)";
                
                ?>
                
            }
        </style>
        
    </head>
    <body>
        
        <h1> WELCOME! </h1>
        
        <h2> RANDOM BACKGROUND COLOR! </h2>
        
        
    </body>
    
</html>