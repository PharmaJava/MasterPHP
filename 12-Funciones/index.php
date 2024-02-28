<?php

    function muestraNombres(){

        echo "Manolito Perez <br>";
        echo "Manolito Perez <br>";
        echo "Manolito Perez <br>";
        echo "Manolito Perez <br>";
        echo "<hr/>";
    }

    //invocar funcion
    muestraNombres();

    function tabla($numero){
        echo "<h3>Tabla de multiplicar del número: $numero</h3>";

        for ($i=1; $i<=10; $i++){

            $operacion = $numero * $i ;

            echo "$numero x $i = $operacion <br>";
        }
    }
    tabla (55);

    for ($i=0; $i<=10;$i++){
        tabla($i);
    }

 echo "<br>";
    //otro ejemplo


    function calculadora ($numero1, $numero2, $negrita= false){

        $suma= $numero1+ $numero2;
        $resta= $numero1 - $numero2;
        $multi= $numero1 * $numero2;
        $division= $numero1 / $numero2;
        $cadena_texto= "";


        if ($negrita !=false){
            $cadena_texto .= "<h1>";

            echo "<h1>";
        }
        $cadena_texto .="Suma: $suma <br>";
        $cadena_texto .= "Resta: $resta <br>";
        $cadena_texto .= "Multiplicacion: $multi <br>";
        $cadena_texto .="Division: $division <br>";

        if ($negrita){
            echo "<h1>";
        }
        return $cadena_texto;
  }

  echo calculadora(10,30);
  echo calculadora(20,40, true);


  function getNombre($nombre){
    $texto= "El nombre es:  $nombre";
    return $texto;
}

function getApellido($apellidos){
   $texto=  "Los apellidos son: $apellidos";
   return $texto;

}

  function devuelveElNombre($nombre, $apellidos){
    $texto= getNombre($nombre) . "<br>" . 
            getApellido($apellidos)    ;
            
            return $texto; 

  }

  echo devuelveElNombre("Paco", "Perez");




?>