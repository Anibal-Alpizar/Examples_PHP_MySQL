<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    /* function suma($num1, $num2){

        $result =  $num1 + $num2;

        return $result;
    }

    echo suma(3, 4);

    */

    function frase_mayus($frase, $conversion = true) {

        $frase = strtolower($frase);
        if ($conversion == true) {
            $resultado = ucwords($frase);
        } else {
            $resultado = strtoupper($frase);    //toda la frase a mayuscula
        }
        return $resultado;
    }

    echo frase_mayus("esto es una prueba", false);

    ?>


</body>

</html>