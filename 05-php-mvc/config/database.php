
<?php

/* conexion a la base de datos mediante una clase statica */
class dataBase{
    public static function connect(){
        $con = new mysqli("localhost", "root", "", "practice_notes");
        $con->query("SET NAMES 'utf8' ");

        return $con;
    }
}


?>