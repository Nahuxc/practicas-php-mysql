<?php

//FOR


/* for( variables contador, condicion, incremento del contador ){

    //bloque de instrucciones de lo que se va hacer y una vez se haga se va a evaluar la condicion y mientras sea verdadera se va a ejecutar. y una vez se cumpla la condicion se va a dejar de ejcutar


} */

$resultado = 0;

for($i = 1; $i <= 5;$i++){

    $resultado += $i;  //$resultado = $resultado + $i;

    echo "mostramos como se va sumando $resultado "."<br>";

}

echo "el resultado es: $resultado";





?>