<?php

//INSERTAR DATOS CON PDO Y EVITAR INYECCIONES SQL


// Conexion MySQL

$host = "localhost";
$user = "root";
$password = "";
$dbname = "blog_videojuegos";

//configurar dsn

$dsn = "mysql:host=$host;dbname=$dbname"; //cadena de conexion

// crear instancia PDO

$pdo = new PDO ($dsn, $user, $password);


// agregar el setAttribute de manera global

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


/* insertar datos con PDO */

//DATOS QUE ENVIARIA EL USUARIO POR UN FORMULARIO
$name = "Car";
$surname = "Martinez";
$email = "carMartinez@gmail.com";
$password = "1234124124";

//hacemos la contraseña segura con un hash
$password_segurity = password_hash($password, PASSWORD_BCRYPT, ["cost"=>4]);


//hacemos una query para insertar datos
$query = "INSERT INTO users(name, surname, email, password, date) VALUES(:name, :surname, :email, :password, curdate()) "; //usando estos comodines :name etc nos sirve para que no puedan hacer inyecciones SQL, ya que no pasamos el dato directamente


//statement / preparamos el query a ejecutar
$stmt = $pdo->prepare($query); //llamamos al query


// hacemos el bind o vinculacion de los parametros para el query

//Hacerlo de esta forma tambien nos permite verificar el tipo de dato que estamos enviando
$stmt->bindParam(":name", $name, PDO::PARAM_STR); // de esta forma podemos evitar inyecciones sql
$stmt->bindParam(":surname", $surname, PDO::PARAM_STR);
$stmt->bindParam(":email", $email, PDO::PARAM_STR);
$stmt->bindParam(":password", $password_segurity, PDO::PARAM_STR);

//luego ejecutamos con un execute
$stmt->execute();



//esta es una forma de vincular / enviar los datos con array pero no es tan segura
/* $stmt->execute(["name" => $name,
                "surname" => $surname,
                "email" => $email,
                "password" => $password_segurity]);
 */
echo "<br>";
echo "usuario creado";






?>