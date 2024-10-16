
<?php

/* el router se va a encargar de estar extrayecto los parametros de la URL, logrando asi que cambie la vista y la clase ejecute los metodos

http://localhost/page/home -> llamado de metodo
http://localhost/page/listar -> llamado de metodo
http://localhost/page/nuevo -> llamado de metodo
http://localhost/page/modificar -> llamado de metodo

*/


/* esta clase se va a estar encargando de ejecutar los metodos */

class PageController extends Controller{

    function home(){
        // echo "estamos en el Metodo Home";
        // require_once(__DIR__."/../Views/home.view.php");
        $this->render("home", [], "site"); // usamos el metodo de la clase Controller desde core el archivo controller para manejar las vistas
    }

    function listar(){
        // echo "estamos en el Metodo Listar";
        // require_once(__DIR__."/../Views/listar.view.php");
        $this->render("listar", [], "site"); // usamos el metodo de la clase Controller desde core el archivo controller para manejar las vistas
    }

    function nuevo(){
        // echo "estamos en el Metodo Nuevo";
        // require_once(__DIR__."/../Views/nuevo.view.php");
        $this->render("nuevo", [], "site"); // usamos el metodo de la clase Controller desde core el archivo controller para manejar las vistas
    }

    function modificar(){
        // echo "estamos en el Metodo modificar";
        // require_once(__DIR__."/../Views/modificar.view.php");
        $this->render("modificar", [], "site"); // usamos el metodo de la clase Controller desde core el archivo controller para manejar las vistas
    }

    function eliminar(){
        // echo "estamos en el Metodo modificar";
        // require_once(__DIR__."/../Views/eliminar.view.php");
        $this->render("eliminar", [], "site"); // usamos el metodo de la clase Controller desde core el archivo controller para manejar las vistas
    }


}


?>
