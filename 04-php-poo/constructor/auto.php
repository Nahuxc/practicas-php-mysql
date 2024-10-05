<?php


class Auto{

    //atributos o propiedades (variables) * atributo public podemos accder a el desde cualquier lugar
    public $color , $marca, $modelo, $velocidad;

    //atributo protected podemos acceder a ellos desde la clase que los define y las clases que herenden la misma clase
    protected $precio;

    // atributo private solo podemos acceder desde la clase que lo define
    private $vendedor;


    /* definir constructor */
    public function __construct($color , $marca, $modelo, $velocidad, $precio, $vendedor){
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->precio = $precio;
        $this->vendedor = $vendedor;
    }


    // Metodos, son acciones que hace el objeto (Funciones)
    public function arrancar(){
        echo "<h1>El auto esta encendido</h1>";
    }

    public function getVendedor(){
        return $this->vendedor;
    }


    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        return $this->color = $color;

    }

    public function getPrecio(){
        return $this->precio;
    }

    public function setPrecio($precio){
        return $this->precio = $precio;
    }


    public function acelerar(){
        $this->velocidad++;
    }

    public function frenar(){
        $this->velocidad--;
    }

    public function getVelocidad(){
        return $this->velocidad;
    }


    /* podemos indicar el tipo de dato que vamos a pasarle, este caso le pasamos de la clase auto */
    public function getDatosAuto(auto $obj){

        if(is_object($obj)){
            $data = "<h1>Modelo: $obj->modelo </h1>";
            $data .= "Marca: $obj->marca "."<br>";
            $data .= "precio: $obj->precio ";
        }else{
            $data = "este dato esta mal";
        }
        
        return $data;

    }


}




?>