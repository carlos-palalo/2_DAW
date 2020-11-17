<?php
session_start();

if (isset($_REQUEST['btn_login'])) {
    $_SESSION['email'] = htmlspecialchars($_REQUEST['email']);
    $password = htmlspecialchars($_REQUEST['password']);
    if ($_SESSION['email'] == "juan@gmail.com" && $password == "juan") {
        $_SESSION['logueado'] = true;
        header('Location: menu/menu.php');
    } else {
        echo "<script>alert('Email/Contraseña incorrectos');</script>";
    }
}
echo '
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <meta charset="utf-8" />
    <title>Practica Apache - DAW</title>
</head>

<body>
    <div id="login">
        <form name="practicaApache" action="" method="POST">
            <legend>LOG IN</legend>
            <input type="email" name="email" placeholder="Email" /><br>
            <input type="password" name="password" placeholder="Password" /><br>
            <input name="btn_login" type="submit" value="Log In" />
        </form>
    </div>
</body>

</html>

';

?>
<?php
if (!empty($_REQUEST)) {
}
