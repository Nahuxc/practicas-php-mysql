<?php


/* 

ejercicio 3: programa que compruebe si una variable esta vacia y si esta vacia, rellenarla con texto en minuscula y mostrarlo en mayuscula y negrita.

*/


$variable = "";


if(empty($variable)){
    $variable .= "texto a rellenar";

    echo "<strong>".strtoupper($variable)."</strong>";
}else{
    
    echo "esta variable no esta vacia";

}



?>