<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snake and ladder</title>
</head>
<body>
    <?php
    $playerAPosition = 0;
    define("NO_PLAY", 0);
    define("LADDER", 1);
    $diceCount = 0;
    echo "<h3>Player started intially with $playerAPosition position</h3>";
    $checkStatus = rand(0, 2);
   while($playerAPosition != 100){
    switch($checkStatus){
        case NO_PLAY:
            echo "<p>player will be at same position $playerAPosition</p>";
            break;
        case LADDER:
            $dice = rand(1, 6);
            echo "<p>player steped ladder by  $dice</p>";
            $playerAPosition = $playerAPosition + $dice;
             if($playerAPosition>100){
                 $playerAPosition = $playerAPosition-$dice;
                 echo "<p>current position of the player is $playerAPosition</p>";
             }
             else{
                 echo "<p>current position of the player is $playerAPosition</p>";
             }
             $diceCount++;  
            break;
        default:
            $dice = rand(1, 6);
            echo "<p>player step down by  $dice</P>";
            $playerAPosition = $playerAPosition - $dice;
            if($playerAPosition<0){
                $playerAPosition = 0;
                echo "<p>current position of the player is $playerAPosition</p>";
            }
            else{
                echo "<p>current position of the player is $playerAPosition</p>";
            }  
            $diceCount++;
    }
   }
   echo $diceCount;
    ?>
</body>
</html>