<?php

$array = ["letters", "numbers"];
$letters = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
$numbers = ["1", "2","3", "4", "5", "6","7", "8", "9"];

function makePassword() {
    
    $password = array();
    for($i = 0; $i < rand(5, 10); $i++ ) {
        
        
        $random = count($letters);
        
        $x = rand(0,$random);
        $password[] = $letters[$x]; 
        
    }
    print_r($password);
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <?php makePassword() ?>
    </body>
</html>