<?php

$error;

if(!empty($_POST["name"]) && !empty($_POST["surname"]) && !empty($_POST["edad"]) && !empty($_POST["email"]) &&  !empty($_POST["password"])){

    $error = "ok";

    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $edad = $_POST["edad"];
    $email = $_POST["email"];
    $password = $_POST["password"];

}else{
    $error = "faltan_valores";
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
    <?php  if($error == "ok"): ?>
    
        <h1>Datos Validados correctamente</h1>
        <p>Nombre: <?=$name;?></p>
        <p>Apellido: <?=$surname;?></p>
        <p>Edad: <?=$edad;?></p>
        <p>Email: <?=$email;?></p>
    
    <?php endif; ?>
</body>
</html>