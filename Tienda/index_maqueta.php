<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Camisetas</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <!-- CABECERA -->
    <header id= "header">
    <div id="logo">
        <img src="assets/img/camiseta.png" alt="camiseta Logo"/>
        <a href="index.php">
            Tienda de camisetas
        </a>
    </div>

    </header>

    <!--- MENU --->

    <nav id= "menu">
        <ul>
            <li>
                <a href="#"> Inicio </a>
            </li>
            <li>
                <a href="#"> Categoria 1</a>
            </li>
            <li>
                <a href="#"> Categoria 2 </a>
            </li>
            <li>
                <a href="#"> Categoria 3 </a>
            </li>
            <li>
                <a href="#"> Categoria 4 </a>
            </li>
            <li>
                <a href="#"> Categoria 5 </a>
            </li>
        </ul>
    </nav>

    <div id= content></div>

    <!-- BARRA LATERAL --> 
    <aside id="lateral">
        <div id="login" class="block_aside">
           <form action="#" method="post">

            <label for ="email">Email</label>
            <input type="email" name="email"/>

            <label for ="password">Contraseña</label>
            <input type="password" name="password"/>
            <input type="submit" value="Enviar"/>
        </form>
        
        <a href="#">Mis Pedidos</a><br>
        <a href="#">Gestionar Pedidos</a><br>
        <a href="#">Gestionar Categorias</a><br>

        </div>
    </aside>

    <!-- CONTENIDO CENTRAL -->
    <div id="central">

        <div class="product">
            <img src="assets/img/camiseta.png">
            <h2>Camiseta Azul Ancha</h2>
            <p>30 euros</p>
            <a href="">Comprar</a>
        </div>

        <div class="product">
            <img src="assets/img/camiseta.png">
            <h2>Camiseta Azul Ancha</h2>
            <p>30 euros</p>
            <a href="">Comprar</a>
        </div>

        <div class="product">
            <img src="assets/img/camiseta.png">
            <h2>Camiseta Azul Ancha</h2>
            <p>30 euros</p>
            <a href="">Comprar</a>
        </div>



    </div>
</div>
    <!-- PIE DE PAGINA -->
    <footer id="footer">
        <p>Desarrollado por Antonio &copy; <?=date('Y')?></p>
    </footer>

</body>
</html>