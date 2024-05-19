<?php

/* obtenemos el archivo enviado */
$archivo = $_FILES["archivo"];


/* sacamos el nombre del archivo desde sus propiedades */
$nombre = $archivo["name"];

/* sacamos el tipo */
$tipo = $archivo["type"];

/* verificamos si es un archivo de los tipos indicados */
if( $tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" ){

    if(!is_dir("images")){
        /* creamos la carpeta images en caso que no exista y le damos todos los permisos posibles */
        mkdir("images", 0777);
    }

    /* esto sirve para que este archivo temporal pueda guardarse en algun lugar indicado, en este caso primero debemos sacar el nombre del archivo tmp_name y luego indicarle la ruta y concatenarle el nombre */
    move_uploaded_file($archivo["tmp_name"], "images/".$nombre);
    
    header("Refresh: 5; URL=index.php");
    echo "imagen subida correctamente";


}else{
    header("Refresh: 5; URL=index.php"); /* hace un refresh de la pagina luego de 5sg */
    echo "sube una imagen con un formato correcto";
}



?>