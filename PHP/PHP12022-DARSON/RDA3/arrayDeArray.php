<?php
    //Criacao de array com indice padrao
    $notas = array();
    array_push($notas, 12, 50);
    array_push($notas, 13, 50);
    array_push($notas, 14, 50);
    array_push($notas, 15, 50);

    //impressao de valores de array
    for($i=0; $i < count($notas); $i++){
        echo $notas[$i] . "<br>";
    }

    //calcular a media de notas
    for($i=0; $i < count($notas); $i++){
        $soma = $notas[$i] + $soma;
    }
    $media = $soma/count($notas);
    echo $media . "<br>";

    //removendo um elemento do array
    array_pop($notas);

    //impressao de valores de array
    for($i=0; $i < count($notas); $i++){
        echo $notas[$i] . "<br>";
    }

?>