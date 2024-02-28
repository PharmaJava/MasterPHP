<?php

//variable global
$frase= "Ni los genios son tan genios, ni los mediocres tan mediocres";

echo $frase;

function holaMundo(){

    global $frase;

    echo "<h1>$frase</h1>";
    $year= 2024;

    echo "<h1>$year</h1>";
    return $year;

}

echo holaMundo();
echo "<br>";

//funciones variables

function buenasDias(){
    return "Hola, Buenos dias";
}

function buenasTardes(){
    return "Hola, Buenas Tardes";
}

function buenasNoches(){
    return "Hola, Buenas Noches";
}


$horario= $_GET['horario'];

$miFuncion= "buenas" . $horario;

echo $miFuncion();

?>