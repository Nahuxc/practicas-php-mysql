<?php


//ACTUALIZAR DATOS CON PDO


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



//DATOS QUE ENVIARIA EL USUARIO POR UN FORMULARIO
$id = 1;
$name = "harlond";
$surname = "monsalve";
$email = "hardMonsa@gmail.com";


//hacemos una query para insertar datos
$query = "UPDATE users SET name=:name, surname=:surname, email=:email WHERE id=:id"; //usando estos comodines :name etc nos sirve para que no puedan hacer inyecciones SQL, ya que no pasamos el dato directamente

//podemos utilizar parametros anonimos tambien poniendo en la consulta name=? surname=? email=? id=?


$stmt = $pdo->prepare($query);


/* si usamos parametro anonimo hay que indicarle el tipo de posicion

$stmt->bindParam(1, $name, PDO::PARAM_STR);
$stmt->bindParam(2, $surname, PDO::PARAM_STR);
$stmt->bindParam(3, $email, PDO::PARAM_STR);
$stmt->bindParam(4, $id, PDO::PARAM_INT);

esto indica en orden como obtenemos o llamamos a los parametros anonimos

*/

/* esta forma es con parametros posicionales */

$stmt->bindParam(":name", $name, PDO::PARAM_STR);
$stmt->bindParam(":surname", $surname, PDO::PARAM_STR);
$stmt->bindParam(":email", $email, PDO::PARAM_STR);
$stmt->bindParam(":id", $id, PDO::PARAM_INT);

$stmt->execute();

echo "USUARIOS ACTUALIZADOS CORRECTAMENTE";

?>