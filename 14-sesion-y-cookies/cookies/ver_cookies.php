<?php


/* 

para mostrar el valor de las cookies, tenes que usar $_cookies, que seria la variable super global, es un array asociativo.

*/



if(isset($_COOKIE["micookie"])){
    echo "<h1>".$_COOKIE["micookie"]."</h1>";
}else{
    echo "<h1>no existe tu cookie</h1>";
}




?>

<a href="borrar_cookies.php">borrar cookies</a>