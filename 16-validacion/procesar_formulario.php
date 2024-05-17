<?php

/* variable de datos desde el formulario */
$name="";
$surname="";
$edad="";
$email="";
$password="";

$error;

if(empty($_POST["name"]) && empty($_POST["surname"]) && empty($_POST["edad"]) && empty($_POST["email"]) &&  empty($_POST["password"])){

    $name = (isset($_POST["name"])) ? $_POST["name"]: "";
    $surname = (isset($_POST["surname"])) ? $_POST["surname"]: "";
    $edad = (isset($_POST["edad"])) ? $_POST["edad"]: "";
    $email = (isset($_POST["email"])) ? $_POST["email"]: "";
    $password = (isset($_POST["password"])) ? $_POST["password"]: "";


}else{
    $error = "faltan valores";
    header("Location:index.php?error=$error");
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de Formularios</title>
</head>
<body>
    
</body>
</html>