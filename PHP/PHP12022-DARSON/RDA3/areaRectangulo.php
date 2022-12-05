<?php
    function areaRectangulo(){
        $largura=10;
        $comprimento=20;
        echo ("<h1> AREA DO RECTAMGULO</h1> ");
        echo ("<b> largura = </b>". $largura ."<br>");
        echo ("<Strong> comprimento=</Strong>" . $comprimento . "<br>");

        $area=$largura*$comprimento;
        return $area;

    }
    $area= areaRectangulo();

    echo "Area: ". $area;
?>