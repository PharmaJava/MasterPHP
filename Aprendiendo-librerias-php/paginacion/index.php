<?php
require_once '../vendor/autoload.php';

//conexion BBDD
$conexion = new mysqli("localhost", "root", "", "notas_master");
$conexion->query("SET NAMES 'utf8'");

//Consulta a paginar
$consulta= $conexion->query("SELECT * FROM notas");
$numero_elementos= $consulta->num_rows;
$numero_elementos_pagina= 2;

$pagination= new Zebra_Pagination();

//Numero total elementos a paginar
$pagination->records($numero_elementos);

//Numero de elementos por pagina
$pagination->records_per_page($numero_elementos_pagina);

$page= $pagination->get_page();
$empieza_aqui= (($page-1)* $numero_elementos_pagina);
$sql= "SELECT * FROM notas LIMIT $empieza_aqui, $numero_elementos_pagina";

while($nota= $notas->fetch_object()){
    echo "<h1>{$nota->titulo}</h1>";
    echo "<h3>{$nota->descipcion}</h3> </h3>";

    
//     // Close connections
//     $conexion->close();
// }