<?php

require_once "auto.php";


$auto = new Auto("azul", "renault", "modelo 19", 300, 13500, "martinez");
$auto1 = new Auto("amarillo", "ford", "eco", 230, 3400, "juan");
$auto2 = new Auto("rojo", "ferrari", "tesla", 500, 55400, "jose");

//intentar modificar el atributto protected
/* $auto->precio = 500;  nos da error porque no se puede */

$auto->setPrecio(500023); /* en este caso como estamos modificando atraves de la clase si nos permite cambiarle el precio */

echo $auto->getDatosAuto($auto2);

/* con una funcion nos permite acceder al dato, sino no se puede, ya que tiene que ser si o si dentro de la clase */
/* var_dump($auto->getPrecio());
var_dump($auto->getVendedor()); */


/* var_dump($auto);
var_dump($auto1);
var_dump($auto2); */


?>