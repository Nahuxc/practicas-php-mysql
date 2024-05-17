<?php

/* 

cookie: es un fichero que se almacena en el ordenador del usuario que visita la web con el fin de recordar datos o rastrear cierta informacion o comportamiento del mismo en la web.

*/

//crear cookie

            //estructura de la cookie

// setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio);


/* cookie basica */
setcookie("micookie", "valor de la cookie")

/* cookie con expiracion */

/* setcookie("year", "valor de mi cookie de 365 dias", time()+(60*60*24*365)) */





?>


<a href="ver_cookies.php">ver las cookies</a>