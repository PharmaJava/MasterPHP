<?php

    //Imprimir los cuadrados de los 40 primeros numeros

    $contador= 0;

    while ($contador <=40){

        $cuadrado= $contador* $contador;
        echo "<h3>El cuadrado de $contador es $cuadrado</h3>";

        $contador ++;


    }

    for ($contador = 0; $contador <=40; $contador++){
        $cuadrado= $contador* $contador;
        echo "<h3>El cuadrado de $contador es $cuadrado</h3>";

    }

?>