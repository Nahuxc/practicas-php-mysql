<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data" action="upload.php">
            <input type="file" name="archivo">
            <input type="submit" value="Enviar">
    </form>

    <h1>Listado de imagenes</h1>

    <?php

    /* abrimos el directorio */
    $gestor = opendir("./images");

    
    if($gestor):

        /* leemos el directorio y mientras sea true va a estar iterando y cuando sea false va a frenar la ejecucion */
        while(($image = readdir($gestor)) !== false):

            /* sacamos los . y .. que vienen por defecto */
            if($image != "." && $image != ".."):

                /* imprimimos las imagenes dentro del directorio */
                echo "<img src='images/$image' width='200px' /> <br>";
            endif;
        endwhile;
    endif;


    
    ?>

</body>
</html>