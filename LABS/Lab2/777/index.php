<!DOCTYPE html>
<html>
    <head>
        <title> Lab 2: 777 Slot Machine </title>
        <meta charset="utf-8"/>
    </head>
    <body>
        
        <?php
        
        function displaySymbol($randomValue)
        {
            $randomValue = rand(0,2);
            echo $randomValue;
            
            
            if($randomValue == 0)
            {
                $symbol = "seven";
            }
            else if($randomValue == 1)
            {
                $symbol = "orange";
            }
            else
            {
                $symbol = "lemon";
            }
            
            echo "<img src='img/$symbol.png' alt='$symbol' tittle='$symbol' width='70'/>";
        }
        
        
        function displayPoints($randomValue1, $randomValue2, $randomValue3)
        {
            echo "<div id='output'>";
            if($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3)
            {
                switch ($randomValue1)
                {
                    case 0: $totalPoints = 1000;
                        echo "<h1>Jackpot!</h1";
                        break;
                    case 1: $totalPoints = 500;
                        break;
                    case 2: $totalPoints = 250;
                        break;
                }
                echo "<h2>You won $totalPoints points!</h2";
            }
            else
            {
                echo "<h3> Try Again! </h3>";
            }
            echo "</div>";
        }
        
        
        
        $randomValue1 = rand(0,2);
        displaySymbol($randomValue1);
        $randomValue2 = rand(0,2);
        displaySymbol($randomValue2);
        $randomValue3 = rand(0,2);
        displaySymbol($randomValue3);
        
        echo "<br /><hr > Values: $randomValue1 $randomValue2 $randomValue3";
        
        ?>
    </body>
</html>