<?php

/* de esta manera podemos recibir los datos del formulario en caso que enviemos por get  | $_GET[""] en las comillas se pone el valor del input en este caso el name */

/* echo $_POST["nombre"]."<br>";  *//* cambiar de get a post para las pruebas */
echo $_POST["apellido"]."<br>";

$name = "";

if($_POST){
    echo $name.$_POST["nombre"]."<br>";
}

/* con var dump podemos ver los datos que llegan desde el formulario get */
var_dump($_POST);


//si enviamos por post no se van a ver los datos enviados por la url, pero si mandamos get se van a ver reflejados


?>