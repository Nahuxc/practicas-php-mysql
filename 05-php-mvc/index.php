<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola Mundo MVC</h1>

    <!-- por ultimo podemos llamarlo al index y imprimir la vista -->

    <?php 
    
    /* controlador del usuario */
    require_once "./controllers/user.php";

    /* controlador de notas */
    require_once "./controllers/nota.php";




    //a esto se le llama controlador frontal se encarga de cargar ficheros

    if(isset($_GET["controller"])){
        $nombreController = $_GET["controller"]."Controller";
    }else{
        echo "la pagina que buscas no existe";
        exit();
    }

    if(isset($nombreController) && class_exists($nombreController)){

        $controlador = new $nombreController();

        $method_name = $_GET["action"];

        if(isset($method_name) && method_exists($controlador, $method_name)){
            $action = $_GET["action"];
            $controlador->$action();
        }else{
            echo "la pagina que buscas no existe";
        }

    }else{
        echo "la pagina que buscas no existe";
    }





    ?>

</body>
</html>
