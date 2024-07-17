<?php

echo "<br>";



/* var_dump() */; /* funcion para debugear una variable */



echo "<br>";



echo date("d-m-y"); /* muestra las fechas */



echo "<br>";



echo time(); /* da el timeStamp  */



echo "<br>";
/* matematicas */



echo "raiz cuadrada de 10: ".sqrt(10); /* sacamos raiz */




echo "<br>";



echo "Numero aleatorio entre 10 y 40: ".rand(10, 40); /* generamos numeros aleatorios desde un rango */



echo "<br>";




echo "numero pi: ".pi(); /* muestra o usa el numero pi */




echo "<br>";




echo "redondeo: ".round(7.54865843); /* round redondea un valor decimal */








/* mas funciones generales */

$varPrueba = 155.151535;

gettype($varPrueba); /* muestra el tipo de variable que tenemos */


//detectar tipado

if(is_string($varPrueba)){ // el is_ nos ayuda para la especificacion de variables
    echo "la variable no es un numero con decimales";
}else if(is_float($varPrueba)){
    echo "la variable es un numero con decimales";
}







echo "<br>";

/* comprobar la existencia de la variable */

if(isset($varPrueba)){ /* isset comprueba si la variable dentro existe o no existe */
    echo "existe";
}else{
    echo "no existe";
}

echo "<br>";





/* limpiar espacios en una variable o dato */


$frase = "    mi contenido     ";

var_dump(trim($frase));  /* podemos usar la funcion trim para eliminar y limpiar los espacios */


/* eliminar variables o indices de array */


echo "<br>";

$year = 1051;

unset($year); /* la funcion unset sirve para eliminar la variable del codigo */

echo "<br>";

/* comprobrar variable vacia */

$texto = "";

if(empty($texto)){ /* empty verifica si contiene algo la variable */
    echo "no tiene contenido";
}else{
    echo "tiene contenido";

}


echo "<br>";


/*  contar caracteres de un string */


$cadena = "123456789";


echo strlen($cadena); /* devuelve la cantidad de caracteres strlen */

echo "<br>";






/* encontrar caracter */

$frase_sec = "esta es una frase";

echo strpos($frase_sec, "frase"); /* strpos muestra o encuentra el contenido desde un string */


echo "<br>";







/* reemplazar palabras de un string */


$frase_sec = str_replace("frase", "auto", $frase_sec); /* la funcion str_replace primero le indicamos la palabra a seleccionar para luego escribrir la palabra a reemplazar y luego seleccionamos de donde vienen los datos en este caso de la variable frase_sec */

echo $frase_sec;






/* mayusculas y minusculas */


echo strtolower($frase_sec); /* transforma la frase en minuscula */
echo strtoupper($frase_sec); /* transforma la frase en mayuscula */




?>