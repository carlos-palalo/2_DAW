<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilos.css" rel="stylesheet" type="text/css">
    <title>Ej10_PHP</title>
</head>

<body>

    <h1>Ejercicio 10 - PHP</h1>
    <form name="ejercicio21" action="ejercicio21b.php" method="post">
        <fieldset>
            <legend>Formulario</legend>
            ¿Cómo es el caballo blanco de Santiago?<br>
            <input type='radio' name='res' value='Negro' required checked>Negro</br>
            <input type='radio' name='res' value='Rojo' required>Rojo</br>
            <input type='radio' name='res' value='Blanco' required>Blanco</br>
            <input type='radio' name='res' value='Amarillo' required>Amarillo</br>

            Entre el 1 y el 10, ¿cuáles de estos números están?<br>
            <input type='radio' name="res2" value="1"> 1<br>
            <input type='radio' name="res2" value="20"> 20<br>
            <input type='radio' name="res2" value="30">30<br>
            <input type='radio' name="res2" value="3">3<br>

            <input type="submit" value="Enviar">
            <input type="reset" value="Borrar">
        </fieldset>

    </form>

</body>

</html>