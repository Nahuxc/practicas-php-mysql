<?php

//bucle while

// estructura de control que itera o repite la ejecucion de una serie de instrucciones tantas veces como sea necesario, en base a una condicion.

/* 

estructura de while


    while(condicion){

        * bloque de instrucciones
        * otras instrucciones
    }

*/

$numero = 1;

/* while($numero <= 5){ //si numero es menor o igual a 100 se va a ejecutar hasta que se cumpla la condicion


    echo $numero."<br>"; // imprimimos los numeros


    $numero++; //incrementamos su valor por cada vez que se repita en 1
} */


if(isset($_GET["numero"])){
    $numero = $_GET["numero"]; //recibimos un string, para cambiarlo a un entero se pondria (int)$_GET["numero"]
}else{
    $numero = 1;
}


echo "<h1>Tabla de multiplicar del numero $numero</h1>";

$contador = 0;

while($contador <= 10){
    echo "$numero x $contador = ".($numero*$contador)."<br>";
    $contador++;
}




/* DO WHILE */

/* do{

    
    //bloque de instrucciones


}while(condicion);      //evaluamos condiciones

*/

$edad = 18;
$contador = 1;

do{
    echo "tienes acceso al local privado $contador"."<br>";
    $contador++;
}while($edad >= 18 && $contador <=5);




$string = "hola jorge";


for ($i=1; $i < 10 ; $i++) {

    for ($e=1; $e <= 10; $e++) {
        echo "$i * $e"."=".($i * $e)."<br>";
    }

}







/* practica nuevamente de bucles do while for */











?>
