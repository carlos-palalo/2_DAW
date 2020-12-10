<!DOCTYPE html>
<?php
session_start();
$_SESSION['cesta'] = array();
if (!isset($_SESSION['flagUser'])) {
    $_SESSION['flagUser'] = false;
}
if (!isset($_SESSION['usuario'])) {
    $_SESSION['usuario'] = "";
}
if (!isset($_SESSION['flagAdmin'])) {
    $_SESSION['flagAdmin'] = false;
}
if (!isset($_SESSION['id'])) {
    $_SESSION['id'] = "";
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <style>
        body {
            margin: 0px;
            padding: 0px;
            background-image: url("img/fondo.jpg");
        }

        .btn-entrar {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-left: -100px;
            margin-top: -50px;
        }

        .btn-entrar a {
            font-size: xx-large;
            text-decoration: none;
            color: white;
            background-color: #ee6e73;
            padding: 30px 50px;
            border-radius: 20px;
            transition: background-color, color 1s;
        }

        .btn-entrar a:hover {
            background-color: white;
            color: black;
        }
    </style>
    <script>
    </script>
</head>

<body>
    <div class="btn-entrar"><a href="productos.php">Entrar</a></div>
</body>

</html>