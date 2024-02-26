<?php

$peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');
var_dump($peliculas);
echo "<br>";

$cantantes = ['2pac', 'Drake', 'Jennifer Lopez'];
echo "<br>";

echo $peliculas[0];
echo "<br>";

echo $cantantes[0]; 
echo "<br>";

echo "<h1>Listado de peliculas</h1>";
echo "<ul>";

for($i=0; $i<count($peliculas); $i++){
    echo "<li>". $peliculas[$i] . "</li>";
}
echo "</ul>";
echo "<br>";

//recorrer con Foreach
echo "<h1>Listado de Cantantes</h1>";

echo "<ul>";

foreach($cantantes as $cantante){
    echo "<li>".$cantante. "</li>";
}
echo "</ul>";
echo "<br>";


//array asociativo
$personas= array(
    'nombre'=>'Paco',
    'apellidos'=> 'Perez',
    'web'=> 'udemy.com'
);

var_dump($personas);
echo "<br>";


//array multidimensional

$contactos = array(
    array(
        'nombre' => 'Antonio',
        'email' => 'antonio@antonio.com'
    ),
    array(
        'nombre' => 'Luis',
        'email' => 'luis@antonio.com'
    ),
    array(
        'nombre' => 'Salvador',
        'email' => 'salvador@antonio.com'
    )
);
echo "<br>";
echo $contactos[1]['nombre'];
echo "<br>";

foreach($contactos as $key => $contacto){
    echo $contacto['nombre'] . "<br>"; // Imprime el nombre de cada contacto en una nueva línea
}
?>
