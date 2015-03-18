<?php
class getData {
    public $antal;
    public $sidor;
    
    function __construct(){

        
        
        $this->antal = (int) filter_input(INPUT_GET, 'sidor', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->sidor = (int) filter_input(INPUT_GET, 'antal', FILTER_SANITIZE_SPECIAL_CHARS);
     
    }
}

