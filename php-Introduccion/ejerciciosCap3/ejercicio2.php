<?php


/* 

ejercicio 2: VALIDAR EMAIL
- Una funcion que Valide un Email con filter_var
- obtener variable por get y validarla
- mostrar el resultado

*/

function validarEmail($email){

    if(is_string($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "este es tu email: <strong>$email</strong> ";
    }else{
        echo "el email se ingreso incorrectamente";
    }

}

if(isset($_GET["email"])){
    $email = $_GET["email"];
    validarEmail($email);
}


?>

<form method="GET" action="ejercicio2.php">
    <input type="text" name="email">
    <input type="submit" value="Enviar">
</form>