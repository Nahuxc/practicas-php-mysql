<?php

/* Manejo de errores / excepciones */


/* captura excepciones, en codigo susceptible a errores */
try{
    if(isset($_GET["id"])){
        echo "el parametro es ".$_GET["id"];
    }else{
        
        /* el exception nos ayuda a manejar errores */
        throw new Exception("No se envio el parametro en la URL");
    }

    /* captura errores */
}catch(Exception $err){
    echo "Ha habido un error ".$err->getMessage();

}

/* con el finally */
/* try{

    throw new Exception("errores de logica");

}catch(Exception $err){
    echo "Ha habido un error ".$err->getMessage();

}finally{
    echo "todo se ejecuto correctamente";
}
 */





?>