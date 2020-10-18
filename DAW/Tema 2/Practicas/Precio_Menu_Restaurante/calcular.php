<?php
$precio_base = (float)(htmlspecialchars($_REQUEST['precio_base']));
$primer_plato = (float)($_REQUEST['primer_plato']);
$segundo_plato = (float)$_REQUEST['segundo_plato'];
$suplemento = 0;
if (isset($_REQUEST['cafe']))
    $suplemento += 1;
if (isset($_REQUEST['ribera']))
    $suplemento += 3;
if (isset($_REQUEST['chupito']))
    $suplemento += 2;
$descuento = (float)$_REQUEST['descuento'];



$precioFinal = ($precio_base + $primer_plato + $segundo_plato + $suplemento) * $descuento;

echo '<script>document.precio_final.value=' . $precioFinal . '</script>';

echo '<script>document.precio_final.value=' . $precioFinal . '</script>';

include 'index.php';
