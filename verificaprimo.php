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
        $numero_seleccionado=$_GET["numero"];
        $es_primo=true;
        $numero_maximo=$numero_seleccionado/2;
        for ($numero_prueba=2; $numero_prueba<$numero_maximo; $numero_prueba++)
        {
            $resto=$numero_seleccionado%$numero_prueba;
            if ($resto==0)//$numero_prueba es divisor de $numero_seleccionado. Por tanto, no es primo
            {
                $es_primo=false;
                $numero_prueba=$numero_maximo;//De esta forma me aseguro de que3 se sale del bucle
            }
        }
        if ($es_primo==true)
        {
            echo "El numero es primo";
        }
        else
        {
            echo "El número no es primo";
        }
        ?>
    </body>
</html>
