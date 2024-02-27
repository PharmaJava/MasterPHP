<?php

    //Inciar sesion

    session_start();

    //variable local
    $variable_normal= "Soy una cadena de texto";

    //Variable de sesion
    $_SESSION['variable_persistente']= "Hola soy una sesion activa";

    echo $variable_normal. "<br>";

    echo $_SESSION['variable_persistente']. "<br>";


?>