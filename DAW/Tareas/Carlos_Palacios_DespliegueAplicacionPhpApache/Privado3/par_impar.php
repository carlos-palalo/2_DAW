<?php
session_start();

if (isset($_SESSION['logueado'])) {
    echo '
    <!DOCTYPE html>
    <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" href="../css/privado3.css">
            <meta charset="utf-8" />
            <title>Practica Apache - DAW</title>
            <script type="text/javascript">
                function random(min, max) {
                    return Math.floor((Math.random() * (max - min + 1)) + min);
                }
            </script>
        </head>
        <body>
            <h1>Suma dados PAR / IMPAR</h1>
            <p>Escribe un script PHP para adivinar si la suma de 3 dados será PAR o IMPAR</p>
            <form action="" method="POST">
                <input type="radio" name="suma" value="PAR"checked="checked" />PAR<br>
                <input type="radio" name="suma" value="IMPAR"/>IMPAR<br>
                <input type="submit" value="Comprobar" name="comprobar" "/>
            </form>
        </body>
    </html>';
} else {
    header('Location: ../index.php');
}

if (!empty($_REQUEST)) {
    $opcion = $_REQUEST['suma'];
    $suma = 0;
    for ($i = 0; $i < 3; $i++) {
        $num = rand(1, 6);
        $suma += $num;
        switch ($num) {
            case 1:
                echo "<img src='../imagenes/uno.jpg'>";
                break;
            case 2:
                echo "<img src='../imagenes/dos.jpg'>";
                break;
            case 3:
                echo "<img src='../imagenes/tres.jpg'>";
                break;
            case 4:
                echo "<img src='../imagenes/cuatro.jpg'>";
                break;
            case 5:
                echo "<img src='../imagenes/cinco.jpg'>";
                break;
            case 6:
                echo "<img src='../imagenes/seis.jpg'>";
                break;
        }
    }
    if($opcion == 'PAR'){
        if($suma %2 == 0){
            echo "<script>alert('Has acertado. La suma de los números es PAR.');</script>";
        }else{
            echo "<script>alert('NO has acertado. La suma de los números es IMPAR.');</script>";
        }
    }else{
        if($suma %2 == 0){
            echo "<script>alert('NO has acertado. La suma de los números es PAR.');</script>";
        }else{
            echo "<script>alert('Has acertado. La suma de los números es IMPAR.');</script>";
        }
    }
}
