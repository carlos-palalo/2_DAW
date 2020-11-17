<?php

include 'head.php';

$carrito = array(
    0 => array(
        "id" => 1,
        "desc" => "Diccionario Australiano",
        "precio" => 24.95,
        "unidades" => 2
    ),
    1 => array(
        "id" => 2,
        "desc" => "Building your own database",
        "precio" => 100,
        "unidades" => 4
    ),
    2 => array(
        "id" => 3,
        "desc" => "Simply JavaScript",
        "precio" => 19.99,
        "unidades" => 3
    ),
    3 => array(
        "id" => 4,
        "desc" => "Android programming",
        "precio" => 39.95,
        "unidades" => 1
    )
);

echo "<p><strong>Carrito:</p></strong>";
echo "<table>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Descripción</th>";
echo "<th>Precio</th>";
echo "<th>Unidades</th></tr>";
foreach ($carrito as $clave => $valor) {
    echo "<tr>";
    foreach ($valor as $c => $v) {
        echo "<td>" . $v . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<br>";

echo "<p><strong>Mostrar el título del libro con id = 3</p></strong>";
foreach ($carrito as $clave) {
    if ($clave["id"] == 3)
        echo $clave["desc"] . "<br>";
}

echo "<br><p><strong>Mostrar la descripción del libro con precio > 25</p></strong>";
foreach ($carrito as $clave) {
    if ($clave["precio"] > 25)
        echo $clave["desc"] . "<br>";
}

echo "<br><p><strong>Precio Total de la compra:</p></strong>";
$suma = 0;
foreach ($carrito as $clave) {
    $suma += $clave["unidades"] * $clave["precio"];
}
echo $suma . "<br>";


echo "<br><p><strong>Añadir un libro a la cesta<p><strong>";
$carrito[] = array(
    "id" => 5,
    "desc" => "Añadido",
    "precio" => 20.95,
    "unidades" => 5
);

echo "<table>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Descripción</th>";
echo "<th>Precio</th>";
echo "<th>Unidades</th>";
foreach ($carrito as $clave => $valor) {
    echo "<tr>";
    foreach ($valor as $c => $v) {
        echo "<td>" . $v . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

foreach ($carrito as $clave => $valor) {
    if (strpos($valor["desc"], "JavaScript")) {
        unset($carrito[$clave]);
    }
}

echo "<br><p><strong>Eliminar el libro de JavaScript</p></strong>";
echo "<table>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Descripción</th>";
echo "<th>Precio</th>";
echo "<th>Unidades</th>";
foreach ($carrito as $clave => $valor) {
    echo "<tr>";
    foreach ($valor as $c => $v) {
        echo "<td>" . $v . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

include 'pie.php';
