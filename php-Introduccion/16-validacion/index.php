<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Validar datos con php</h1>

    <?php
        if(isset($_GET["error"])){
            $error = $_GET["error"];
            if($error == "faltan_valores" || $error == "error nombre" || $error == "error apellido" || $error = "error edad" || $error == "error email" || $error == "error password" ){
                echo "<h1>$error</h1>";
            }
        }

    ?>

    <form action="procesar_formulario.php" method="POST">

        <label for="name">Name</label>
        <input  type="text" name="name">

        <br>

        <label for="surname">Surname</label>
        <input  type="text" name="surname">

        <br>

        <label for="edad">edad</label>
        <input  type="number" name="edad">


        <br>

        <label for="email">email</label>
        <input  type="email" name="email">

        <br>

        <label for="password">password</label>
        <input  type="password" name="password">

        <br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>