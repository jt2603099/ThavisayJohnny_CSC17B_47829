<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Roll a Dice X times</title>
        <?php include './Dice.php'; ?>
    </head>
    
    <body>
        <?php
        $numOfRolls = 6;
        $Box = array();
        for ($i = 0; $i < $numOfRolls; $i++) {
            $Box[$i] = new Dice($i);
            $Box[$i]->toHTML();
        }
        ?>
    </body>
</html>