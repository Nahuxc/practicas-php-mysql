<?php

/* con la interfaz definimos que metodos va a tener mi clase a crear, puede servir para aplicaciones muy complejas en las
cuales debemos definir lo que vamos a usar o implementar */

interface Computadora{
    public function prender();
    public function reiniciar();
    public function drivers();
    public function detectarUSB();
    public function apagar();
}


class iMac implements Computadora{ /* con el implements nos traemos las funciones de la interfaz para poder utilizar la clase, sino estan definidas todos los metodos que vienen de la interfaz no vamos a poder usar la clase */
    private $modelo;

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function prender(){
        
    }
    public function reiniciar(){

    }
    public function drivers(){

    }
    public function detectarUSB(){

    }
    public function apagar(){

    }

}

$mac = new iMac();

$mac->setModelo("macbook PRO 2019");

echo $mac->getModelo();


?>