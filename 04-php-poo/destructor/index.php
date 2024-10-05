<?php


class User{
    public $name;
    public $username;

    public function __construct(){

        $this->name = "jorge";

        /* no se imprime texto atraves de un constructor
        en este caso lo hago para mostrar la funcionalidad
        en el momento */
        echo "Creando el objeto"."<br>";
    }
    
    /* metodos magicos */

    public function __toString(){ /* si yo quiero imprimir el objeto puedo usar toString */
        return "hola, ".$this->name;
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

$usuario = new User();

echo $usuario; // esto nos va a devolver "hola, jorge" viene del toString

echo $usuario->name;


?>