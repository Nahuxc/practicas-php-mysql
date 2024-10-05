<?php

/* un trait nos permite definir una serie de metodos para compartir en diferentes clases */

trait Utilidades{
    public function mostrarNombre(){
        echo "el nombre es: ".$this->nombre;
    }
}


class Auto{
    public $nombre;
    public $marca;

    public function __construct($nombre, $marca){
        $this->nombre = $nombre;
        $this->marca = $marca;
    }

    /* aplicamos el uso del trait */

    use Utilidades;

}

class Persona{
    public $nombre;
    public $apellido;

    /* aplicamos el uso del trait */

    use Utilidades;
}

class Videojuego{
    public $nombre;
    public $categoria;

    /* aplicamos el uso del trait */

    use Utilidades;
}

$auto = new Auto("clio", "toyota");
$persona = new Persona();
$videojuego = new Videojuego();

/* una vez aplicado el use con el trait a utilizar, nos permite usar su funcion */
$auto->mostrarNombre();


?>