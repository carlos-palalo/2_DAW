<!DOCTYPE html>
<html>
<?php
try {
    session_start();
    require "conexion.php";
    if (!$_SESSION['flagUser']) {
        echo '<script>alert("No dispones de los permisos necesarios para acceder")</script>';
        echo '<script>location.href="productos.php"</script>';
    }
    $informacion = true;
    $pedidos = false;
    $productos = false;
    $nombreTabla = "usuario";
    $info =  $bd->prepare('SELECT * FROM ' . $nombreTabla . ' WHERE id_Usuario = ' . $_SESSION['id']);
    if (isset($_REQUEST['btn-cambiar'])) {
        $info->execute();
        $fila = $info->fetch(PDO::FETCH_OBJ);
        $passAct = sha1(htmlspecialchars($_REQUEST['pass_actual']));
        $passNue = sha1(htmlspecialchars($_REQUEST['pass_nueva']));
        $passIgu = sha1(htmlspecialchars($_REQUEST['pass_igual']));
        if ($passAct == $fila->password) {
            if ($passAct == $passNue || $passAct == $passIgu) {
                echo '<script>alert("Introduce una contraseña diferente a la actual")</script>';
            } else {
                if ($passNue == $passIgu) {
                    $cambio = $bd->prepare('UPDATE usuario SET password = "' . $passNue . '" WHERE id_Usuario=' . $_SESSION['id'] . '');
                    $cambio->execute();
                    if ($cambio->rowCount() != 0) {
                        echo '<script>alert("Contraseña cambiada con éxito")</script>';
                    } else {
                        echo '<script>alert("No se ha podido cambiar la contraseña")</script>';
                    }
                } else {
                    echo '<script>alert("Las contraseñas nuevas deben ser iguales")</script>';
                }
            }
        } else {
            echo '<script>alert("Por favor, escribe la contraseña actual")</script>';
        }
    }
    if (isset($_REQUEST['desconectar'])) {
        $_SESSION['flagUser'] = false;
        $_SESSION['usuario'] = "";
        $_SESSION['flagAdmin'] = false;
        $_SESSION['id'] = "";
        echo '<script>alert("Desconectando...")</script>';
        echo '<script>location.href="productos.php"</script>';
    }
    if (isset($_REQUEST['base'])) {
        echo '<script>location.href="admin/index.php"</script>';
    }
    if (isset($_REQUEST['tabla_name'])) {
        $nombreTabla = $_REQUEST['tabla_name'];
    }
    if (isset($_REQUEST['pedidos'])) {
        $nombreTabla = "pedido";
        $informacion = false;
        $productos = false;
        $pedidos = true;
        $cad = 'SELECT num_pedido,fecha_compra,precio_final,fecha_entrega,c.id_cesta,group_concat(id_producto) as id_producto from cesta c, pedido p where c.id_cesta=p.id_cesta and p.id_Usuario =' . $_SESSION['id'];
        $cad .= ' group by num_pedido';
        $columnas = $bd->prepare('SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = "pedido" and column_name not in ("destino","metodo_pago","numTarjeta","id_Usuario")');
        $info = $bd->prepare($cad);
    }
    if (isset($_REQUEST['productos'])) {
        $nombreTabla = "producto";
        $informacion = false;
        $pedidos = false;
        $productos = true;
        $cad = 'select p.id_producto, nombre, talla, pvp, marca, sexo, categoria, c.cantidad from producto p, cesta c, pedido u where u.id_Usuario = ' . $_SESSION['id'] . ' and u.id_Cesta = c.id_Cesta and c.id_producto = p.id_producto';
        $columnas = $bd->prepare('SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = "producto" and column_name not in ("precio_Original","cantidad","fecha_proveedor","id_proveedor")');
        $info = $bd->prepare($cad);
    }
    if (isset($_REQUEST['btn-actualizar'])) {
        $cad = 'UPDATE USUARIO SET username="' . $_REQUEST['username'] . '", email="' . $_REQUEST['email'] . '"';
        if ($_REQUEST['tlf'] != "") {
            $cad .= ', tlf=' . $_REQUEST['tlf'] . '';
        }
        $cad .= " WHERE id_Usuario=" . $_SESSION['id'] . "";
        $actu = $bd->prepare($cad);
        $actu->execute();
        if ($actu->rowCount() != 0) {
            $_SESSION['usuario'] = $_REQUEST['username'];
            echo '<script>alert("Datos cambiados con éxito")</script>';
        } else {
            echo '<script>alert("No se han podido cambiar los datos o no los ha cambiado")</script>';
        }
    }
    if (isset($_REQUEST['btn-ordenar']) || isset($_REQUEST['btn-buscar'])) {
        switch ($_REQUEST['tabla_name']) {
            case "pedido":
                $nombreTabla = "pedido";
                $informacion = false;
                $productos = false;
                $pedidos = true;
                $cad = 'SELECT num_pedido,fecha_compra,precio_final,fecha_entrega,c.id_cesta,group_concat(id_producto) as id_producto from cesta c, pedido p where c.id_cesta=p.id_cesta and p.id_Usuario =' . $_SESSION['id'];
                if (isset($_REQUEST['columna']) && isset($_REQUEST['campo']) && $_REQUEST['columna'] != "" && $_REQUEST['campo'] != "") {
                    if ($_REQUEST['columna'] == "id_Cesta")
                        $cad .= ' and c.' . $_REQUEST['columna'] . ' = "' . $_REQUEST['campo'] . '"';
                    else
                        $cad .= ' and ' . $_REQUEST['columna'] . ' = "' . $_REQUEST['campo'] . '"';
                }
                $cad .= ' group by num_pedido';
                if (isset($_REQUEST['orden']) && isset($_REQUEST['tipo_orden']) && $_REQUEST['tipo_orden'] != "" && $_REQUEST['orden'] != "") {
                    $cad .= ' ORDER BY ' . $_REQUEST['orden'] . ' ' . $_REQUEST['tipo_orden'];
                }
                $columnas = $bd->prepare('SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = "pedido" and column_name not in ("destino","metodo_pago","numTarjeta","id_Usuario")');
                $info = $bd->prepare($cad);
                break;
            case "producto":
                $nombreTabla = "producto";
                $informacion = false;
                $pedidos = false;
                $productos = true;
                $cad = 'select p.id_producto, nombre, talla, pvp, marca, sexo, categoria, c.cantidad from producto p, cesta c, pedido u where u.id_Usuario = ' . $_SESSION['id'] . ' and u.id_Cesta = c.id_Cesta and c.id_producto = p.id_producto';
                if (isset($_REQUEST['columna']) && isset($_REQUEST['campo']) && $_REQUEST['columna'] != "" && $_REQUEST['campo'] != "") {
                    if ($_REQUEST['columna'] == "id_producto")
                        $cad .= ' and p.' . $_REQUEST['columna'] . ' = "' . $_REQUEST['campo'] . '"';
                    else
                        $cad .= ' and ' . $_REQUEST['columna'] . ' = "' . $_REQUEST['campo'] . '"';
                }
                if (isset($_REQUEST['orden']) && isset($_REQUEST['tipo_orden']) && $_REQUEST['tipo_orden'] != "" && $_REQUEST['orden'] != "") {
                    $cad .= ' ORDER BY ' . $_REQUEST['orden'] . ' ' . $_REQUEST['tipo_orden'];
                }
                $columnas = $bd->prepare('SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = "producto" and column_name not in ("precio_Original","cantidad","fecha_proveedor","id_proveedor")');
                $info = $bd->prepare($cad);
                break;
        }
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
        header,
        main,
        footer {
            padding-left: 300px;
        }

        body {
            margin: 0px;
            padding: 0px;
        }

        .row {
            margin-bottom: 0px !important;
        }

        .top-nav {
            padding-right: 300px;
        }

        .container-filtro {
            width: 100%;
            background-color: whitesmoke;
            padding-left: 15px;
            padding-right: 15px;
        }

        .filtro {
            margin: 10px 0px;
        }

        .filtro label {
            color: black;
            font-size: medium;
            padding-left: 10px;
        }

        .filtro button {
            padding: 3px 0px;
            min-width: fit-content;
            width: 100%;
        }

        table {
            margin: 0 auto;
            width: fit-content;
        }

        table td {
            padding: 0px;
            width: fit-content;
        }

        table input {
            text-align: center;
        }

        .logo {
            padding-top: 30px;
        }

        .logo a {
            margin: 0 auto;
            height: 100% !important;
            width: 200px !important;
            margin-bottom: 30px;
        }

        .logo img {
            width: 100%;
        }

        #search {
            font-size: 16px;
            width: 80% !important;
        }

        .input-field {
            margin-left: 30px;
        }

        .label-icon {
            right: 10px;
        }

        ul .f:hover {
            transition: background-color 0.5s;
            background-color: gainsboro;
            cursor: pointer !important;
        }

        ul .f {
            font-weight: bold;
        }

        ul .f input {
            background-color: white;
            border: none;
            width: 100%;
            line-height: 48px;
        }

        ul .f input:hover {
            transition: background-color 0.5s;
            background-color: gainsboro;
        }

        .cesta {
            padding: 15px !important;
            margin-top: 20px;
        }

        .cesta .info div {
            margin-bottom: 30px;
            margin-top: 30px;
        }

        .precio {
            font-weight: bold;
        }

        .browser-default * {
            font-weight: bold;
        }

        form button:hover {
            background-color: black !important;
            color: white !important;
            opacity: 0.9;
        }

        .busqueda {
            font-size: large;
            font-weight: bold;
            text-align: center;
            padding-top: 50px;
            height: 150px;
            width: 100%;
            left: 150px;
            position: fixed;
            background-color: white;
            z-index: 1;
        }

        input {
            margin-bottom: 5px !important;
            text-align: center;
        }

        img {
            width: 100%;
        }

        .info {
            margin-top: 50px;
        }

        .info div {
            margin-bottom: 20px;
        }

        .info .input {
            padding: 0px 10px;
            width: 300px;
        }

        .info button {
            margin-left: 30px;
        }

        #tlf input,
        #email input,
        #user input {
            width: 200px;
            color: grey;
        }

        #actu {
            margin-left: 90px;
            margin-bottom: 30px;
        }

        #pass {
            margin-left: 20px;
        }

        #user::before {
            content: "Nombre de Usuario: ";
            font-weight: bold;
        }

        #email::before {
            content: "Correo electrónico: ";
            font-weight: bold;
        }

        #tlf::before {
            content: "Número de Teléfono: ";
            font-weight: bold;
        }

        #fecha::before {
            content: "Fecha de Creación: ";
            font-weight: bold;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);
        });
    </script>
</head>

<body>
    <header>
        <div class="navbar-fixed">
            <nav class="top-nav">
                <div class="container">
                    <div class="nav-wrapper">
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
            </nav>
        </div>
        <ul class="side-nav left fixed">
            <li class="logo">
                <a id="logo-container" href="productos.php" class="brand-logo">
                    <img src="img/logo.png" alt="Logo">
                </a>
            </li>
            <form method="POST">
                <?php
                echo '<input type="hidden" name="tabla_name" value="' . $nombreTabla . '">';
                ?>
                <li class="f"><input type="submit" name="info" value="INFORMACIÓN"></li>
                <li class="f"><input type="submit" name="pedidos" value="PEDIDOS"></li>
                <li class="f"><input type="submit" name="productos" value="PRODUCTOS"></li>
                <?php
                try {
                    if ($_SESSION['flagAdmin'])
                        echo '<li class="f"><input type="submit" name="base" value="BASE DATOS"></li>';
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
                ?>
                <li class="f"><input type="submit" name="desconectar" value="DESCONECTAR"></li>
            </form>
        </ul>
    </header>
    <main>
        <form method="POST">
            <?php
            if (!$informacion) {
                echo '<div class="container-filtro">
                    <div class="container">
                        <div class="row">
                            <input type="hidden" name="tabla_name" value="' . $nombreTabla . '">
                            <div class="filtro col s12 m4">
                                <select name="orden" class="browser-default">
                                    <option value="" selected>Ordenar por...</option>';
                try {
                    $columnas->execute();
                    while ($fila = $columnas->fetch(PDO::FETCH_OBJ)) {
                        echo "<option value='" . $fila->COLUMN_NAME . "'>" . $fila->COLUMN_NAME . "</option>";
                    }
                } catch (PDOException $e) {
                    echo "Error - " . $e->getMessage();
                }
                echo '
                                </select>
                            </div>
                            <div class="filtro col s12 m4">
                                <select name="tipo_orden" class="browser-default">
                                    <option value="">Tipo</option>
                                    <option value="ASC">Ascendente</option>
                                    <option value="DESC">Descendente</option>
                                </select>
                            </div>
                            <div class="filtro col s12 m4">
                                <button class="btn white black-text lighten-1" type="submit" name="btn-ordenar">Ordenar</button>
                            </div>
                        </div>
                        <div class="row"><input type="hidden" name="tabla_name" value="' . $nombreTabla . '">
                            <div class="filtro col s12 m4">
                                <select name="columna" class="browser-default">
                                    <option value="" selected>Buscar por...</option>';
                try {
                    $columnas->execute();
                    while ($fila = $columnas->fetch(PDO::FETCH_OBJ)) {
                        echo "<option value='" . $fila->COLUMN_NAME . "'>" . $fila->COLUMN_NAME . "</option>";
                    }
                } catch (PDOException $e) {
                    echo "Error - " . $e->getMessage();
                }

                echo '
                                </select>
                            </div>
                            <div class="filtro col s12 m4">
                                <input type="text" name="campo" placeholder="Introduce el valor">
                            </div>
                            <div class="filtro col s12 m4">
                                <button class="btn white black-text lighten-1" type="submit" name="btn-buscar">Buscar</button>
                            </div>
                        </div>
                    </div>
                </div>';
            }
            ?>
            <div class="container">
                <div class="row">
                    <?php
                    if (!$informacion) {
                        echo '
                    <div class="tabla col s12 m12">
                        <form id="tabla" method="POST">
                            <table class="highlight centered">
                                <thead>
                                    <tr>';
                        try {
                            $i = 0;
                            $columnas->execute();
                            while ($fila = $columnas->fetch(PDO::FETCH_OBJ)) {
                                $column[$i] = $fila->COLUMN_NAME;
                                echo "<th>" . $column[$i] . "</th>";
                                $i++;
                            }
                            if ($pedidos) {
                                $column[$i] = "id_producto";
                            } else {
                                $column[$i] = "cantidad";
                            }
                            echo "<th>" . $column[$i] . "</th>";

                            echo "
                                </tr>
                            </thead>
                        <tbody>";
                            $numFilas = 0;
                            $info->execute();
                            if ($info->rowCount() != 0) {
                                while ($fila = $info->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                                    $i = 0;
                                    $numFilas++;
                                    echo "<tr>";
                                    foreach ($fila as $value) {
                                        echo "<td><input type='text' name='" . $column[$i] . "" . $numFilas . "' value='" . $value . "' readonly></td>";
                                        $i++;
                                    }
                                    echo "</tr>";
                                }
                                echo '<input type="hidden" name="numFilas" value="' . $numFilas . '">';
                            } else {
                                echo "<div class='busqueda'>Lo siento, no se han encontrado resultados acordes con la búsqueda</div>";
                            }
                            echo "
                                    </tbody>
                                </table>
                            </form>
                        </div>";
                        } catch (PDOException $e) {
                            echo "Error - " . $e->getMessage();
                        }
                    } else {
                        echo '<div class="info col s12 m12">';
                        $info->execute();
                        $fila = $info->fetch(PDO::FETCH_OBJ);
                        echo '
                            <form method="POST">
                                <div id="user">
                                    <input type="text" name="username" value="' . $fila->username . '" pattern="^[a-z0-9_-]{3,16}$" title="Debe tener entre 3 y 16 letras minúsculas, números o carácteres especiales (_ -)">
                                </div>
                                <div id="email">
                                    <input type="text" name="email" value="' . $fila->email . '" pattern="^[^@]+@[^@]+\.[a-zA-Z]{2,}$" title="Formato válido: email@ejemplo.com">
                                </div>
                                <div id="tlf">
                                    <input type="text" name="tlf" value="' . $fila->tlf . '" pattern="\d{9}" title="Introduce un número de teléfono de 9 dígitos válido">
                                </div>
                                <button id="actu" class="btn white black-text lighten-1" type="submit" name="btn-actualizar">Actualizar</button>
                            </form>
                            <div id="fecha">' . $fila->fecha_creacion . '</div>
                            <form id="pass" method="POST">
                                <div class="input">
                                    <input type="password" name="pass_actual" pattern="^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$" title="La contraseña debe tener al entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula." placeholder="Ingrese la contraseña actual" required>
                                </div>
                                <div class="input">
                                    <input type="password" name="pass_nueva" pattern="^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$" title="La contraseña debe tener al entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula." placeholder="Ingrese la contraseña nueva" required>
                                </div>
                                <div class="input">
                                    <input type="password" name="pass_igual" pattern="^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$" title="La contraseña debe tener al entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula." placeholder="Confirme la contraseña nueva" required>
                                </div>
                                <button class="btn white black-text lighten-1" type="submit" name="btn-cambiar">Cambiar contraseña</button>
                            </form>
                        </div>';
                    }
                    ?>

                </div>
            </div>
        </form>
    </main>
</body>

</html>