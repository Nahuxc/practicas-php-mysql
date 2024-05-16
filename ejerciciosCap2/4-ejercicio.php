<?php

/* ejercicio 4: crear un script en php que tenga 4 variables, una de tipo array,  
- otra de tipo string
- otra int
- otra bolean
y que imprima un mensaje segun el tipo de variable que sea

*/

$var1 = [1, 5 ,6];
$var2 = "string";
$var3 = 15;
$var4 = true;


function msjVar($var){

    if(is_array($var)){
        echo "<h1>Estas usando un array</h1>";
        return var_dump($var);

    }else if(is_string($var) ){

        echo "<h1>Estas usando un string</h1>";
        return var_dump($var);

    }else if(is_bool($var)){

        echo "<h1>Estas usando un boolean</h1>";
        return var_dump($var);

    }else if(is_int($var)){

        echo "<h1>Estas usando un numero</h1>";
        return var_dump($var);

    }

}


echo msjVar($var1);




?>