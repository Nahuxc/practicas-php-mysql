<?php

/* simulacion de datos formulario */
$name = "faf";
$email = "nfaif@gmail.com";
$password = "152648";

/* cifrar la contraseña */

$password_segurity = password_hash($password, PASSWORD_BCRYPT, ["cost"=>4]); /* utilizamos la funcion password_hash le pasamos el string/contraseña y el mas recomendado a usar para encriptar es password_bcrypt y luego hacemos que se encripte 4 veces*/

var_dump($password);
var_dump($password_segurity);

/* con password_verify podemos verificar que sea correcta 

esto tambien nos puede ayudar cuando hagamos un registro de usuarios

*/
password_verify($password, $password_segurity);


/* para insertar ciertos datos a una db primero hariamos la conexion a todo el archivo index

luego estos datos enviados del formulario podemos guardarlos de la siguiente manera

*/

/* creamos el insert y ponemos las variables de los datos */
$sql =  "INSERT INTO users VALUES(null, $name, $email, $password, curdate()); ";


$querySave = mysqli_query($db)



/* a la hora de obtener datos de 
un formulario y pasarle en los datos

"" , ' estas comillas o algun dato que perjudique podemos usar la funcion mysqli_real_escape_string

esta va a hacer que no colapse con la interpretacion de la base de datos


le pasamos como parametros, la conexion a la db y el string o dato

*/

if(isset($_POST)){


    $name = isset($_POST["name"]) ? mysqli_real_escape_string($con, $_POST["name"]) : false;

}





?>