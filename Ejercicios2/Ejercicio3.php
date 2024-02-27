<?php

$texto="";

if(empty($texto)){
    $texto= "Hola, rellenamos";
    $textoMayus= strtoupper($texto);
    echo "<strong>$textoMayus</strong>";
}else{
    echo "La variable tiene este contenido dentro: ".$texto;
}



?>