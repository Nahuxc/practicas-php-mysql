<?php

// conectar a MYSQL

/* forma con mysqli */

/* creamos una variable conexion con su host - usuario - contraseña y nombre de la db */
$con = mysqli_connect("localhost", "root", "", "dbname");

/* comprobamos la conexion */


if(mysqli_connect_errno()){
    echo "fallo al conectarse a mysql";
}else{
    echo "conectado correctamente";
}


// otra forma de controlar los errores seria con un try catch

?>