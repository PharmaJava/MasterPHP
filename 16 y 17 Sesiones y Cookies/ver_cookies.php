<?php

// Para mostrar el valor de cookies => $_COOKIE, es una var superglobal

if (isset($_COOKIE['micookie'])) {
    echo "<h1>" . $_COOKIE['micookie'] . "</h1>";
} else {
    echo "No existe la cookie" ."<br>";
}

if(isset($_COOKIE['oneyear'])){
    echo "<h1>" . $_COOKIE['oneyear'] . "</h1>";
} else {
    echo "No existe la cookie". "<br>";  
}

?>
<br>
<a href="CrearCookies.php">Crear las galletas</a>