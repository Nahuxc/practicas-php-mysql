<!-- Clases, Metodos y Propieades -->

<?php

/* las clases serian como unas plantillas las cuales contiene
ciertas caracteristicas y funcionalidades del objeto creado
y nos permiten crear varios del mismo con caracteristicas similares */



// definir una clase (plantilla para crear mas objetos relacionado a los Autos)

class Auto{

    //atributos o propiedades (variables)
    public $color = "", $marca = "", $modelo = "", $velocidad = 0;



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



//uso de la clase

//crear un objeto / instanciar una clase

$auto = new Auto();

//usar los metodos

$auto->acelerar();
echo $auto->getVelocidad()."<br>";

$auto->setColor("rojo");
echo $auto->getColor();


/* crear mas objetos */

$auto2 = new Coche();
$auto2->setColor("amarillo");










?>