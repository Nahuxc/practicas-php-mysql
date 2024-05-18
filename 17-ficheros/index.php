<?php


/* abrir archivo */

//$archivo = fopen("fiche_texto.txt", "a+"); /* en el primer parametro indicamos el archivo y en el segundo damos el tipo de uso, en este caso la "r" es de lectura, "x" ejecucion y la "w" de escritura, el permiso "a+" nos permite leer y escribir en los archivos */







/* leer contenido */


/* el while es para que pueda leer todas las lineas del archivo iterandose  */
/* while(!feof($archivo)){ // recorre todas las lineas del archivo hasta que finalice 

    $contenido = fgets($archivo); // obtenemos sus datos o contenido 

    echo $contenido."<br>";


} */








/* escribir en un archivo */

// fwrite($archivo, "**texto desde php**");







/* cerrar archivo */
// fclose($archivo);






/* copiar un archivo */
/* copy("fiche_texto.txt", "fiche_copiado.txt"); */









//renombrar un fichero

/* rename("fiche_copiado.txt", "archivo_copiado_renombrado.txt"); */







//Eliminar

/* unlink("archivo_copiado_renombrado.txt"); */




/* comprobar la existencia de un archivo con el file_exists */

if(file_exists("fiche_texto.txt")){
    echo "el archivo exite";
}else{
    echo "el archivo no existe";
}



?>