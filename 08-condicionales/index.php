<?php


/* condicionales */

/* 

if(condicion){
    instrucciones
}else{
    otras instrucciones en caso que no se cumpla la condicion
}

//OPERADORES DE COMPARACION


== SIGNIFICA QUE ES EXACTAMENTE IGUAL


=== SIGNIFICA QUE EL DATO ES IDENTICO

!= ES DISTINTO/ DIFERENTE

<> MENOR QUE MAYOR QUE TAMBIEN SIGNIFICA DIFERENTE

!== NO ES IDENTICO

< MENOR QUE

> MAYOR QUE

<= MENOR IGUAL QUE

>= MAYOR O IGUAL QUE


// operadores logicos


&& AND

|| OR O

! NOT NO

and, or




*/

$color = "red";


/* if($color == "red"){
    echo "red";
}else{
    echo "no es rojo";
} */

/* ejemplo 1 */
$year = 2020;

if($year === 2019 || $year <= 2019){
    echo "estamos en 2019";
}else{
    echo "no  2019";
}

/* ejemplo 2 */
if($year != 2019){
    echo "es diferente a 2019";
}else{
    echo "estamos en 2019";
}

/* ejemplo 3 */

$name = "david";
$ciudad = "madrid";
$continente = "latino";


$edad = 18;

$edadPreAdulto = 18;


if($edad >= $edadPreAdulto){
    echo "<h1>$name es mayor de edad</h1>";
    if($continente == "europa"){
        echo "<h2>vive en $ciudad </h2>";
    }else{
        echo "no es europeo";
    }
}else{
    echo "<h1>$name es menor de edad</h1>";
}


/* ejemplo 4 */

/* else if */


$dia = 2;


if($dia == 1){
    echo "<br>"."el dia es $dia lunes";
}elseif($dia == 2){
    
    echo "<br>"."el dia es $dia martes"."<br>";
}elseif($dia == 3){
    echo "<br>"."el dia es $dia miercoles"."<br>";

}


/* operadores logicos ejemplo 5 */

$variable = 18;
$variable2 = 54;
$edad_oficial = 20;

if($variable >= $variable2 && $edad_oficial <= $variable2){
    echo "esta en edad para trabajar";
}else{
    echo "no puede trabajar";
}


/* ejemplo 6  */

$pais = "mexico";

if($pais == "mexico" || $pais == "españa"){
    echo "se habla español";
}else{
    echo "no se habla español";
}




/* uso de  switch */


echo "<hr>";

echo "condiciones switch"."<br>";

$dia = 2;


switch ($dia){
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    default:
        echo "fin de semana";
}






/* GOTO */

// ejemplo operador go to 

//sirve para determinar de donde a donde se va a saltear un codigo

goto marca; //declaramos el goto
echo "<h3>instruccion 1</h3>";
echo "<h3>instruccion 2</h3>";


marca: //se va a saltear los 2 echos anteriores ya que indica que arranca a ejecutar apartir de aca
 echo "me he saltado 2 echos";


 echo "<h3>instruccion 3</h3>";
 echo "<h3>instruccion 4</h3>";



?>