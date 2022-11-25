<?php
    $a = 10;
    $b = 20;
    $op = ".";

    switch($op){
        case '+':
            echo $a . " + " . $b . " = " . ($a+$b);
            break;
        case '-':
            echo $a . " - " . $b . " = " . ($a-$b);
            break;
        case '*':
            echo $a . " * " . $b . " = " . ($a*$b);
            break;
        case '/':
            echo $a . " / " . $b . " = " . ($a/$b);
            break;
        default: 
            echo "Operador Invalido!";
    }


    



?>