<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Videojuegos</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>
    <!-- Cabecera -->

    <header id="cabecera">
        <!-- LOGO -->
        <div id="logo">
            <a href= "index.php">
                Blog de videojuegos
            </a>
        </div>
    


    <!-- MENU -->
    <nav id="menu">
<ul>
    <li>
        <a href="index.php">Inicio</a>
    </li>
    <li>
        <a href="index.php">Categoria 1</a>
    </li>
    <li>
        <a href="index.php">Categoria 2</a>
    </li>
    <li>
        <a href="index.php">Categoria 3</a>
    </li>
    <li>
        <a href="index.php">Categoria 4</a>
    </li>
    <li>
        <a href="index.php">Sobre mi</a>
    </li>
    <li>
        <a href="index.php">Contacto</a>
    </li>
</ul>
    </nav>
</header>
<div id="contenedor">
        <!-- Barra lateral -->
<aside id ="sidebar">
    <div id="login" class="bloque">
        <h3>Identificate</h3>
        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email"/>

            <label for="password">Contraseña</label>
            <input type="password" name="password"/>

            <input type="submit" value="Entrar" />
        </form>
    </div>
    <div id="register" class="bloque">
        <h3>Registrate</h3>
        <form action="registro.php" method="POST">

             <label for="nombre">Nombre</label>
            <input type="text" name="nombre"/>

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos"/>

            <label for="email">Email</label>
            <input type="email" name="email"/>

            <label for="password">Contraseña</label>
            <input type="password" name="password"/>

            <input type="submit" value="Registrar" />
        </form>
    </div>
</aside>

        <!-- CAJA PRINCIPAL -->
        <div id="principal">
            <h1>Ultimas entradas</h1>
            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                    Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada 
                </p>
            </article>
            <h2>Titulo de mi entrada</h2>
                <p>
                    Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada 
                </p>
            </article>
            <h2>Titulo de mi entrada</h2>
                <p>
                    Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada 
                </p>
            </article>
            <h2>Titulo de mi entrada</h2>
                <p>
                    Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada  Descripcion de la entrada 
                </p>
            </article>
        </div>
    </div>

    <!-- Pie de Pagina -->
    <footer id="pi">
        <p>Desarrollado por Antonio &COPY;</p>
    </footer>
</body>
</html>