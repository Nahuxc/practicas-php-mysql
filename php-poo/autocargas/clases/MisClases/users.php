<?php

namespace MisClases; /* asignamos el nombre al paquete de clases */


class Users{

    public $name;
    public $surname;
    public $email;

    public function __construct($name, $surname, $email){
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
    }

}


?>
