<!DOCTYPE html>
<html>
<?php
try {
    session_start();
    require "conexion.php";
    $subtotal = 0;
    $total = 0;
    $articulos = 0;
    $cad = 'SELECT * FROM producto WHERE id_producto IN (';
    $where_cont = 0;
    $aux = array();
    if (isset($_REQUEST['btn-comenzar'])) {
        if (!$_SESSION['flagUser']) {
            echo '<script>alert("Necesitas estar logueado para efectuar el pedido. Redirigiendote");</script>';
            echo '<script>location.href="login.php"</script>';
        }
        for ($i = 0; $i < count($_SESSION['cesta']); $i++) {
            $requestId = 'product_id' . $_SESSION['cesta'][$i]['id'];
            $requestCantidad = 'cantidad' . $_SESSION['cesta'][$i]['id'];
            if ($_SESSION['cesta'][$i]['id'] == $_REQUEST[$requestId]) {
                $_SESSION['cesta'][$i]['cantidad'] = $_REQUEST[$requestCantidad];
            }
        }
        echo '<script>location.href="factura.php"</script>';
    }
    if (isset($_REQUEST['btn-eliminar'])) {
        for ($i = 0; $i < count($_SESSION['cesta']); $i++) {
            $request = "product_id" . $_REQUEST['btn-eliminar'];
            if ($_SESSION['cesta'][$i]['id'] != $_REQUEST[$request]) {
                $aux[] = $_SESSION['cesta'][$i];
            }
        }
        $_SESSION['cesta'] = $aux;
    }
    foreach ($_SESSION['cesta'] as $producto) {
        foreach ($producto as $key => $value) {
            if ($key == "id") {
                if ($where_cont == 0) {
                    $cad .= $value;
                    $where_cont++;
                } else {
                    $cad .= ', ' . $value;
                }
            }
        }
    }
    $cad .= ')';
    #print_r($_SESSION['cesta']);
    $productos = $bd->prepare($cad);
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            background-color: whitesmoke;
            overflow-x: hidden;
        }

        .container-product,
        .container-pago {
            background-color: white;
            margin-top: 40px;
            padding: 15px !important;
            margin-bottom: 40px;
        }

        .container-img {
            margin-top: 20px;
        }

        .container-pago .row {
            margin-top: 25px;
        }

        .row .txt-dinero {
            margin-left: 15px;
            float: left;
        }

        .row .dinero {
            margin-right: 15px;
            float: right;
        }

        .row .total {
            font-weight: bold;
            font-size: medium;
        }

        .container-pago {
            margin-left: 8.33% !important;
        }

        .container-pago hr {
            border: 1px solid gainsboro;
        }

        .container-pago a,
        button {
            width: 100%;
            font-weight: bold;
            background-color: white;
            color: black;
            padding: 5px !important;
            border-radius: 0px !important;
            text-align: center;
        }

        .container-pago a:hover,
        button:hover {
            transition: background-color, color 0.8s;
            background-color: black !important;
            color: white !important;
            opacity: 0.8;
        }

        .container-product img {
            width: 100%;
            border-radius: 5px;
        }

        .product {
            margin: 20px 0px;
        }

        .precio {
            font-weight: bold;
        }

        .titulo {
            font-weight: bold;
            font-size: x-large;
        }

        .subtitulo {
            font-weight: bold;
            font-size: large;
            position: absolute;
            top: 100px;
            z-index: -1;
            transition: top 1s;
        }

        .container-select label {
            color: gray;
            font-size: medium;
        }

        .container-select select {
            box-shadow: 0 0 0 1px black;
            border-radius: 0px;
        }

        .container-select select:hover,
        select:focus {
            outline: none;
            box-shadow: 0 0 0 2px black;
        }

        .container-select {
            margin-top: 40px !important;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);
        });

        function cambiar(elemento) {
            var cantidad = document.getElementsByTagName('select');
            var productos = document.getElementsByClassName('product');
            var ids = document.getElementsByClassName("ids");
            var numArticulos = 0,
                subtotal = 0,
                total = 0;
            if (productos.length == 0) {
                document.getElementById('subtotal').innerText = '0.00 €';
                document.getElementById('total').innerText = '0.00 €';
                document.getElementById('articulos').innerText = 'Mi cesta (' + numArticulos + ' artículos)';
                return true;
            } else {
                for (var i = 0; i < cantidad.length; i++) {
                    numArticulos += cantidad[i].options.selectedIndex + 1;
                }
                for (var j = 0; j < productos.length; j++) {
                    subtotal += parseFloat(productos.item(j).children[1].children[3].attributes.getNamedItem('value').value) * (productos.item(j).children[2].children[1].options.selectedIndex + 1);
                }
                document.getElementById('subtotal').innerText = subtotal.toFixed(2) + ' €';
                document.getElementById('total').innerText = (subtotal * 121 / 100).toFixed(2) + ' €';
                document.getElementById('articulos').innerText = 'Mi cesta (' + numArticulos + ' artículos)';
            }
            //El input con el mismo id que el nombre del elemento, le modifico el valor
            document.getElementById(elemento.name).value = elemento.value;
        }

        function comprobar() {
            if (cambiar()) {
                document.getElementById('vacio').style.top = '200px';
                setTimeout('location.href="productos.php"', 1500);
            }
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
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="productos col s12 m12">
                    <div class="container-product col s12 m7">
                        <?php
                        try {
                            echo '<div id="vacio" class="subtitulo col s12 m12">Cesta vacía... Volviendo a Productos</div>';
                            foreach ($_SESSION['cesta'] as $producto) {
                                $articulos += $producto['cantidad'];
                            }
                            if ($articulos == 0) {
                                echo '<div id="articulos" class="titulo col s12 m12">Mi cesta (' . $articulos . ' artículos)</div>';
                            } else {
                                echo '<div id="articulos" class="titulo col s12 m12">Mi cesta (' . $articulos . ' artículos)</div>';
                                $productos->execute();
                                while ($fila = $productos->fetch(PDO::FETCH_OBJ)) {
                                    echo '
                                    <form method="POST" name="form' . $fila->id_producto . '">
                                        <div class="product col s12 m12">
                                            <div class="container-img col s12 m3">
                                                <img src="img/pantalon.jpg" alt="Foto">
                                            </div>
                                            <div class="container-info col s12 m6">
                                                <p class="marca">' . $fila->marca . '</p>
                                                <p class="producto">' . $fila->nombre . '</p>
                                                ';

                                    if ($fila->sexo == "H") {
                                        echo '<p class="genero">Hombre -- ' . $fila->talla . '</p>';
                                    } else {
                                        echo '<p class="genero">Mujer -- ' . $fila->talla . '</p>';
                                    }

                                    echo '
                                                <p class="precio" value="' . $fila->pvp . '">' . $fila->pvp . ' €</p>
                                                <input type="hidden" name="product_id' . $fila->id_producto . '" value="' . $fila->id_producto . '">
                                                <button class="btn white black-text lighten-1" name="btn-eliminar" value="' . $fila->id_producto . '">Eliminar</button>
                                            </div>
                                            <div class="container-select col s12 m3">
                                                <label>Cantidad</label>
                                                <select name="cantidad' . $fila->id_producto . '" class="browser-default" onchange="cambiar(this)">';
                                    #<button class="btn white black-text lighten-1" name="btn-eliminar" onclick="eliminar(this)">Eliminar</button>

                                    for ($i = 1; $i <= $fila->cantidad; $i++) {
                                        foreach ($_SESSION['cesta'] as $producto) {
                                            if ($producto['id'] == $fila->id_producto) {
                                                if ($i == $producto['cantidad']) {
                                                    echo '
                                                            <option value="' . $i . '" selected>' . $i . '</option>
                                                        ';
                                                    $subtotal += $fila->pvp * $i;
                                                } else {
                                                    echo '
                                                            <option value="' . $i . '">' . $i . '</option>
                                                        ';
                                                }
                                            }
                                        }
                                    }

                                    echo '  
                                                    </select>
                                                </div>
                                            </div>
                                    </form>
                                    ';
                                }
                            }
                        } catch (Exception $e) {
                            echo "<script>console.log('" . $e . "')</script>";
                        }
                        ?>
                    </div>
                    <div class="container-pago col s12 m4">
                        <div class="titulo">Total del pedido</div>
                        <div class="row">
                            <div class="txt-dinero">Subtotal</div>
                            <?php
                            echo '<div class="dinero" id="subtotal">' . number_format($subtotal, 2) . ' €</div>';
                            ?>
                        </div>
                        <div class="row">
                            <div class="txt-dinero">Envío</div>
                            <div class="dinero">Gratis</div>
                        </div>
                        <hr>
                        <div class="row total">
                            <div class="txt-dinero">Total (IVA incluido)</div>
                            <?php
                            $total = $subtotal * 121 / 100;
                            echo '<div class="dinero" id="total">' . number_format($total, 2) . ' €</div>';
                            if ($articulos == 0) {
                                echo "<script>comprobar()</script>";
                            }
                            ?>
                        </div>
                        <form method="POST">
                            <?php
                            foreach ($_SESSION['cesta'] as $producto) {
                                echo '<input class="ids" type="hidden" name="product_id' . $producto['id'] . '" value="' . $producto['id'] . '">';
                                echo '<input id="cantidad' . $producto['id'] . '" type="hidden" name="cantidad' . $producto['id'] . '" value="' . $producto['cantidad'] . '">';
                            }
                            ?>
                            <button class="btn white black-text lighten-1" type="submit" name="btn-comenzar">COMENZAR PEDIDO</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>