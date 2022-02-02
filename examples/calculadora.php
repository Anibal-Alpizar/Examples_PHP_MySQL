<?php

    if (isset($_POST["button"])) {

        $numero1 = $_POST["num1"];
        $numero2 = $_POST["num2"];
        $operacion = $_POST["operacion"];

        calcular("operacion");
    }

    function calcular($calculo){
    
        if (!strcmp("Suma", $calculo)) {
            
            global $numero1;
            global $numero2;

            echo "El resultado es:" . ($numero1 + $numero1);
        }
        if (!strcmp("Resta", $calculo)) {

            global $numero1;
            global $numero2;
            echo "El resultado es:" . ($numero1 - $numero1);
        }
        if (!strcmp("Multiplicacion", $calculo)) {

            global $numero1;
            global $numero2;
            echo "El resultado es:" . ($numero1 * $numero1);
        }
        if (!strcmp("Division", $calculo)) {

            global $numero1;
            global $numero2;
            echo "El resultado es:" . ($numero1 / $numero1);
        }
        if (!strcmp("Modulo", $calculo)) {

            global $numero1;
            global $numero2;
            echo "El resultado es:" . ($numero1 % $numero1);
        }
    
    
    }
 ?>
