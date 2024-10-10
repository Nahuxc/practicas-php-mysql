<?php


//creamos la clase userController para controlar lo que estamos recibiendo desde el modelo

class UserController{


    //un ejemplo seria esta funcion
    function getAllUsers(){
        require_once "models/user.php"; //llamamos al modelo de la clase user

        $user = new User();
        $todos_los_usuarios = $user->getAll(); //usamos el metodo que nos de los datos a requerir

        //luego mandamos esos datos a las vistas donde queremos imprimirlos
        require_once "views/users/getAllUsers.php";


    }
    function getUsers(){

    }

    function createUser(){
       require_once "views/users/crear.php";
    }
    function editUser(){

    }
    function eliminarUser(){

    }

}



?>