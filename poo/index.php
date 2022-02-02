<?php

require('devuelveProductos.php');

//hacer una instancia - POO
$productos = new devuelveProductos();

$dato = $_GET['buscar'];
$array_productos = $productos->get_productos($dato); //funcion tiene un return, entonces se almacenara en la variable

?>

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

    foreach ($array_productos as $elemento) {


        echo "<table><tr><td>";
        echo $elemento['SECCIÓN'] . "</td><td>";
        echo $elemento['NOMBREARTÍCULO'] . "</td><td>";
        echo $elemento['FECHA'] . "</td><td>";
        echo $elemento['PAÍSDEORIGEN'] . "</td><td>";
        echo $elemento['PRECIO'] . "</td><td></tr></table>";



        echo '<br>';
        echo '<br>';
    }


    ?>



</body>

</html>