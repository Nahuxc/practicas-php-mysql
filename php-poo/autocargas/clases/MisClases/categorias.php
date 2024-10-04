<?php

namespace MisClases; /* asignamos el nombre al paquete de clases */

class Categorias{

    public $name;
    public $description;
    public $date;

    public function __construct($name, $description, $date){
        $this->name = $name;
        $this->description = $description;
        $this->date = $date;
    }

}






?>