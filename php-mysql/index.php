<?php

/* conectar a la db */

$con = mysqli_connect('localhost','root','', "concesionario_db");

/* comprobar que este todo conectado correctamente */

if(mysqli_connect_errno()){
    echo "la conexion a la base de datos mysql fallo: ".mysqli_connect_errno();
}else{
    echo "se ha conectado correctamente";
}


/* consulta para configurar la codificacion de caracteres */

mysqli_query($con, "SET NAMES 'utf8' ");


// consulta SELECT desde PHP

$query = mysqli_query($con, "SELECT * FROM sellers");

//para poder mostrar en formato de array utilizamos

mysqli_fetch_assoc($query); //si queremos que saque todos los vendedores deberiamos recorrerlo


//DESCOMENTAR PARA UTILIZAR

/* while($seller = mysqli_fetch_assoc($query)){

    var_dump($seller);
} */








//INSERTAR EN LA BASE DE DATOS desde PHP



//DESCOMENTAR PARA UTILIZAR

/* $sql = "INSERT INTO cars VALUES(null, 'toyota', 'civic', 23445, 23, 2012)";

$insert = mysqli_query($con, $sql); */



//comprobamos que el insert se realize correctamente

//DESCOMENTAR PARA UTILIZAR

/* if($insert){
    echo "datos insertados correctamente";
}else{
    echo "error: ".mysqli_error($con);
} */






?>