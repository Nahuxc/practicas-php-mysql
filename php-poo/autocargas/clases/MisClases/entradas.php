<?php
namespace MisClases; /* asignamos el nombre al paquete de clases */


class Entradas{

    public $title;
    public $date;

    public function __construct($title, $date){
        $this->title = $title;
        $this->date = $date;
    }

}






?>