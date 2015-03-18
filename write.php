<?php
class write {
    
    
    public function skriv($itrolls){
//        var_dump($itrolls);
        echo "Antal sidor på tärnigen:".$itrolls["sides"][0]."";
        echo "Antal gånger den slogs:".$itrolls["times"][0]."";
        echo "Summan av tärningsslagen:".$itrolls["sum"][0]."";
        
        
    }
}


