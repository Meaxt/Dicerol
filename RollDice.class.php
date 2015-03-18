<?php
class RollDice{
    public $times;
    public $result;
    protected $sides;






    public function __construct($sides = 6) {
        $this->sides = $sides;
    }
    
    public function rollDice($times){
        $itrolls = array();
        for($i = 0; $i <$times; $i++){
            
        $result = rand(0, $this->sides);
        $itrolls["dice"][] = $result; 
               
    }
    $itrolls["sum"][] = array_sum($itrolls["dice"]); 
    $itrolls["sides"][] = $this->sides; 
    $itrolls["times"][] = $times;
    
    return $itrolls;
    }
}





