<?php
    $a = 1;
    $b = 2;
    $c = -3;
    
    function delta($a, $b, $c) {
        $delta = (pow(2, $b)-4*$a*$c);
        return $delta;
    }

    echo "A = " . $a . "<br>";
    echo "B = " . $b . "<br>";
    echo "Delta = " . delta($a, $b, $c) . "<br>";

?>