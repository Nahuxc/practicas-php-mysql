<?php




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Formulario php</h1>
        <!-- en action mandamos a que pagina nos va a llevar el formulario -->
        <form action="./recibir.php" method="post">
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre">
            </p>

            <p>
                <label for="apellido">apellido</label>
                <input type="text" name="apellido">
            </p>

            <input type="submit" value="Enviar datos">
        </form>
    </div>
</body>
</html>