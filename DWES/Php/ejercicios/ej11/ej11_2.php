<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej11_PHP</title>
</head>

<body>
    <h1>Ejercicio 11 PHP - Operaciones</h1>
    <?php 
        $a=$_POST['num1'];
        $b=$_POST['num2'];
        print("La suma de $a + $b es: " . $a . " + " . $b . " = " . ($a+$b)."<br>");
        print("La resta de $a - $b es: " . $a . " - " . $b . " = " . ($a-$b)."<br>");
        print("La multiplicación de $a * $b es: " . $a . " * " . $b . " = " . ($a*$b)."<br>");
        print("La división de $a / $b es: " . $a . " / " . $b . " = " . ($a/$b)."<br>");
        print("La suma de de $a + $b a la cuarta es: (" . $a . " + " . $b . ") ^ 4 = " . ceil(pow(($a+$b),4))."<br>");
        print("La raíz quinta del cubo de la suma de $a + $b es: (" . $a . " + " . $b . ") ^ (3 / 5) = " . ceil(pow(($a+$b),(3/5)))."<br>");
        ?>
</body>

</html>