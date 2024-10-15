<?php

class Router{

    private $controller;
    private $method;


    public function __construct(){
        $this->matchRoute();
    }

    public function matchRoute(){
        $url = explode("/", URL); //explote lo que hace es separar una cadena de texto por un separador en este caso un /

        /* indicamos en que posicion del arreglo se va a encontrar el controlador en la url y el metodo en la url */
        $this->controller = !empty($url[1]) ? $url[1] : "page"; //  devuelve /page

        $this->method = !empty($url[2]) ? $url[2] : "home"; //devulve /page/nombreDelMetodo

        /* hacemos que para que sea dinamico el cambio agreguemos automaticamente el controller al final para llamar al controlador */

        $this->controller = $this->controller."Controller"; // esto devuelve /PageController

        /* ahora vamos a llamar al archivo PageController */

        include_once(__DIR__."/Controller/".$this->controller.".php"); //devuelve /Controller/pageController.php
    }

    /* con este metodo podemos ejecutar la clase paara que muestre el uso de la funcion del constructor */
    public function run(){

        $controller = new $this->controller(); // new PageController();
        $method = $this->method; // metodo desde PageController;
        $controller->$method(); // metodo desde PageController->metodo();

    }

}


?>
