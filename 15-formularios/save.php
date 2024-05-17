<?php

$name= "";
$surname="";

if($_POST){

    /* operador ternario */
    $name = (isset($_POST["name"])) ? $_POST["name"]: "";
    $surname = (isset($_POST["surname"])) ? $_POST["surname"]: "";

    echo "<h1>$name $surname</h1>";

}




?>