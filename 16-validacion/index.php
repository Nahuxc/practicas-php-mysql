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
            if($error == "faltan_valores"){
                echo "<h1>$error</h1>";
            }
        }

    ?>

    <form action="procesar_formulario.php" method="POST">

        <label for="name">Name</label>
        <input required pattern="[A-Za-z]+" type="text" name="name">

        <br>

        <label for="surname">Surname</label>
        <input required pattern="[A-Za-z]+" type="text" name="surname">

        <br>

        <label for="edad">edad</label>
        <input required pattern="[0-9]+" type="number" name="edad">


        <br>

        <label for="email">email</label>
        <input required type="email" name="email">

        <br>

        <label for="password">password</label>
        <input  type="password" name="password">

        <br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>