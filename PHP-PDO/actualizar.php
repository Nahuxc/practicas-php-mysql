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


?>