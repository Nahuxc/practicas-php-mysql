<?php

if(isset($_GET["numero"])){
    
    $numeroGet = $_GET["numero"];
    $numeroGet2 = $_GET["numero2"];

    for($i = $numeroGet; $i <= $numeroGet2; $i++){
        if($i %2 != 0){
            echo "<h4>$i es impar</h4>";
        }else{
            echo "<h4>$i es par</h4>";
        }
    }
}

?>