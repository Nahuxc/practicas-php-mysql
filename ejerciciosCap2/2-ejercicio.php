<?php



/* escribir un programa con php que añada valores a un array mientras que su longitud sea menor a 120 y luego mostrar en pantalla */


$coleccion = [];

function crearValores($coleccion, $valoresAñadir){

    $result = "";

    for ($i=0; $i < $valoresAñadir ; $i++) {
        $result .= array_push($coleccion, $i)."<br>";
    }

    if(count($coleccion) <= 120){
        echo "<h1>Hay 120 Valores en el array</h1>";
        return $result;
    }else{
        echo "<h1>no puedes añadir mas de 120 valores</h1>";
    }



}

if(isset($_GET["numeros"])){

    $valoresAñadir = $_GET["numeros"];

    echo crearValores($coleccion, $valoresAñadir);

}








?>