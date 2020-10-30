<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilos.css" rel="stylesheet" type="text/css">
    <title>Ej20_PHP</title>
</head>

<body>
    <h1>Ejercicio 20 - PHP</h1>
    <form name="ejercicio20a" action="ejercicio20b.php" method="post">
        <fieldset>
            Entre el 1 y el 10, ¿cuáles de estos números están?<br>
            <input type='radio' name="res" value="1" checked> 1<br>
            <input type='radio' name="res" value="20"> 20<br>
            <input type='radio' name="res" value="30">30<br>
            <input type='radio' name="res" value="-3">-3<br>

            <input type="submit" value="Enviar">
            <input type="reset" value="Borrar">
        </fieldset>
    </form>
</body>

</html>