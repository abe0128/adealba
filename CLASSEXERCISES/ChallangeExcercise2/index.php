<!DOCTYPE html>
<html>
    
    
    <head>
        <title>Card Game</title>
        <meta charset="utf-8" />
    </head>
    
    <body>
    
        <h1><b>Random Card Game</b></h1>    
        <h5>Computer</h5>
        <h6>Human</h6>
        
        <table>
            <tr /tr>
        </table>
        
        
        
        <?php
        
            for($i = 0; $i < 2; $i++)
            {
                ${"randomValue" . $i } = rand(0,4);
                displaySymbol(${"randomValue" . $i} );
            }
            
            
            
        function displaySymbol($randomValue)
        {
            
            for($ii = 0; $ii < 4; $ii++)
            {
                ${"cardSuit" . $ii } = rand(0,4);
            }
            
             switch($cardSuit)
            {
                case 0: $cardSuit = "clubs";
                break;
                
                case 1: $cardSuit = "diamonds";
                break;
                
                case 2: $cardSuit = "hearts";
                break;
                
                case 3: $cardSuit = "spades";
                break;
                
            }
            
            switch($randomValue)
            {
            
                case 0: $symbol = "jack";
                        break;
                        
                case 1: $symbol = "queen";
                        break;
                        
                case 2: $symbol = "ace";
                        break;
                        
                case 3: $symbol = "ten";
                        break;
                        
                case 4: $symbol = "king";
                        
                        break;
            }
        echo "<img src= 'img/cards/$cardSuit/$symbol.png' alt='$symbol' title = 'symbol' >";
        }
        
        ?>
        
        
        
        
        
        
        
        
        
        
    </body>
    
    
    
</html>