<?php
class rollDice{
    public $times;
    public $result;
    
    function rollDice(){
        for($i = 0; $i <$times; $i++){
        $result = rand(0,6);
        return $result;
    }
    }
}



?>

