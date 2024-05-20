
<?php

$pais = "españa";

$continente = "europa";
echo "<h1>Primer ejercicio</h1>"."<br>";

echo "tu pais es $pais y tu continente es $continente"."<br>";


echo "su tipo de dato es: ".gettype($pais)."<br>";
echo "su tipo de dato es: ".gettype($continente)."<br>";

echo "<hr>";

echo "<h1>segundo ejercicio</h1>"."<br>";


$numeros = 0;

for ($numeros=0; $numeros <= 100 ; $numeros++) { 
    if($numeros % 2 == 0){
        echo $numeros."<br>";
    }
}


echo "<hr>";


echo "<hr>";

echo "<h1>Tercer ejercicio</h1>"."<br>";

$contador = 0;

for ($contador; $contador <= 40 ; $contador++) { 
    $result = $contador * $contador."<br>";
    echo "resultado  $result";

}


echo "<hr>";


echo "<hr>";

echo "<h1>cuarto ejercicio</h1>"."<br>";


$num1 = $_GET["num1"];
$num2 = $_GET["num2"];

if(isset($_GET)){
    echo "suma desde get ".($num1 + $num2)."<br>";
    echo "multiplicacion desde get ".($num1 * $num2)."<br>";
    echo "division desde get ".($num1 / $num2)."<br>";
    echo "resta desde get ".($num1 - $num2)."<br>";
}


echo "<hr>";


echo "<hr>";

echo "<h1>sexto ejercicio</h1>"."<br>";

echo "<table>";

    for ($i=1; $i <= 10 ; $i++) {
        echo "<tr>".$i;

            for ($x=1; $x <= 10 ; $x++) { 
                
                $result = $x * $i;
                echo "<th>".$result;

                echo "</th>";
            }

        echo "</tr>";

        


    }

echo "</table>";

echo "<hr>";






?>