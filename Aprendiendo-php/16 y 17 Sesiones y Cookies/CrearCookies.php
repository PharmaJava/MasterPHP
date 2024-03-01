<?php

//Crear cookie basica

setcookie("micookie", "valor de mi galleta");

//Cookie con expiracion
setcookie("oneyear","valor de mi cookie 365 dias", time()+(60*60*24*365));


?>

<a href="ver_cookies.php">Ver las galletas</a>
<br>
<a href="borrar_cookies.php">Borrar galletas</a>