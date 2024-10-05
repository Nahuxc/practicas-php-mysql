<?php

//FUNCIONES  -- crear funciones 1 --

/* una funcion es un conjunto de instrucciones agrupadas baja un nombre concreto y que pueden reutilizarse solamente invocando a la funcion tantas veces como queramos */

function games($fn){ /* parametros en () */

    //conjunto de instrucciones
    $fn();
}


/* ejemplo 2 */
function tabla($num){
    echo "<table>";
        for ($i=0; $i <= 10; $i++) {
            echo "<td>";
                echo ($i*$num) ;
            echo "<td/>";
        }
    echo "</table>";
}

function mostrarNombres(){
    echo "jorges"."<br>";
    echo "luis"."<br>";
    echo "martin"."<br>";
    echo "bruno"."<br>";
}


/* llamado de funciones */

/* tabla(2);


mostrarNombres();

games(function(){
    echo "soy una funcion dentro de otra";
}) */


/// -- argumentos y return

function calculadora($num, $num2, $negrita = false){
    $opeSum = ($num + $num2);
    $opeRes = ($num - $num2);
    $opeMul = ($num * $num2);
    $opeDiv = ($num / $num2);

    $cadenaTexto =  "";


    if($negrita){
        $cadenaTexto .= "<h1>";
    }

    /* el .= sirve para concatenar el resultado */

    $cadenaTexto .= "suma: ".$opeSum."<br/>" ;
    $cadenaTexto .= "resta: ".$opeRes."<br/>" ;
    $cadenaTexto .= "multiplicacion: ".$opeMul."<br/>" ;
    $cadenaTexto .= "division: ".$opeDiv."<br/>" ;
    
    if($negrita){
        $cadenaTexto .= "<h1/>";
    }


    $cadenaTexto .= "<hr/>" ;

    /* devolvemos el valor con el return */
    return $cadenaTexto;
}


/* imprimimos el valor del return */
echo calculadora(5, 2, true);
echo calculadora(4, 52);
echo calculadora(53, 22);



/* ejemplo 4 funciones dentro de otras */


function getNombre($name){
    $texto = "el nombre es $name";
    return $texto; /* retorna la variable texto */
}

function getApellido($surname){
    $texto = "el apellido es $surname";
    return $texto;
}

function devolNombre(){

    /* concatenamos una funcion dentro de un texto */
    $texto = getNombre("nahuel")
            ."<br/>".
            getApellido("gomez");


    return $texto;
}

echo devolNombre();










?>
