<?php

$error;

if(!empty($_POST["name"]) && !empty($_POST["surname"]) && !empty($_POST["edad"]) && !empty($_POST["email"]) &&  !empty($_POST["password"])){

    $error = "ok";

    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $edad = (int) $_POST["edad"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    
    /* validar nombre */

    if(!is_string($name) || preg_match("/[0-9]/", $name)){
        $error = "error Nombre";
        
    }

    /* validar apellido */

    if(!is_string($surname) || preg_match("/[0-9]/", $surname)){
        $error = "error Apellido";
        
    }

    /* validar edad */

    if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
        $error = "error edad";
        
    }
    
    /* validar EMAIL */

    if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = "error email";
       
    }

    /* VALIDAR PASSWORD */
    if(empty($password) || strlen($password < 10)){
        $error = "error password";
        
    }

    var_dump($_POST);
    var_dump($error);

}else if($error != "ok"){
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