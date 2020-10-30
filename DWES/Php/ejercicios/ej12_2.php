<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej11_PHP</title>
</head>

<body>
    <h1>Ejercicio 12 PHP - Operaciones</h1>
    <?php 
        $a=$_REQUEST['num1'];
        $b=$_REQUEST['num2'];
        print("La suma de $a + $b es: " . $a . " + " . $b . " = " . number_format($a+$b,4,"'"," ")."<br>");
        print("La resta de $a - $b es: " . $a . " - " . $b . " = " . number_format($a-$b,4,"'"," ")."<br>");
        print("La multiplicación de $a * $b es: " . $a . " * " . $b . " = " . number_format($a*$b,4,"'"," ")."<br>");
        print("La división de $a / $b es: " . $a . " / " . $b . " = " . number_format($a/$b,4,"'"," ")."<br>");
        print("La suma de de $a + $b a la cuarta es: (" . $a . " + " . $b . ") ^ 4 = " . number_format(pow(($a+$b),4),4,"'"," ")."<br>");
        print("La raíz quinta del cubo de la suma de $a + $b es: (" . $a . " + " . $b . ") ^ (3 / 5) = " . number_format(pow(($a+$b),(3/5)),4,"'"," ")."<br>");
        ?>
</body>

</html>