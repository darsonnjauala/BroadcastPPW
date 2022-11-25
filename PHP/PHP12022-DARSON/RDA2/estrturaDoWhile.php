<?php
    $in = 1;
    $soma = 0;
    do{
        $soma = $soma + $in;

        $in++;

    }while( $in<=10 );

    $media = $soma / 10;

    echo "Soma: " . $soma . "<br>" . "Media: " . $media;

?>