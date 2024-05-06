<?php

/* variables superGlobales */



/* $_POST and $_GET */





/* variables Servidor */

/* podemos sacar datos desde el array en este caso sacamos la direccion ip desde lo que le enviamos | server_addr */

print_r($_SERVER["SERVER_ADDR"]);


/* PODEMOS SACAR EL NOMBRE DEL SERVIDOR */

print_r($_SERVER["SERVER_NAME"]);

/* QUE HERRAMIENTA USA EL SERVIDOR WEB */

print_r($_SERVER["SERVER_SOFTWARE"]);


/* PODEMOS SACAR EL PROTOCOLO, ENTRE OTRAS COSAS MAS */

print_r($_SERVER["HTTP_USER_AGENT"]);

/* SACAMOS LA DIRECCION IP DEL USUARIO */

print_r($_SERVER["REMOTE_ADDR"]);

?>
