<?php

/* ejercicio 6: imprimir por pantalla todas las tablas de multiplicar del 1 al 10 con HTML */


for($i = 1; $i <= 10; $i++){
    
    echo "<td>";
    for($x= 1; $x <= 10; $x++){
        echo "$i * $x =".($i * $x)."<br>";
    }
    
    echo "</td>";
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

</body>
</html>