<?php
    $a = 1;
    $b = 2;
    $c = 1;
    $delta = (pow(2, $b)-4*$a*$c);

    function equacaoQuadratica($a, $b, $delta){
        $x1 = (-$b-sqrt($delta))/(2*$a);
        $x2 = (-$b+sqrt($delta))/(2*$a);

        echo "X1 = " . $x1 . "<br>";
        echo "X2 = " . $x2 . "<br>";

    }

?>