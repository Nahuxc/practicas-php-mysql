
<?php

/* crear variable */
$name = "jorge";


for ($i=0; $i <= 100 ; $i++) {

    echo $i."<br>";

    if($i % 2 == 1){
        echo "son pares ";
    }else{
        echo "son impares ";
    }

}

$contador = 1;

while ($contador <= 40) {
    echo "el cuadrado de $contador es ".($contador * $contador)."<br>";
    $contador++;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> hola mundo <?php echo $name; ?> </h2>

    <!-- abreviacion del echo / sintaxis -->
    <?= $name; ?>
    
    <?php
        //ejemplo de concatenacion en php con el .
        echo "<p>como estas</p>".$name;
        echo "<ul>"
            ."<li>gta</li>"
            ."<li>spiderman</li>"
            ."</ul>";
    ?>

</body>
</html>