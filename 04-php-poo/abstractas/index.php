<?php

/* una clase abstracta es una clase que no se puede instanciar
eso quiere decir que no podemos crear objetos con la misma, pero si
la podemos utilizar para heredar de la misma. esta clase define
la estructura que puede tener la clase que la herede junto con su funcionalidad
 */

abstract class Computadora{

    public $prender = true;

    /* cuando definimos una funcion como abstracta no le podemos indicar que funcionalidad va a tener dentro */

    abstract public function prender();


    public function apagar(){
        $this->prender = false;

    }

}


class PcAsus extends Computadora{
    public $procesador;

    public function arrancarProcesador(){
        $this->procesador = true;
    }

    /* le damos su funcionalidad a la funcion heredada */
    public function prender(){
        $this->prender = true;
    }
}


$computadora = new PcAsus();

$computadora->arrancarProcesador();
$computadora->prender();
$computadora->apagar();

/* en una clase abstracta podemos escribir metodos abstractos
sin darles especificamente una funcionalidad
pero si es necesario que la clase que va heredar defina
la funcionalidad que va a tener lo heredado de las funciones*/

var_dump($computadora);

?>