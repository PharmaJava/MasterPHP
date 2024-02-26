<?php

// Función para mostrar un array
function mostrarArray($numeros){
    $resultado = "";
    foreach ($numeros as $numero){
        $resultado .= $numero . "<br>";
    }
    return $resultado;
}

$numeros = array(11, 44, 55, 77, 23, 9, 97, 67);

echo "<h1>Recorrer y mostrar</h1>";
echo mostrarArray($numeros); // Llamada a la función para mostrar el array
echo "<br>";

// Ordenar el array y mostrarlo
echo "<h1>Ordenar y mostrar</h1>";
sort($numeros);
echo mostrarArray($numeros); // Llamada a la función para mostrar el array ordenado
echo "<br>";

// Mostrar la longitud del array
echo "<h1>Numero total de elementos</h1>";
echo count($numeros); // Utilizando la función count para obtener la longitud del array
echo "<br>";

// Búsqueda en el array
$busqueda = 55;
echo "<h1>Buscar en el array el número $busqueda</h1>";
$search = array_search($busqueda, $numeros);

if($search !== false){ // Verificamos si array_search devuelve un valor diferente de false
    echo "<h4>El número buscado existe en el array en el índice: $search</h4>";
} else {
    echo "No existe el número buscado";
}

echo "<br>";

?>
