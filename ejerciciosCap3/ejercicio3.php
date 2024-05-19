<?php

/* ejercicio 3. hacer una interfaz de usuario(Formulario) con dos inputs y 4 botones, uno para sumar, restar, dividir y multiplicar */



function sumar($a, $b){
    $calc = $a + $b;
    return $calc;
}
function restar($a, $b){
    $calc = $a - $b;
    return $calc;
}
function multiplicar($a, $b){
    $calc = $a * $b;
    return $calc;
}
function dividir($a, $b){
    $calc = $a / $b;
    return $calc;
}

$result = false;

if(isset($_POST["num1"]) && isset($_POST["num2"])){

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    if(isset($_POST["sumar"])){
        $result = "el resultado es: ".sumar($num1, $num2);
    }
    if(isset($_POST["restar"])){
        $result = "el resultado es: ".restar($num1, $num2);
    }
    if(isset($_POST["multiplicar"])){
        $result = "el resultado es: ".multiplicar($num1, $num2);
    }
    if(isset($_POST["dividir"])){
        $result = "el resultado es: ".dividir($num1, $num2);
    }

}




?>


<h1>Calculadora</h1>
<form method="POST" action="ejercicio3.php">
    <label for="num1">Numero 1:</label>
    <input type="number" name="num1">
    <label for="num2">Numero 2:</label>
    <input type="number" name="num2">
    <br>
    <br>
    <label for="operaciones">operaciones</label>
    <input type="submit" name="sumar" value="sumar">
    <input type="submit" name="restar" value="restar">
    <input type="submit" name="multiplicar" value="multiplicar">
    <input type="submit" name="dividir" value="dividir">
</form>
<?php

if($result != false):
    echo "<h2>$result</h2>";
endif;
?>