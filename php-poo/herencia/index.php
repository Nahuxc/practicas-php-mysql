<?php


require_once "clases.php";


$persona = new Persona("victor", "mansilla", 12, 47112855);

var_dump($persona);


$informatico = new Informatico("jose", "martinez", 12, 121546, "c#"); /* aca podemos ver que tiene las mismas propiedades que el objeto persona y sus propiedades de la misma clase */


var_dump($informatico);



?>