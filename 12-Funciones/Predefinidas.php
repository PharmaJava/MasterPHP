<?php


//Debuggear
$nombre= "Paco Perez";
var_dump($nombre);

echo "<br>";
//Fechas

echo date ('d-m-Y');
echo "<br>";

echo time();
echo "<br>";

//Matematicas
echo "Raiz Cuadrada de 10: " . sqrt(10);
echo "<br>";

echo "Numero aleatorio entre 10 y 40: " .rand(10,40);
echo "<br>";

echo "Numero pi: " .pi();
echo "<br>";

echo "Redonder: " .round(7.898234, 2);
echo "<br>";


//Mas funciones generales

echo gettype($nombre);
echo "<br>";

if (is_string($nombre)){
    echo "Esa variable es un string";

}

echo "<br>";
    if (is_float($nombre)){

    echo "la variable nombre no es un numero decimal";
    }
    echo "<br>";

    if (isset($edad)){
        echo "la variable existe";

    }else {
        echo "la variable no existe";
    }

    echo "<br>";

    //Limpiar espacios
    $frase= "     mi contenido   ";
    echo "$frase";
    echo "<br>";

    var_dump($frase);
    echo "<br>";


    var_dump(trim($frase));
    echo "<br>";

    //Eliminar variables
    $year= 2020;
    unset($year);
    echo "<br>";

    //Comprobar variable vacia
    $texto= "";

    if (empty($texto)){
        echo "la variable texto esta vacia";
    }else{
        echo "Tiene contenido";
    }
    echo "<br>";

    //contar caracteres de un string

    $cadena= "12345";
    echo strlen($cadena);
    echo "<br>";

    //Encontrar caracter
    $frase= "La vida es bella";
    echo strpos($frase, "vida");
    echo "<br>";

    //Reemplazar palabras de un string

    $frase= str_replace("vida", "moto", $frase);
    echo $frase;
    echo "<br>";

    //Mayusculas y minisculas
    echo strtolower($frase);
    echo "<br>";
    echo strtoupper($frase);
    echo "<br>";






?>