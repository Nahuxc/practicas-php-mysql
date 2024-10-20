<?php


class Database{
    private $connection; // info de la conexion a la db
    
    public function __construct(){

        //Config de opciones
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];

        $this->connection = new PDO("mysql:host=localhost;dbname=orm_db", "root", "");

        $this->connection->exec("SET CHARACTER SET UTF8");


    }

    public function getConnection(){
        return $this->connection;
    }

    public function closeConnection(){
        $this->connection = null;

    }


}


?>
