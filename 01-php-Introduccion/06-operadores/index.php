<?php

/* operadores aritmeticos */


$num1 = 15;

$num2 = 17;

/* suma */
echo "suma ".($num1 + $num2)."<br>";

/* resta */
echo "resta ".($num1 - $num2)."<br>";

/* multiplicacion */
echo "multiplicacion ".($num1 * $num2)."<br>";


/* division */
echo "division ".($num1 / $num2)."<br>";


/* resto de una division / sirve para ver si un numero es par o impar */

echo "resto ".($num1 % $num2)."<br>";



//operadores de incremento y decremento


$year = 2019;


$year++; //con el mas mas lo podemos sumar de a 1 / seria el operador de incremento

//decremento
$year--;


/* pre Incremento | $year = 1 + $year */

++$year;

//pre decremento

--$year;



echo "<h1>$year</h1>";


///////////////////////////


// operadores de asignacion


$edad = 55;

echo "edad: ".$edad;


/* este operador de asignacion += suma a la variable |  $edad = $edad + 5 */

echo "edad:".($edad+=5); //podemos hacerlo con - / * +




?>