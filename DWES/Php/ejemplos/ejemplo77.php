<?php
include("ejemplo75.php");
$busca = "imprime";
if (method_exists($objeto, $busca)) {
    echo "Existe la función $busca <br>";
} else {
    echo "No existe la función $busca <br>";
}
$r = get_class_vars("Operaciones");
foreach ($r as $pepe => $pepito) {
    echo "$pepe -->$pepito<br>";
}
$s = get_class_methods("Operaciones");
foreach ($s as $clave) {
    echo $clave, "<br>";
}
echo "<pre>";
var_dump(get_object_vars($objeto));
echo "</pre>";
print_r(get_object_vars($objeto));
