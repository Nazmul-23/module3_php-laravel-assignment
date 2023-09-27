<?php 

$grades=array(85,92,78,88,95);

function sortGrades($grade){
    rsort($grade);
    print_r($grade);
}

sortGrades($grades);




?>