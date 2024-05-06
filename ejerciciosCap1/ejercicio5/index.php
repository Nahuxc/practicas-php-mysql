<?php

/* ejercicio 5: hacer un programa que muestre todos los numeros entre dos numeros que nos lleguen por la URL usando get */


if(isset($_GET["numero"])){
    
    $numeroGet = $_GET["numero"];
    $numeroGet2 = $_GET["numero2"];

    for($i = $numeroGet; $i <= $numeroGet2; $i++){
        echo $i;
    }
}

?>