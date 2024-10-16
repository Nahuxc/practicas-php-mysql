<?php

class Orm {
    protected $id; // almacenamos el id de la tabla
    protected $table; // almacenamos el nombre de la tabla
    protected $db; // almacenamos la conexion de la db para las consultas


    // asignamos los datos en el constructor
    public function __construct($id, $table, PDO $db){
        $this->id = $id;
        $this->table = $table;
        $this->db = $db;
    }

    // creamos los metodos


    // traer todos los registros de una tabla
    public function getAll(){
        $stm = $this->db->prepare("SELECT * FROM $this->table");
        $stm->execute();
        return $stm->fetchAll();
    }

    // traer un registro por su id
    public function getById($id){

    }


    // eliminar un registro
    public function deleteById($id){

    
    }


    // actualizar un registro
    public function updateById($id, $data){

    }


    // insertar un registro
    public function insert($data){

    }




}




?>