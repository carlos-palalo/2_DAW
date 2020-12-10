<!DOCTYPE html>
<html>
<?php
try {
    session_start();
    require "conexion.php";
    $categorias = $bd->prepare('SELECT categoria FROM producto GROUP BY categoria');
    $productos = $bd->prepare('SELECT * FROM producto');
    $productos_filtrados = $productos;
    $cad = 'SELECT * FROM producto';
    $where_cont = 0;
    $flag = false;
    if (isset($_REQUEST['btn-cesta'])) {
        $newCesta = array(
            'id' => $_REQUEST['product_id'],
            'cantidad' => htmlspecialchars($_REQUEST['cantidad'])
        );
        foreach ($_SESSION['cesta'] as $producto) {
            foreach ($producto as $key => $value) {
                if ($key == "id") {
                    if ($value == $newCesta['id']) {
                        $flag = true;
                    }
                }
            }
        }
        if (!$flag) {
            $_SESSION['cesta'][] = $newCesta;
        }
    }
    if (isset($_REQUEST['categoria'])) {
        setcookie('flag_categoria', "0", time() + (86400 * 30));
        if ($_REQUEST['categoria'] != "Todo") {
            $cad = 'SELECT * FROM producto WHERE categoria = "' . $_REQUEST['categoria'] . '"';
            setcookie('flag_categoria', "1", time() + (86400 * 30));
        }
        setcookie('cookie_categoria', $cad, time() + (86400 * 30));
    }
    if (isset($_REQUEST['btn-filtrar'])) {
        if (isset($_COOKIE['cookie_categoria'])) {
            if ($_COOKIE['flag_categoria'] != "0") {
                $cad = $_COOKIE['cookie_categoria'];
                $where_cont++;
            }
        }
        if ($_REQUEST['sexo'] != "") {
            if ($where_cont > 0) {
                $cad .= ' AND';
            } else {
                $cad .= ' WHERE';
            }
            $cad .= ' sexo = "' . $_REQUEST['sexo'] . '"';
            $where_cont++;
        }
        if ($_REQUEST['talla'] != "") {
            if ($where_cont > 0) {
                $cad .= ' AND';
            } else {
                $cad .= ' WHERE';
            }
            $cad .= ' talla = "' . $_REQUEST['talla'] . '"';
            $where_cont++;
        }
        if ($_REQUEST['marca'] != "") {
            if ($where_cont > 0) {
                $cad .= ' AND';
            } else {
                $cad .= ' WHERE';
            }
            $cad .= ' marca = "' . $_REQUEST['marca'] . '"';
            $where_cont++;
        }
        if ($_REQUEST['orden'] != "") {
            $cad .= " ORDER BY pvp " . $_REQUEST['orden'];
        }
    }
    $productos_filtrados = $bd->prepare($cad);
    $marca = $bd->prepare('SELECT marca FROM producto GROUP BY marca');
    $talla = $bd->prepare('SELECT talla FROM producto GROUP BY talla');
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
        header,
        main,
        footer {
            padding-left: 300px;
        }

        body {
            margin: 0px;
            padding: 0px;
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

        .logo {
            padding-top: 30px;
            margin-bottom: 18px;
        }

        .logo a {
            margin: 0 auto;
            height: 100% !important;
            width: 200px !important;
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

        .container-product {
            margin-top: 20px;
            display: inline-block;
            flex-wrap: wrap;
            padding: 10px !important;
        }

        .container-product a {
            text-decoration: none;
            color: black;
        }

        .container-product * {
            margin: 0px;
        }

        .container-product img {
            width: 100%;
            border-radius: 5px;
        }
        .container-product button{
            padding: 0px;
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

        .error {
            font-size: large;
            font-weight: bold;
            text-align: center;
        }

        #cesta {
            position: fixed;
            padding: 20px;
            top: 0px;
            right: 12%;
            background-color: white;
            font-size: 14px;
            color: black;
            box-shadow: 0px 0px 0px 1px gainsboro;
            font-weight: bold;
            transition: top 1s;
        }

        #error {
            position: fixed;
            padding: 40px;
            top: 40%;
            left: -10%;
            margin: 0 auto;
            font-size: large;
            color: black;
            background-color: white;
            box-shadow: 0 0 0 1px gainsboro;
            transition: left 2s;
        }

        [name="cesta"] button {
            width: 100%;
            font-weight: bold;
        }
    </style>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);
        });

        function cesta() {
            document.getElementById("cesta").style.top = "64px";
            setTimeout(function() {
                document.getElementById("cesta").style.top = "0px";
            }, 1500);
        }

        function error_cesta() {
            document.getElementById("error").style.left = "40%";
            setTimeout(function() {
                document.getElementById("error").style.left = "-10%";
            }, 3500);
        }
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
                            <li><a href="cesta.php">Cesta</a></li>
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
                <a id="logo-container" href="" class="brand-logo">
                    <img src="img/logo.png" alt="Logo">
                </a>
            </li>
            <form method="POST" name="categorias">
                <?php
                try {
                    echo "<li class='f'><input type='submit' name='categoria' value='Todo'></li>";
                    $categorias->execute();
                    while ($fila = $categorias->fetch(PDO::FETCH_OBJ)) {
                        #echo "<li class='f'><input type='submit' name='" . $fila->nombre . "' value='" . $fila->nombre . "'></li>";
                        echo "<li class='f'><input type='submit' name='categoria' value='" . $fila->categoria . "'></li>";
                    }
                } catch (Exception $e) {
                    echo "<script>console.log('Error Categorías. " . $e . "')</script>";
                }
                ?>
            </form>
        </ul>
    </header>
    <div id="cesta">Producto añadido a la cesta</div>
    <div id="error">El producto ya se encuentra en la cesta</div>
    <main>
        <div class="container-filtro">
            <div class="container">
                <div class="row">
                    <form method="POST" name="filtros">
                        <div class="filtro col s12 m4">
                            <label>Ordenar Precio</label>
                            <select name="orden" class="browser-default">
                                <option value="" selected></option>
                                <option value="DESC">De mayor a menor (&gt;)</option>
                                <option value="ASC">De menor a mayor (&lt;)</option>
                            </select>
                        </div>
                        <div class="filtro col s12 m3">
                            <label>Sexo</label>
                            <select name="sexo" class="browser-default">
                                <option value="" selected></option>
                                <option value="H">Hombre</option>
                                <option value="M">Mujer</option>
                            </select>
                        </div>
                        <div class="filtro col s12 m2">
                            <label>Talla</label>
                            <select name="talla" class="browser-default">
                                <option value="" selected></option>
                                <?php
                                try {
                                    $talla->execute();
                                    while ($fila = $talla->fetch(PDO::FETCH_OBJ)) {
                                        echo '<option value="' . $fila->talla . '">' . $fila->talla . '</option>';
                                    }
                                } catch (Exception $e) {
                                    echo "<script>console.log('Error Tallas. " . $e . "')</script>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="filtro col s12 m3">
                            <label>Marca</label>
                            <select name="marca" class="browser-default">
                                <option value="" selected></option>
                                <?php
                                try {
                                    $marca->execute();
                                    while ($fila = $marca->fetch(PDO::FETCH_OBJ)) {
                                        echo '<option value="' . $fila->marca . '">' . $fila->marca . '</option>';
                                    }
                                } catch (Exception $e) {
                                    echo "<script>console.log('Error Marcas. " . $e . "')</script>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="filtro col s12 m12">
                            <button class="btn white black-text lighten-1" type="submit" name="btn-filtrar">Filtrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="productos col s12 m12">
                    <?php
                    try {
                        if ($flag == true) {
                            echo "<script>error_cesta()</script>";
                        } else {
                            if (isset($_REQUEST['btn-cesta'])) {
                                echo "<script>cesta()</script>";
                            }
                        }


                        $productos_filtrados->execute();
                        $count = $productos_filtrados->rowCount();
                        if ($count == 0) {
                            echo '<p class="error">Lo sentimos, no se han encontrado productos</p>';
                        } else {
                            $productos_filtrados->execute();
                            while ($fila = $productos_filtrados->fetch(PDO::FETCH_OBJ)) {
                                echo '
                        <div class="container-product col s12 m3">
                            <a id="prod' . $fila->id_producto . '" name="prod' . $fila->id_producto . '">
                                <img src="img/pantalon.jpg" alt="Foto">
                                <p class="marca">' . $fila->marca . '</p>
                                <p class="producto">' . $fila->nombre . '</p>
                                ';
                                switch ($fila->sexo) {
                                    case "H":
                                        echo '<p class="genero">Hombre -- ' . $fila->talla . '</p>';
                                        break;
                                    case "M":
                                        echo '<p class="genero">Mujer -- ' . $fila->talla . '</p>';
                                        break;
                                }
                                echo '
                                <p class="precio">' . $fila->pvp . ' €</p>
                                <form method="POST" name="cesta">
                                    <input type="number" name="cantidad" min="1" max="' . $fila->cantidad . '" placeholder="Cantidad" required>
                                    <input type="hidden" name="product_id" value="' . $fila->id_producto . '">
                                    <button onclick="setTimeout(cesta(),10000)" class="btn white black-text lighten-1" type="submit" name="btn-cesta">Añadir a la cesta</button>
                                </form>
                            </a>
                        </div>
                        ';
                            }
                        }
                    } catch (Exception $e) {
                        echo "<script>console.log('Error Productos. " . $e . "')</script>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
</body>

</html>