<?php
    $in = 1;
    $soma = 0;
    while( $in<=10 ) {
            $soma = $soma + $in;

            $in++;
        }

        $media = $soma / 10;

        echo "Soma: " . $soma . "<br>" . "Media: " . $media;

?>