<?php

/* clases desde el autoload - nos carga todas las clases que este en el directorio */

require_once "autoload.php";

//datos con el autoload

/* clases con require */
/* require_once "clases/user.php";
require_once "clases/entrada.php";
require_once "clases/categoria.php"; */

/* $user = new Users("Nahuel", "martinez", "martinezfej23@gmail.com");
$categoria = new Categorias("Accion", "Juegos de accion dentro de esta categoria", date("d-m-y"));
$entrada = new Entradas("GTA V", "Review del juego del gta V", date("d-m-y"));


var_dump($user);
var_dump($categoria);
var_dump($entrada); */







/* namespaces y paquetes */

/* Nombre del Paquete: MisClases */

/* Uso de las clases desde el paquete - con el nombre de cada Clase */
use MisClases\Users, MisClases\Categorias, MisClases\Entradas ; /* con PHP7 se puede usar de esta forma sino habria que poner un use por cada clase */


// en caso de tener clases iguales en diferentes paquetes podemos reasignarlas cuando las llamamos con el AS, esto es para que los 2 objetos que se llamen igual puedan coexistir en la aplicacion sin problema

//los namespace se usan para poder organizar todo entre paquetes


use panelAdmin\Users as UsuarioAdmin;


class Controlador{
    public $users;
    public $categorias;
    public $entradas;

    public function __construct(){
       /*  $this->users = new Users(); */ // podemos hacerlo de esta forma pero no funcionaria si tenemos el namespace, porque poniendo el namespace le estariamos cambiando el lugar


        // a tener en cuenta: si nosotros usamos un namespace deberiamos crear una carpeta con el nombre del namespace y dejar las clases dentro de la carpeta, ya que va a requerir encontrar la RUTA para poder concatenarlo y que funcione

        // utilizar la barra \ invertida para linkear sino no va a funcionar

        //no es recomendado hacerlo de esta forma aunque sea posible ya que estamos utilizando mas espacio de codigo sin necesidad ya que esta todo en un mismo paquete

        /*
        $this->users = new MisClases\Users("Nahuel", "martinez", "martinezfej23@gmail.com");
        $this->categorias  = new MisClases\Categorias("Accion", "Juegos de accion dentro de esta categoria", date("d-m-y"));
        $this->entradas = new MisClases\Entradas("GTA V", "Review del juego del gta V", date("d-m-y")); */


        /* forma a realizar - con solo usar el  " USE MisClases\users; y asi llamar a cada una nos ahorramos estar escribiendo codigo innecesario  " */

        $this->users = new Users("Nahuel", "martinez", "martinezfej23@gmail.com");
        $this->categorias = new Categorias("Accion", "Juegos de accion dentro de esta categoria", date("d-m-y"));
        $this->entradas = new Entradas("GTA V", "Review del juego del gta V", date("d-m-y"));



    }

    public function getUsers(){
        return $this->users;
    }

    function informacion(){
        /* constantes para clases y methodos */
        echo __METHOD__."<BR>";
        echo __CLASS__."<BR>";
        echo __FILE__."<BR>";
        echo __LINE__."<BR>";
    }

}




/* objeto controlador */
$controlador = new Controlador();
$controlador->informacion();

var_dump($controlador->users);


/* objeto de otro paquete - panelAdmin */

$user = new UsuarioAdmin(); // lo usamos con el nuevo alias

var_dump($user);







// comprobar si existe una clase Metodos

/* usar el @ esconde los warnings */

$clase = @class_exists("MisClases\Users");

if($clase){
    echo "existe la clase";
}else{
    echo "la clase no existe";
}

// metodo que nos permite buscar si existe un metodo o no (get_CLASS_methods() )

$methodos = get_CLASS_methods($controlador); //devuelve todos los metodos de la clase

$busqueda = array_search("getUsers", $methodos); //buscamos los metodos y comprobamos si existen o no

var_dump($busqueda);






?>