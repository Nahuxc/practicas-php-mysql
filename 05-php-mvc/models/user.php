<?php

/* creamos el modelo en este caso del usuario para gestionar sus datos a conseguir */

//luego vamos al controlador donde creamos un user.php dentro de controllers


require_once "ModeloBase.php";

class User extends ModeloBase{ //extendemos las funciones que vienen de la clase modelobase
    private $name;
    private $surname;
    private $email;
    private $password;

    /* heredar metodos del modeloBase */
    public function __construct(){
        parent::__construct();
    }


    public function getName(){
        return $this->name;
    }
    public function setName($name){

    }
    public function getSurname(){
        return $this->surname;

    }
    public function setSurname($surname){

    }

    public function getEmail(){
        return $this->email;

    }
    public function setEmail($email){

    }
    public function getPassword(){
        return $this->password;

    }
    public function setPassword($password){

    }

}

?>
