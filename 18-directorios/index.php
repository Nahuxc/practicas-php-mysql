<?php

/* crear carpeta  */

/* mkdir("micarpeta", 0777); */ // le damos todos los permisos con 0777

if(!is_dir("micarpeta")){
    mkdir("micarpeta", 0777);
}else{
    echo "ya existe la carpeta";
}

/* borrar directorio */
// rmdir("micarpeta");


/* recorrer todo el contenido de mi directorio */



if($gestor = opendir("./micarpeta")){ // con el opendir podemos abrir un directorio
    while(false !== ($archivo = readdir($gestor))){
        if($archivo != "." && $archivo != ".."){ /* con esta condicion cancelamos los puntos */
            echo "<br>".$archivo;
        }
    } /* con el readdir podemos leer un directorio */
}


?>