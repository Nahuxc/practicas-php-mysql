<!-- repaso de formularios -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<body>
    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/form-data">

        <label for="name">Name</label>
        <input type="text" name="name">

        <label for="surname">Surname</label>
        <input type="text" name="surname">

        <label for="email">Email</label>
        <input type="email" name="email">
        
        <label for="password">Password</label>
        <input type="password" name="password">

        <input type="submit" value="Enviar">
    </form>
</body>

    <!-- atributos para los input,
        autofocus="autofocus",

        disabled="disabled",

        maxlength="15"/minlength,

        pattener="[A-Z]+" indicamos un tipo de formato para enviar/ expresiones regulares,

        required="required" require que el campo este con informacion antes de enviar el formulario

        placeholder="apellido" indicamos con un nombre que hay que poner ese campo

        value="gomez" damos un valor por defecto al input

        -->

        <!-- textarea y select -->

        <!-- <textarea name="textarea" ></textarea>

        <select name="peliculas">
            <option value="dragonball">dragonball</option>
            <option value="batman">batman</option>
            <option value="spiderman">spiderman</option>
        </select> -->



</html>