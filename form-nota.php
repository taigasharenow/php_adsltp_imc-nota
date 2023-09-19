<?php

    $n1 = $_POST["nota1"];
    $n2 = $_POST["nota2"];

    if ($n1 && $n2 == null) {
        $n1 ; $n2 = 0;
    }

    $med = ($n1 + $n2) / 2;

    echo "A nota 1 é " . $_POST["nota1"] . "<br>";
    echo "A nota 2 é " . $_POST["nota2"] . "<br>";
    echo "A media é " . $med;

    if ($med >= 6 ) {
        echo '<h2 style="color:green"> Aprovado </h2>';
    } elseif ($med >= 2) {
        echo '<h2 style="color:orange"> Exame Final </h2>';
    } else {
        echo '<h2 style="color:red"> Reprovado </h2>';
    }

    echo "<a href='nota.html'>RETORNAR</a>"

?>