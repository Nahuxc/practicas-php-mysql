<?php


//herencia: posibilidad de compartir atributos y metodos entre clases

class Persona{

    /* variables */
    public $name;
    public $surname;
    public $age;
    public $dni;


    public function __construct($name, $surname, $age, $dni){
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->dni = $dni;
    }


    /* data name */
    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }


    /* data surname */
    public function getSurname(){
        return $this->surname;
    }

    public function setSurname($surname){
        $this->surname = $surname;
    }


    /* data age */
    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        $this->age = $age;
    }


    /* data dni */
    public function getDni(){
        return $this->dni;
    }
    public function setDni($dni){
        $this->dni = $dni;
    }


    /* actions */

    public function talk(){
        return "estoy hablando...";
    }
    
    public function walk(){
        return "estoy caminando...";
    }


}


/* con el extends podemos hacer que la clase informaticos herede lo que tiene la clase persona */
class Informatico extends Persona{

    public function __construct($name, $surname, $age, $dni, $tecnologies){
        parent::__construct($name, $surname, $age, $dni);
        

        $this->tecnologies = $tecnologies;
    }

    public function getTecnologies(){
        return $this->tecnoligies;
    }

    public function setTecnologies($tec){
        $this->tecnoligies = $tec;
    }


    public function programmer(){
        return "soy programador";
    }

    public function repairPc(){
        return "reparando computadora...";
    }

}




?>