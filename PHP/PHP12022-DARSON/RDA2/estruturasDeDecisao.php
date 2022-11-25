<?php

    $a = 1;
    $b = 2;
    $c = 0;

    $delta = $b*$b-4*$a*$c;

    if ($delta > 0) {
        echo "Duas raizes diferentes: <br>";
        $x1 = (-$b + sqrt($delta))/2*$a;
        $x2 = (-$b - sqrt($delta))/2*$a;
        echo "x1: " . $x1 . " x2: " . $x2;
    }elseif($delta == 0) {
        echo "Duas raizes iguais: <br>";
        $x = -$b/2*$a;
        
        echo "x1 = x2 = " . $x;
    }else{
        echo "Nao existem raizes reais";
    }



?>