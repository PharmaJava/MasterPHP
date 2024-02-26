<?php

$cantantes = ['2pac', 'Drake', 'Jennifer Lopez'];
$numeros= [1,2,3,4,5,6,7,8,9];
asort($cantantes);
var_dump($cantantes);
echo "<br>";


sort($cantantes);
var_dump($cantantes);
echo "<br>";

//Añadir elementos
$cantantes[] = "Natos";
var_dump($cantantes);
echo "<br>";

array_push ($cantantes, "Waor"); //añade elementos
var_dump($cantantes);
echo "<br>";

array_pop($cantantes); //elimina elementos
unset($cantantes[2]);
var_dump($cantantes);
echo "<br>";

//Aleatorio
echo $indice= array_rand($cantantes);
echo "<br>";

echo $cantantes[$indice];
echo "<br>";

//dar la vuelta
var_dump(array_reverse($numeros));
echo "<br>";

//buscar

$resultado= array_search('Drake', $cantantes);
var_dump($resultado);
echo "<br>";


//Contar numero de elementos
echo count($cantantes);
echo "<br>";

echo sizeof($cantantes);
echo "<br>";



?>