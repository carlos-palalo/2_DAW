<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilos.css" rel="stylesheet" type="text/css">
    <title>Ej8_PHP</title>
</head>

<body>
    <h1>Ej8 PHP - Colores</h1>
    <form name="ejercicio8" action="color2.php" method="POST">
        <fieldset>
            <legend>Elige un color</legend>
            <input type='radio' name='color' value='#ff0000' required>Rojo</br>
            <input type='radio' name='color' value='#ffff00' required>Amarillo</br>
            <input type='radio' name='color' value='#0000ff' required>Azul</br>
            <input type='radio' name='color' value='#008000' required>Verde</br>
            <input type='radio' name='color' value='#ffa500' required>Naranja</br><br>

            <input type="submit" value="Enviar">
            <input type="reset" value="Borrar">
        </fieldset>
    </form>
</body>

</html>