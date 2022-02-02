<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .resaltar {
            color: #F00;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <?php

    //$nombre = "anibal";
    //echo "<p class=\"resaltar\">Es es un ejemplo de frase</p>";
    //echo 'hola $nombre';


    $variable1 = "Casa";
    $variable2 = "CASA";
    $resultado = strcasecmp($variable1, $variable2);    //devuelve 1->difentees 0->iguales

    if($resultado){
        echo "no coinciden";
    }else{
        echo "coinciden";
    }




    ?>


</body>

</html>