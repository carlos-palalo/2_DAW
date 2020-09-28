<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilos.css" rel="stylesheet" type="text/css">
    <title>Ej10_PHP</title>
</head>

<body>

    <h1>Ejercicio 10 - PHP</h1>
    <form name="ejercicio9" action="visor2.php" method="post">
        <fieldset>
            <legend>Formulario</legend>
            Nombre:
            <input type='text' name='nombre' value='' size=25 required><br>

            Apellidos:
            <input type='text' name='apellidos' value='' size=25 required><br>

            ¿Qué edad tienes?<br>
            <input type='radio' name='edad' value='< 15' required>&lt; 15</br>
            <input type='radio' name='edad' value='15 > 25' required>15 &lt; 25</br>
            <input type='radio' name='edad' value='25 > 50' required>25 &lt; 50</br>
            <input type='radio' name='edad' value='< 50' required>&gt; 50</br>

            Entre el 1 y el 10, ¿cuáles de estos números están?<br>
            <input type='checkbox' name="r1" value="1"> 1<br>
            <input type='checkbox' name="r2" value="20"> 20<br>
            <input type='checkbox' name="r3" value="30">30<br>
            <input type='checkbox' name="r4" value="3">3<br>

            <input type="submit" value="Enviar">
            <input type="reset" value="Borrar">
        </fieldset>

    </form>

</body>

</html>