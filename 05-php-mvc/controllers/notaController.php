<?php

class NotaController{

    
    function listar(){

        require_once "models/nota.php";

        $nota = new Nota();

        /* funciones de la clase nota */
        /* $nota->setTitle("Titulo de la Nota");
        $nota->setContent("Descripcion larga para el ejemplo"); */

        /* obtenemos las notas desde la funcion que se hereda del modelobase */
        $notas = $nota->getAll("notes");
        require_once "views/nota/listar.php";


    }

    function crear(){

    }

    function borrar(){

    }

    



}



?>
