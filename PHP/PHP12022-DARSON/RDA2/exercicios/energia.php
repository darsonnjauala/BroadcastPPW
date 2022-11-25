<?php 

    $salarioMin = 5500;
    $qtdKw = 75.5;

    $valorKw = $salarioMin/5;

    $valorEnerg = $valorKw * $qtdKw;
    $valorEnergDesc = $valorEnerg - ($valorEnerg * 15 /100);

    echo "Salario Minimo: " . $salarioMin . " <br> ";
    echo "Energia gasta: " . $qtdKw . " <br> ";
    echo "Valor Kw: " . $valorKw . " <br> ";
    echo "Valor Energia Mensal com Desconto de 15%: " . $valorEnerg . " <br> ";
    echo "Valor Energia Mensal: " . $valorEnergDesc . " <br> ";


?>

