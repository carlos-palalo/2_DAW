<?php
echo '<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <div class="container" id="registration-form">
        <div class="image"></div>
        <div class="frm">
            <h1>Introduce 2 valores</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label for="intensidad">Intensidad:</label>
                    <input type="text" class="form-control" name="intensidad" placeholder="Introduce la Intensidad">
                </div>
                <div class="form-group">
                    <label for="Voltaje">Voltaje:</label>
                    <input type="text" class="form-control" name="voltaje" placeholder="Introduce el Voltaje">
                </div>
                <div class="form-group">
                    <label for="resitencia">Resistencia:</label>
                    <input type="text" class="form-control" name="resistencia" placeholder="Introduce la Resistencia">
                </div>
               
                
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg">Calcular</button>
                    <button type="reset" class="btn btn-success btn-lg">Borrar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>';
if (!empty($_REQUEST)) {
    $int = htmlspecialchars($_REQUEST['intensidad']);
    $vol = htmlspecialchars($_REQUEST['voltaje']);
    $res = htmlspecialchars($_REQUEST['resistencia']);
    $cont = 0;

    if ($int != "") {
        $cont++;
    }
    if ($vol != "") {
        $cont++;
    }
    if ($res != "") {
        $cont++;
    }
    if ($cont == 1) {
        echo "<script>alert('Error. Has introducido sólo un valor');</script>";
    } elseif ($cont==3){
        echo "<script>alert('Error. Has introducido tres valores');</script>";
    }else{
        if(empty($int)){
            echo "<script>alert('Intensidad: ".$vol/$res."');</script>";
        }
        if(empty($vol)){
            echo "<script>alert('Voltaje: ".$int*$res."');</script>";
        }
        if(empty($res)){
            echo "<script>alert('Resistencia: ".$vol/$int."');</script>";
        }
    }
}
