<?php
function generatePassword($length) {
    
    $lowercase = 'abcdekduidnxislsosncizklxyz';
    $uppercase = 'ABCISDJIJFIJDIJDSPPLSDKXZMTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    $characters = $lowercase . $uppercase . $numbers . $specialChars;
    $totalChars = strlen($characters);
    
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        
        $random = mt_rand(0, $totalChars - 1);
        $password .= $characters[$random];
    }
    return $password;
}

$password = generatePassword(12);
echo $password;
?>