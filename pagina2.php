<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $dividendo_text = $_REQUEST["dividendo"];
        $divisor_text = $_REQUEST["divisor"];
        
        if ($dividendo_text != "") {
            $dividendo = (int) $dividendo_text;
            if ($divisor_text != "") {
                $divisor = (int) $divisor_text;
                if ($divisor != 0){
                    $cociente = (int)($dividendo / $divisor);
                    $resto = $dividendo % $divisor;
                    echo "Cociente: $cociente <br>";
                    echo "Resto: $resto";
                } 
                
            }
        }
        if (!isset($cociente)) {
            echo "ERROR: Datos incorrectos";
        }
        
        
        ?>
    </body>
</html>
