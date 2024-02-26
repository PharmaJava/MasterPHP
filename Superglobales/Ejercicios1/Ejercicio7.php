<?php

if(isset($_GET['numero1']) && isset ($_GET['numero2'])){
    $numero1= $_GET['numero1'];
    $numero2= $_GET['numero2'];

    for($i=$numero1; $i<=$numero2; $i++){

        if ($i%2 != 0){
        echo "<h4>$i ES IMPAR</h4>";
    }else{
        echo "<h4>$i ES PAR</h4>";
    }
    }

}else{
    echo "<h1>Introduce correctamente los valores por la url</h1>";
}




?>


