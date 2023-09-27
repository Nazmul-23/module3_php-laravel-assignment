<?php 

$text= "The quick brown fox jumps over the lazy dog.";

function modifiedText($text){
$text=strtolower($text);
$text2=str_replace("brown","red",$text);
echo $text."\n";
echo $text2;

}

modifiedText($text);




?>