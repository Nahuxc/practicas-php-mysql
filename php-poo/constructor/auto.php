<?php


class Auto{

    //atributos o propiedades (variables)
    public $color , $marca, $modelo, $velocidad;

    /* definir constructor */
    public function __construct($color , $marca, $modelo, $velocidad){
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
    }


    // Metodos, son acciones que hace el objeto (Funciones)
    public function arrancar(){
        echo "<h1>El auto esta encendido</h1>";
    }

    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        return $this->color = $color;

    }

    public function acelerar(){
        $this->velocidad++;
    }

    public function frenar(){
        $this->velocidad--;
    }

    public function getVelocidad(){
        return $this->velocidad;
    }


}




?>