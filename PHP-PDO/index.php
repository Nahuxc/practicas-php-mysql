<?php


// PHP DATA OBJECTS (Extension PHP)
// una manera mejor y mas segura de acceder a una base de datos
// permite trabajar con muchos motores de dbase de datos como mysql, Sqlite, Postgress, SqlServer
// contiene una capa de acceso a datos
// es orientada a objetos (POO)


/*

// ventajas

- multiples bases de datos
- seguridad a traves de sentencias preparadas ( prepared statements )
- usabilidad y reusabilidad
- manejardor de errores avanzado

*/


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

//primer query / consulta

$query = $pdo->query("SELECT * FROM users")->fetchAll(PDO::FETCH_OBJ);

// EJEMPLO 1 - con el PDO esto hace que nos deje acceder de manera de objeto
foreach($query as $value ){
    echo $value->name."<br>";
}



//EJEMPLO 2

$nombre = "nahuel";

//parametros posicionales anonimos

$query3 = "SELECT * FROM users WHERE name = ? "; //uso de parametro posicional

//hacemos un prepare de la consulta a ejecutar
$stmt = $pdo->prepare($query3);

// y luego un execute para que ejecute el prepare
$stmt->execute([$nombre]);

$users = $stmt->fetch(); //fetcheamos la lista

var_dump($users);



//traer un unico registro

// otro uso de parametros posicional

$query4 = "SELECT * FROM users WHERE name = :name "; // es como pasarle un comodin

//hacemos un prepare de la consulta a ejecutar
$stmt2 = $pdo->prepare($query4);

// y luego un execute para que ejecute el prepare
$stmt2->execute([":name" => $nombre]);

$users2 = $stmt2->fetchAll(PDO::FETCH_OBJ); //fetcheamos la lista

var_dump($users);


//recorrer el arreglo
foreach($users2 as $user){

    echo $user->name;

}








?>