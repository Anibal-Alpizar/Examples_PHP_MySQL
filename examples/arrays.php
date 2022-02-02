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

    $semana[] = "Lunes";
    $semana[] = "Martes";
    $semana[] = "Miercoles";
    $semana[] = "Jueves";

    /*
    $semana = array("Lunes", "Martes", "Miercoles", "Jueves");
    echo $semana[3];

*/

    // $datos = array("Nombre" => "Juan", "Apellido" => "Gomez", "Edad" => 21);
    //$datos = "Martin";

    /* if (is_array($datos)) {
        echo $datos["Apellido"];
    }
    */
    /*
    foreach ($datos as $clave => $valor){
        echo "A $clave le corresponde $valor <br>";
    }
    */

    $semana[] = "Viernes";

    for ($i = 0; $i < count($semana); $i++) {
        echo $semana[$i] . "<br>";
    }

    ?>

</body>

</html>