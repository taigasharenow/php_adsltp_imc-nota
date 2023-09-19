<?php

    function convertNumero($r) {
        $t = str_replace(",", ".", $r);
        $r = floatval($t);
        return $r;
    }

    $valor1 = $_POST["altura"];
    $valor2 = $_POST["peso"];

    $alt = convertNumero($valor1);
    $pes = convertNumero($valor2);

    $imc = $pes / pow($alt, 2);
    $imc = number_format($imc, 2, ".", "");

    if ($imc < 17) {
        echo "Muito abaixo do peso <br>";
    } elseif ($imc < 18.5) {
        echo "Abaixo do peso <br>";
    } elseif ($imc < 25) {
        echo "Peso normal <br>";
    } elseif ($imc < 30) {
        echo "Acima do peso <br>";
    } elseif ($imc < 35) {
        echo "Obesidade I <br>";
    } elseif ($imc < 40) {
        echo "Obesidade II <br>";
    } else {
        echo "Obesidade III <br>";
    }

    echo $imc . "<br>";
    echo "<a href='imc.html'>RETORNAR</a>";

?>