<?php
include 'getData.php';
include 'rollDice.php';

$data = new getData();
echo $data->antal;







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



