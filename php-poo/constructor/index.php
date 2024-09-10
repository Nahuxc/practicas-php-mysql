<?php

require_once "auto.php";


$auto = new Auto("azul", "renault", "modelo 19", 300);
$auto1 = new Auto("amarillo", "for", "eco", 230);
$auto2 = new Auto("rojo", "ferrari", "tesla", 500);

var_dump($auto);
var_dump($auto1);
var_dump($auto2);


?>