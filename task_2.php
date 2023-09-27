<?php  

$numbers=range(1,10);


function removeEvenNumber($numberArray){

    $result=array();

    foreach($numberArray as $number){
    if($number%2 !=0){
        $result[]=$number;
    }
        
    }

    print_r($result);
}

removeEvenNumber($numbers)

?>