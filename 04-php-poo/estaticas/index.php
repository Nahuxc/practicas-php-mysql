<?php 

require_once "config.php";


/* de esta forma podemos llamar a las clases estaticas sin necesidad de crear una variable que lo contenga, podemos llamar funciones y sus variable */

configStatic::setColor("amarillo");

configStatic::setEntorno("localhost");

configStatic::setNewsletter(true);


echo configStatic::$color."<br>";
echo configStatic::$newsletter."<br>";
echo configStatic::$entorno."<br>";
?>

