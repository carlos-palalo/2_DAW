<?php
echo'<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
        
            
            
    </head>
    <body>
        <form action="calcular.php" method="POST">
            <img src="imagenes/restaurante.jpg" width="200" height="150" alt="logo"/>
            <img src="imagenes/logo.jpg" width="200" height="150" alt="logo"/>
            
            <h1>Menu desde  solo <input type="text" name="precio_base" value="" size="5" /> €</h1>
            
            <fieldset>
            <legend>Menú</legend>
            <p>    
            Primer Plato :
            <select id ="primer_plato" name="primer_plato">
                <option value="0">Canelones</option>
                <option value="0">Ensalada</option>
                <option value="0">Sopa Castellana</option>
                 <option value="2">Arroz Bogavante (+2€)</option>
                
            </select>
            </p>
            <p>
            Segundo Plato :
            <select id ="segundo_plato" name="segundo_plato">
                <option value="0">Besugo al Horno</option>
                <option value="0"> Filete de Ternera</option>
                <option value="0"> Chuletillas de Lechazo</option>
                <option value="3">Chuleton (3€)</option>
            </select>
            </p>
            <p>
            Postre :<select name="postre">
                <option>Flan</option>
                <option>Manzana</option>
                <option>Arroz con Leche</option>
                <option>Helado</option>
            </select>
            </p>
            </fieldset>
            <br>
             <fieldset>
            <legend>Suplementos</legend>
            
            Café (+1€)
            <input type="checkbox" id="cafe" name="cafe" value="3" />
             Vino(Ribera de Duero)+3€
            <input type="checkbox" id="ribera" name="ribera" value="2" />
            Chupito (+2€) 
            <input type="checkbox" id="chupito" name="chupito" value="2" />
            </fieldset> 
            <br>
            <fieldset>
                <br>
            <legend>Descuentos</legend>
             Sin descuento<input type="radio" id="descuento" name="descuento" value="1"checked="checked" />
             Familia Numerosa (20%)<input type="radio" id ="descuento" name="descuento" value="0.8" />
             Desempleo (30%)<input type="radio" id ="descuento" name="descuento" value="0.7" />
            </fieldset>  
            <br>
              <input type="submit" value="Calcular" name="calcular" "/>
              <br><br>
              Precio Final : <input type="text" id ="precio_final" name="precio_final" value="" size="5" />
            
        </form>
    </body>
</html>';