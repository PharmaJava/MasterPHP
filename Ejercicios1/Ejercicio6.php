<?php
//Mostar una tabla de HTML con las tablas del 1 al 10

echo "<table border='1'> <tr>";//inicio de la tabla

echo "<tr>";// fila1 de celdas

    for($cabecera=1; $cabecera<=10; $cabecera++){

        echo "<td>Tabla del $cabecera </td>";

    }


echo "</tr>";// cierra1 de celdas

echo "<tr>";// fila2 de celdas

for ($i=1; $i<=10; $i++){
    echo "<td>";

    for ($x= 1; $x <=10; $x++){

        echo "$i x $x = " . ($i* $x). "<br>";
    }

    echo "</td>";
}

echo "<tr>";//cierre fila 2

echo "</table>";




?>