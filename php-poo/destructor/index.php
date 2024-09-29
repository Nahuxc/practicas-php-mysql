<?php


class User{
    public $name;
    public $username;

    public function __construct(){
        /* no se imprime texto atraves de un constructor
        en este caso lo hago para mostrar la funcionalidad
        en el momento */
        echo "Creando el objeto"."<br>";
    }
    

    /* el destruct se va a ejecutar una vez la clase haya cumplido su funcion
    cuando detecte el programa que ya no estamos utilizando
    la clase automaticamente se va a destruir el objeto*/
    public function __destruct(){
        /* no se imprime texto atraves de un constructor
        en este caso lo hago para mostrar la funcionalidad
        en el momento */
        echo "destruyendo el objeto";
    }

}





?>