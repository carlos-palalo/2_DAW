<!DOCTYPE html>
<html>
<?php
try {
    session_start();
    require "conexion.php";
    if ($_SESSION['flagUser']) {
        echo "<script>alert('Ya estas logueado. Volviendo a productos')</script>";
        echo '<script>location.href="productos.php"</script>';
    }
    if (isset($_REQUEST['btn-iniciar'])) {
        $flagUser = false;
        $flagAdmin = false;
        $usuarios = $bd->prepare('SELECT id_Usuario,username,password,tipo FROM usuario');
        $user = htmlspecialchars($_REQUEST['username']);
        $contraseña = sha1(htmlspecialchars($_REQUEST['password']));
        $usuarios->execute();
        while ($fila = $usuarios->fetch(PDO::FETCH_OBJ)) {
            if ($fila->username == $user && $fila->password == $contraseña) {
                $flagUser = true;
                $_SESSION['id'] = $fila->id_Usuario;
                if ($fila->tipo == "admin") {
                    $flagAdmin = true;
                }
            }
        }
        if ($flagUser) {
            $_SESSION['flagUser'] = true;
            $_SESSION['usuario'] = $user;
            echo "<script>alert('Bienvenido, " . $_SESSION['usuario'] . "')</script>";
            echo '<script>location.href="productos.php"</script>';
            if ($flagAdmin) {
                $_SESSION['flagAdmin'] = true;
            }
        }
    }
    if (isset($_REQUEST['btn-registro'])) {
        $usuario = htmlspecialchars($_REQUEST['username-r']);
        $email = htmlspecialchars($_REQUEST['correo-r']);
        $tlf = htmlspecialchars($_REQUEST['tlf-r']);
        if ($tlf == "") {
            $tlf = "null";
        }
        $contraseña = htmlspecialchars($_REQUEST['password-r']);
        echo $usuario;
        $cad = 'INSERT INTO USUARIO (email,username,password,tipo,tlf,fecha_creacion) VALUES("' . $email . '","' . $usuario . '","' . sha1($contraseña) . '","normal",' . $tlf . ',sysdate())';
        $insert = $bd->prepare($cad);
        $insert->execute();
        if ($insert->rowCount() != 0) {
            $usuarios = $bd->prepare('SELECT id_Usuario,username,password,tipo FROM usuario');
            $usuarios->execute();
            while ($fila = $usuarios->fetch(PDO::FETCH_OBJ)) {
                if ($fila->username == $usuario && $fila->password == sha1($contraseña)) {
                    echo "a";
                    $_SESSION['flagUser'] = true;
                    $_SESSION['usuario'] = $usuario;
                    $_SESSION['id'] = $fila->id_Usuario;
                }
            }
            echo "<script>alert('Bienvenido, " . $_SESSION['usuario'] . "')</script>";
            echo '<script>location.href="productos.php"</script>';
        } else
            echo "<script>alert('Error al crear el usuario')</script>";
    }
} catch (PDOException $e) {
    echo "Error - " . $e->getMessage();
}
?>

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
        }

        .logo {
            padding-top: 30px;
        }

        .logo a {
            margin: 0 auto;
            height: 100% !important;
            width: 200px !important;
        }

        .logo img {
            width: 100%;
        }

        button {
            width: 100%;
            font-weight: bold;
            box-shadow: 0 0 0 2px black !important;
            border-radius: 0px !important;
        }

        form button:hover {
            background-color: black !important;
            color: white !important;
            opacity: 0.9;
        }

        .formulario {
            width: 500px;
        }

        .row form {
            margin: 50px auto 30px;
            padding-top: 5px;
            padding-left: 20px;
            padding-right: 20px;
            padding-bottom: 15px;
        }

        form p {
            font-weight: bold;
            font-size: medium;
        }

        form .titulo {
            font-size: x-large;
        }

        .input-field {
            margin: 0px auto;
            width: 100%;
            padding-right: 10px;
        }

        .input-field input {
            border: none !important;
            box-shadow: 0 0 0 1px black !important;
            padding-left: 10px !important;
        }

        .input-field input:hover,
        .input-field input:focus {
            border: 1px solid black !important;
            box-shadow: 0 0 0 2px black !important;
        }

        #btn-ini,
        #registro {
            display: none;
        }
    </style>
    <script>
        function cambiar(elemento) {
            var inicio = document.getElementById("inicio");
            var registro = document.getElementById("registro");
            var btn_ini = document.getElementById("btn-ini");
            var btn_reg = document.getElementById("btn-reg");

            switch (elemento.id) {
                case "btn-ini":
                    inicio.style.display = "block";
                    btn_ini.style.display = "none";
                    registro.style.display = "none";
                    btn_reg.style.display = "block";
                    break;
                case "btn-reg":
                    inicio.style.display = "none";
                    btn_ini.style.display = "block";
                    registro.style.display = "block";
                    btn_reg.style.display = "none";
                    break;
            }
        }
    </script>
</head>

<body>
    <header>
        <div class="navbar-fixed">
            <nav class="top-nav">
                <div class="container">
                    <div class="row">
                        <div class="nav-wrapper col s12 m12">
                            <a href="productos.php" class="brand-logo">Roupalia</a>
                            <ul id="nav-mobile" class="right hide-on-med-and-down">
                                <li><a href="productos.php">Productos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <form class="formulario" id="login" method="POST">
                    <p class="titulo">Bienvenido</p>
                    <div id="inicio">
                        <div class="input-field">
                            <input placeholder="Nombre de usuario*" name="username" type="text" pattern="^[a-z0-9_-]{3,16}$" title="Debe tener entre 3 y 16 letras minúsculas, números o carácteres especiales (_ -)" required>
                        </div>
                        <div class="input-field">
                            <input name="password" type="password" placeholder="Contraseña*" required>
                        </div>
                        <button class="btn black lighten-1" type="submit" name="btn-iniciar">Iniciar sesión</button>
                    </div>
                    <button type="button" id="btn-ini" class="btn white lighten-1 black-text" name="iniciar" onclick="cambiar(this)">Iniciar sesión</button>
                </form>
                <hr>
                <form class="formulario" id="register" method="POST">
                    <p class="titulo">Soy nuevo/a</p>
                    <div id="registro">
                        <div class="input-field">
                            <input placeholder="Nombre de Usuario*" name="username-r" type="text" pattern="^[a-z0-9_-]{3,16}$" title="Debe tener entre 3 y 16 letras minúsculas, números o carácteres especiales (_ -)" required>
                        </div>
                        <div class="input-field">
                            <input placeholder="Correo Electrónico*" name="correo-r" type="email" pattern="^[^@]+@[^@]+\.[a-zA-Z]{2,}$" title='Formato válido: email@ejemplo.com' required>
                        </div>
                        <div class="input-field">
                            <input placeholder="Teléfono (opcional)" name="tlf-r" type="tel" pattern="\d{9}" title="Introduce un número de teléfono de 9 dígitos válido">
                        </div>
                        <div class="input-field">
                            <input placeholder="Contraseña*" name="password-r" type="password" pattern="^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$" title="La contraseña debe tener al entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula." required>
                        </div>
                        <p>Al crear una cuenta, aceptas los <a href="#">términos y condiciones</a> y <a href="#">la política
                                de privacidad</a></p>
                        <button class="btn black lighten-1" type="submit" name="btn-registro">Registrarse</button>
                    </div>
                    <button type="button" id="btn-reg" class="btn white lighten-1 black-text" name="registro" onclick="cambiar(this)">Registrarse</button>
                </form>
            </div>
        </div>
    </main>
</body>

</html>