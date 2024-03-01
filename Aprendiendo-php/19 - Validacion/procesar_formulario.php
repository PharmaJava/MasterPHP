<?php
$error = '';

if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad'])
    && !empty($_POST['email']) && !empty($_POST['pass'])) {

    $nombre = ($_POST['nombre']);
    $apellidos = ($_POST['apellidos']);
    $edad = (int)($_POST['edad']);
    $email = ($_POST['email']);
    $pass = ($_POST['pass']);

    if(!is_string($nombre) || !preg_match("/[a-zA-Z ]+/", $nombre)){
        $error = 'nombre';
    }
    if(!is_string($apellidos) || !preg_match("/[a-zA-Z ]+/", $apellidos)){
        $error = 'apellidos';
    }
    if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
        $error = 'edad';
    }
    if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = 'email';
    }
    if(empty($pass) || strlen($pass) < 5){
        $error = 'pass';
    }
} else {
    $error = 'faltan_valores';
}

if ($error != '') {
    header("Location: index.php?error=$error");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (isset($error)):?>
        <h1>Datos Validados Correctamente</h1>
        <p>Nombre: <?=$nombre?></p>
        <p>Apellidos: <?=$apellidos?></p>
        <p>Edad: <?=$edad?></p>
        <p>Email: <?=$email?></p>
    <?php else: ?>
        <p style="color: red;">Hubo un error al procesar el formulario. Por favor, asegúrate de completar todos los campos correctamente.</p>
        <a href="index.php">Volver al formulario</a>
    <?php endif;?>    
</body>
</html>
