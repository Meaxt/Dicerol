<?php
class rollDice{
    public $times;
    public $result;
    protected $sides;






    public function __construct($sides = 6) {
        $this->sides = $sides;
    }
    
    function rollDice(){
        for($i = 0; $i <$times; $i++){
        $result = rand(0,6);
        return $result;
    }
    }
}



?>

