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


    $nombre = "anibal";
    //global $nombre;   //tiene que estar adentro de la funcion

    function damenNombre()
    {
        global $nombre; //hacer la variable global 
        $nombre = "El nombre es: " . $nombre;
    }


    
    damenNombre();
    echo $nombre;


    ?>


</body>

</html>