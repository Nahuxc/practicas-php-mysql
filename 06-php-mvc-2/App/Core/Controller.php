<?php



class Controller{
    // esta funcion tiene 3 parametros - el primero es para llamar la vista - el segundo va a ser para pasar variables como parametros - el tercer parametro es para poder traer el layout
    protected function render($path, $parameters = [], $layout = ""){

        ob_start(); //buffer

        require_once(__DIR__."/../Views/$path.view.php");

        $content = ob_get_clean(); // lo que contenga el buffer lo almacenamos en el content que en este caso viene del primer require once

        require_once(__DIR__."/../Views/layout/$layout.layout.php");

    }
}


?>