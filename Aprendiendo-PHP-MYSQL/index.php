<?php
// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "phpmysql");

// Comprobar si la conexión es correcta
if (mysqli_connect_errno()) {
    echo "La conexión a la base de datos MySQL ha fallado: " . mysqli_connect_error();
} else {
    echo "La conexión a la base de datos MySQL es correcta";
}
echo "<br>";

// Consulta para configurar la codificación de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

// Consulta SELECT desde PHP
$query = mysqli_query($conexion, "SELECT * FROM notas");

// Verificar si la consulta SELECT se ejecutó correctamente
if (!$query) {
    echo "Error al ejecutar la consulta SELECT: " . mysqli_error($conexion);
} else {
    // Iterar sobre los resultados de la consulta
    while ($nota = mysqli_fetch_assoc($query)) {
        echo "<h2>" . $nota['titulo'] . "</h2>";
        echo $nota['descripcion'] . "<br>";
    }
}

echo "<br>";

// Insertar en la base de datos desde PHP
$sql = "INSERT INTO notas VALUES (null, 'Nota desde PHP', 'Esto es una nota de PHP', 'green')"; 
$insert = mysqli_query($conexion, $sql);

// Verificar si la inserción se realizó correctamente
if ($insert) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar datos: " . mysqli_error($conexion);
}
?>
