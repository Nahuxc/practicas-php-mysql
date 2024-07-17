<?php

/* 

Ejercicio 4: recoger dos numeros por la url(get) y hacer todas las operaciones basicas de una calculadora(suma, resta, multiplicacion, division) de esos dos numeros


*/

$num1 = $_GET["var1"];
$num2 = $_GET["var2"];

if( isset($_GET["var1"]) && isset($_GET["var2"]) ){
    $multiplicacion = ($num1 * $num2);
    $suma = ($num1 + $num2);
    $resta = ($num1 - $num2);
    $division = ($num1 / $num2);

    echo "<h1>$multiplicacion, $suma, $resta, $division</h1>";
    
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./index.php" method="get">

    <input name="var1" type="number">
    <input name="var2" type="number">
    <input type="submit" value="enviar">


    </form>
</body>
</html>
