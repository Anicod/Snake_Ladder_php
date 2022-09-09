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
    define(NO_PLAY, 0);
    define(LADDER, 1);
    define(SNAKE, 2);
    echo "<h3>Player started intially with $playerAPosition position</h3>";
    $checkStatus = rand(0, 2);
    switch($checkStatus){
        case NO_PLAY:
            echo "player will be at same position $playerAPosition";
            break;
        case LADDER:
            $dice = rand(1, 6);
            $playerAposition = $playerAPosition + $dice;
            echo "player steped ladder by  $dice";
            echo "current position of the player is $playerAPosition";
            break;
        case SNAKE:
            $dice = rand(1, 6);
            $playerAposition = $playerAPosition - $dice;
            echo "player step down by  $dice";
            echo "current position of the player is $playerAPosition";
            break;
            
    }
    ?>
</body>
</html>