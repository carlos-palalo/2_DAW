<?php

session_start();

echo'<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="css/login.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div class="login" >
<h1>Login</h1>
<form method="post" action="../Controller/administrar_usuario.php">
    <input type="text" name="usuario" placeholder="Username" required="required" />
    <input type="password" name="pass" placeholder="Password" required="required" />
    <button type="submit" name="btn_login" class="btn btn-primary btn-block btn-large">Log in.</button>
</form>
</div>
</body>
</html>';