<?php

$cards = array("ace","one", 2);
//print_r($cards); //for debuging purposes, shows all elements in array

//echo $cards[1];

$cards[] = "jack"; //adds new element at the end of the array
array_push($cards, "queen", "king"); //adds new values to the end of the array

$cards[2] = "ten"; // replacess the value 2 with ten

//print_r($cards);

//displayCard($cards[3]);

print_r($cards);
echo "<hr>";
$lastCard = array_pop($cards); //retrieves and REMOVES  the last item in the array
displayCard($lastCard);
echo "<hr>";
print_r($cards);

unset($cards[1]); //removes element from array
echo "<hr>";
print_r($cards);

$cards = array_values($cards); //re-indexes array
echo "<hr";
print_r($cards);

shuffle($cards);
echo"<hr>";
print_r($cards);
echo"<hr>";
$randomIndex = rand(0,count($cards)-1); //getting a random index
displayCard($cards[$randomIndex]);
echo"<hr>";
$randomIndex = array_rand($cards); // getting random index too
displayCard($cards[$randomIndex]);


function displayCard($card)
{
    global $cards; //using variable that is outside the function
    echo "<img src= '../ChallangeExcercise2/img/cards/clubs/$card.png' />";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        
    </body>
</html>