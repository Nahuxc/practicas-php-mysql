<?php

/* llamamos a la base de datos */
require_once "config/database.php";

/* esta clase es para poder usar los metodos encomun y no repetirlos en las otras clases */

class ModeloBase{

    public $db;

    public function __construct(){
        $this->db = database::connect();
    }

    function getAll($tabla){
        $query = $this->db->query("SELECT * FROM $tabla ORDER BY id DESC ");
        return $query;
    }


}


?>
