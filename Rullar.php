<?php
include 'getData.php';
include 'RollDice.class.php';
include 'write.php';

$data = new getData();
$dice1 = new RollDice($data->sidor);
$diceRolled = $dice1->rollDice($data->antal);
var_dump($diceRolled);
$stat = new write();
$skriv = $stat->skriv($diceRolled);
//echo $data->antal;







?>

<!DOCTYPE html>
<html>
    <head>
        <title>dice</title>
        <meta charset="utf8">
    </head>
    <body>
        <form action="" method="GET">
            <label for="antal">Antal</label><input tyoe="text" name="antal" id="antal">
            <br>
            <label for="sidor">Sidor</label><input type="text" name="sidor" id="sidor">
            <br>
            <input type="submit" value="skicka">
        </form>
        
    </body>
</html>



