<?php

print"<!DOCTYPE html>
<html>
<head>
    
   <title>Cálculo del IMC</title>
   <meta charset=\"utf-8\" />
   <link href=\"default.css\" rel=\"stylesheet\" type=\"text/css\" />
 
</head>
<body>
<form action='calcular.php' method='post' >
       <fieldset>
         <legend>&Iacute;ndice de masa corporal</legend>
         <p>
            <label for='peso'>Peso</label>
            <input min='30' max='500' name='peso' type='number' value='80' /> Kg
         </p>
         <p>
            <label for='altura'>Altura</label>
            <input min='1' max='3' step='0.01' name='altura' type='number' value='1.78' /> mts
         </p>
         <p>  
            <input type='submit' name='calcular' value='Calcular' id='calcular' />
            
         </p>
       </fieldset>
       </form>
  

  
     
</body>
</html>";