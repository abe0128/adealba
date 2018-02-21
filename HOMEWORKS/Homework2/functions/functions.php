<?php

function play()
{
    for($i = 0; $i < 1; $i++)
        {
            $picture = array("ussVoyager", "ussEnterprise", "ussDefiant", "ussVesta", "ussGalaxy", "ussTitan", "ussTheurgy", "kdfVorcha", "kdfD6", "kdfD7");
            $x = array_rand($picture);
            displayPicture($x);
        }
}

function displayPicture($randomValue)
{
    switch($randomValue)
        {
            case 0: $picture = "ussVoyager";
                    break;
            case 1: $picture = "ussEnterprise";
                    break;
            case 2: $picture = "ussDefiant";
                    break;
            case 3: $picture = "ussVesta";
                    break;
            case 4: $picture = "ussGalaxy";
                    break;
            case 5: $picture = "ussTitan";
                    break;
            case 6: $picture = "ussTheurgy";
                    break;
            case 7: $picture = "kdfVorcha";
                    break;
            case 8: $picture = "kdfD6";
                    break;
            case 9: $picture = "kdfD7";
                    break;
        }
    echo "<img src='img/$picture.jpg' alt='$picture' tittle= '$picture' width = '400' height = '200' />";
}

// function displayBackground($randomValue2)
// {
//     for($j = 0; $j < 1; $j++)
//     {
//         $Backpicture = array("theFederation", "KlingonEmpire");
//         $y = array_rand($Backpicture);
//         displayBackground($y);
//     }
    
//     switch($randomValue2)
//     {
//         case 0: $Backpicture = "theFederation";
//                 break;
//         case 1: $Backpicture = "KlingonEmpire";
//                 break;
//     }
//     echo "<img src='img/$Backpicture.jpg' alt= '$Backpicture' title= '$Backpicture' />";
// }

?>