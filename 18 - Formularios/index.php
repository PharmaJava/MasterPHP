<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>

    <form action= "" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <p><input type="text" name= "nombre" autofocus="autofocus"/ 
        required="required" placeholder="nombre"></p><br>

        <label for="apellido">Apellido:</label>
        <p><input type="text" name= "apellido"
        placeholder="apellidos"  /></p><br>
        <input type="submit" value="enviar" /><br>

        <label for="boton">Boton: </label>
        <p><input type="button" name="boton" value="Clicame" /></p><br>
        
        <label for="sexo">Sexo: </label>
        <p>
           Hombre <input type="checkbox" name="sexo" value="hombre" checked="checked" />
           Mujer <input type="checkbox" name="sexo" value="mujer" />

        </p><br>
        <label for="Color">Color: </label>
        <p><input type="color" name="color" /></p><br>
        
        
        <label for="fecha">Fecha:</label>
        <p><input type="date" name= "fecha"
        /></p><br>
       
        <label for="correo">Email:</label>
        <p><input type="email" name= "correo"
        /></p><br>
       
        <label for="archivo">Archivo:</label>
        <p><input type="file" name= "archivo"
        /></p><br>  

        <label for="archivo">Archivo:</label>
        <p><input type="file" name= "archivo" multiple="multiple"
        /></p><br>  

        <label for="numero">Numero:</label>
        <p><input type="number" name= "numero"
        /></p><br>  

        <label for="pass">Contraseña:</label>
        <p><input type="password" name= "pass"
        /></p><br>  

        <label for="continente">Continente:</label>
    </p> 
        America del Sur<input type="radio" name= "continente" value= "America del Norte"
        /> 
        America del Norte<input type="radio" name= "continente" value= "America del Norte"
        />
        Europa<input type="radio" name= "continente" value= "Europa"
        />
    </p>

    <label for="web">Pagina Web:</label>
        <p><input type="url" name= "web"
        /></p><br> 

        Peliculas:

        <select name="peliculas">
            <option value="Spiderman 1">Spiderman 1</option>
            <option value="Spiderman 2">Spiderman 2</option>
            <option value="Spiderman 3">Spiderman 3</option>
            <option value="Spiderman 4">Spiderman 4</option>
        </select> <br>



    </form>





</body>
</html>