#!/usr/bin/php
<?php
//Pas de gestion d'erreurs hormis le nbr de paramètres fournis.

if ($argc != 4)
    echo "Incorrect parameters\n";
else{
    $val1 = intval($argv[1]);
    $val2 = intval($argv[3]);
    
    $i = trim($argv[2]);
    switch($i){
        case "+":
            $res = $val1 + $val2;
            print $res;
            break;
        case "-":
            $res = $val1 - $val2;
            print $res;
            break ;
        case "*":
            $res = $val1 * $val2;
            print $res;
            break ;
        case "/":
            $res = $val1 / $val2;
            print $res;
            break ;
        case "%":
            $res = $val1 % $val2;
            print $res;
            break ;
        }
    echo "\n";
}
?>