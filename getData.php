<?php
class getData {
    public $antal;
    
    function getData(){
        $antal = $_GET["dice"];
        return $antal;
    }
}
?>
