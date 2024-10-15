<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=URL_PATH?>/Assets/css/styles.css">
    <script src="<?=URL_PATH?>/Assets/js/scripts.js"></script>
    <title>Document</title>
</head>
<body>
    <?php 
    
    /* vamos enviar el contenido de las vistas atraves de esta variable */
    echo $content; // de esta forma se cargarian todas las vistas que vayamos teniendo para renderizar
    
    ?>
</body>
</html>