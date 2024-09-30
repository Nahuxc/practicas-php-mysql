<?php


class Persona{

    private $name;
    private $age;
    private $surname;
    private $dni;

    public function __construct($name, $surname, $age, $dni){
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->dni = $dni;
    }

    /* si un metodo no existe automaticamente se activa el metodo call */
    public function __call($name, $arguments){
    /* sacamos las 3 primeras letras del metodo que estoy llamando */
        $prefix_method = substr($name, 0, 3);

        if($prefix_method == "get"){
            $name_method = substr(strtolower($name), 3);
            /* sacamos el dato que en este caso es el nombre */

            return $this->$name_method;

        }else{
            return "el metodo que estas invocando no existe";
        }
    }

}

$persona = new Persona("jorge", "manzilla", 18, 4181235);

//accedemos al dato mediante el call
echo $persona->getName();
echo $persona->getAge();
echo $persona->getSurname();






?>