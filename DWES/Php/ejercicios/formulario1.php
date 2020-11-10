<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilos9.css" rel="stylesheet" type="text/css">
    <title>Ej9_PHP</title>
</head>

<body>

    <h1>Formulario</h1>
    <form name="ejercicio9" action="visor1.php" method="post">

        Nombre:
        <input type='text' name='nombre' value='' size=25 required><br>

        Apellidos:
        <input type='text' name='apellidos' value='' size=25 required><br>

        Direccion:
        <input type='text' name='direccion' value='' size=25 required><br>

        Tlf:
        <input type='tel' name='tlf' placeholder="666444999" pattern="[0-9]{3}[0-9]{3}[0-9]{3}" required><br>

        Email:
        <input type="email" name='email' value='' size=25 required><br>

        Títulos que posee:<br>

        <input type='checkbox' name="eso" value="ESO"> Educación Secundaria Obligatoria (ESO)<br>

        <input type='checkbox' name="gm" value="FP Grado Medio"> FP Grado Medio<br>

        <input type='checkbox' name="gs" value="FP Grado Superior">FP Grado Superior<br>

        <input type="submit" value="enviar">

        <input type="reset" value="borrar">
    </form>

</body>

</html>