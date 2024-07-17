<!-- el include nos ayuda a mantener un orden y no repetir codigo innecesario de esta forma lograr mantener un codigo mas limpio -->


<?php  include "includes/navbar.php" ?>



    <div class="content" >
        <h2>Pagina de inicio</h2>
        <p>Texto de prueba</p>
        <h2>Bienvenido <strong> <?php echo $nombre; ?> </strong>  </h2> <!-- podemos usar la variable creada en el navabar -->
    </div>

<!-- tambien tenemos otras funciones de include -->

<!-- como include_once hace que se incluya el contenido 1 vez -->
 
<?php include_once "includes/footer.php"?>
<?php include_once "includes/footer.php"?>
<?php include_once "includes/footer.php"?>
<?php include_once "includes/footer.php"?>


<!-- despues tenemos otro metodo que es el require que la diferencia con el include es que el require si tira error hace que se detenga la ejecucion y el include no, deja que el programa continue  -->


<!-- require -->

<!-- require_once es el mas estricto y que mas nos puede ayudar en cuanto a funcionalidad buena -->

