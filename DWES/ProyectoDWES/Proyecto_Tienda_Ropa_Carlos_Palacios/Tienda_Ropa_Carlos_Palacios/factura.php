<!DOCTYPE html>
<html>
<?php
try {
    session_start();
    require "conexion.php";
    if (!$_SESSION['flagUser']) {
        echo '<script>alert("Necesitas estar logueado para realizar la factura. Redirigiendote");</script>';
        echo '<script>location.href="login.php"</script>';
    }
    if(empty($_SESSION['cesta'])){
        echo '<script>alert("No tienes nada en la cesta. Volviendo a productos");</script>';
        echo '<script>location.href="productos.php"</script>';
    }
    $total = 0;
    $productos = $bd->prepare("SELECT * FROM producto");
    $productos->execute();
    while ($fila = $productos->fetch(PDO::FETCH_OBJ)) {
        foreach ($_SESSION['cesta'] as $producto) {
            if ($producto['id'] == $fila->id_producto) {
                $total += $fila->pvp * $producto['cantidad'];
            }
        }
    }
    $total += $total * 21 / 100;
    if (isset($_REQUEST['comprar'])) {
        $error = false;
        $idcesta = $bd->prepare("SELECT MAX(id_cesta) AS id FROM cesta");
        $idcesta->execute();
        $idUlt = $idcesta->fetch(PDO::FETCH_OBJ);
        $idAct = $idUlt->id + 1;
        foreach ($_SESSION['cesta'] as $producto) {
            $cad = "INSERT INTO cesta VALUES (" . $idAct . "," . $producto['id'] . "," . $producto['cantidad'] . ")";
            $insercionCesta = $bd->prepare($cad);
            $insercionCesta->execute();
            if ($insercionCesta->rowCount() == 0) {
                echo '<script>alert("Error al insertar en la Cesta");</script>';
                $error = true;
            }
        }
        $cad = "INSERT INTO PEDIDO (fecha_compra,precio_final,destino,metodo_pago,numTarjeta,id_Usuario,id_Cesta) VALUES (sysdate()," . $total . ",'" . htmlspecialchars($_REQUEST['direccion']) . "','" . $_REQUEST['metodo_pago'] . "','" . htmlspecialchars($_REQUEST['numTarjeta']) . "'," . $_SESSION['id'] . "," . $idAct . ")";
        $insercionPedido = $bd->prepare($cad);
        $insercionPedido->execute();
        if ($insercionPedido->rowCount() == 0) {
            echo '<script>alert("Error al insertar en Pedidos");</script>';
            $error = true;
        }

        if (!$error) {
            echo '<script>alert("Gracias por confiar en nosotros");</script>';
            $_SESSION['cesta'] = array();
            echo '<script>location.href="productos.php"</script>';
        }
    }
} catch (Exception $e) {
    echo "<script>console.log('" . $e . "')</script>";
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
            background-color: whitesmoke;
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

        .input-field input::placeholder {
            color: gray;
        }

        .input-field input:hover,
        .input-field input:focus {
            border: 1px solid black !important;
            box-shadow: 0 0 0 2px black !important;
        }

        .boton {
            padding-left: 0.75em !important;
        }

        .radio {
            margin: 10px 0px;
        }

        .metodo_pago label {
            color: black;
        }

        .importe {
            margin-bottom: 30px;
        }
    </style>
    <script>
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
                                <?php
                                if ($_SESSION['usuario'] != "") {
                                    echo '<li><a href="cuenta.php">' . $_SESSION['usuario'] . '</a></li>';
                                } else {
                                    echo '<li><a href="login.php">Iniciar Sesión</a></li>';
                                }
                                ?>
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
                <form class="formulario" method="POST">
                    <p class="titulo col s12 m12">Factura</p>
                    <div class="input-field col s12 m4">
                        <input placeholder="Nombre*" name="nombre" pattern="^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$" title="Ejemplo: Juán Gómez" type="text" required>
                    </div>
                    <div class="input-field col s12 m8">
                        <input id="apellidos" name="apellidos" type="text" placeholder="Apellidos*" pattern="^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$" title="Ejemplo: Palacios Alonso" required>
                    </div>
                    <div class="input-field col s12 m12">
                        <input id="direccion" name="direccion" type="text" placeholder="Dirección*" required>
                    </div>
                    <div class="metodo_pago">
                        <p class="col s12 m12">Método de pago</p>
                        <div class="radio col s12 m12">
                            <input type="radio" id="contrareembolso" name="metodo_pago" value="contrareembolso" onclick="document.getElementById('numTarjeta').removeAttribute('required')" required>
                            <label for="contrareembolso">Contra reembolso</label>
                        </div>
                        <div class="radio col s12 m4">
                            <input type="radio" id="tarjeta" name="metodo_pago" value="tarjeta" onclick="document.getElementById('numTarjeta').setAttribute('required','')" required>
                            <label for="tarjeta">Tarjeta</label>
                        </div>
                        <div class="input-field col s12 m8">
                            <input id="numTarjeta" name="numTarjeta" type="text" pattern="^[0-9]{15,16}|(([0-9]{4}-){3}[0-9]{3,4})$" title="Número tarjeta entre 15 y 16 digitos con formato: 1234-1234-1234-1234-123 / 1234-1234-1234-1234 / 123456789012345" placeholder="Número Tarjeta">
                        </div>
                    </div>
                    <div class="importe col s12 m12">
                        <p class="col s12 m12">Importe Total: <?php echo number_format($total, 2) . " €"; ?></p>
                    </div>
                    <div class="boton">
                        <button class="btn white lighten-1 black-text" type="submit" name="comprar">Comprar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>