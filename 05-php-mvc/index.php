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

    <?php require_once "./controllers/user.php";


    //a esto se le llama controlador frontal se encarga de cargar ficheros

    if($_GET["controller"] && class_exists($_GET["controller"])){
        $nombreController = $_GET["controller"];

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
