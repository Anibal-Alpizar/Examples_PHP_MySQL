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

    $conexion = new mysqli("localhost", "root", "", "pruebas");

    if ($conexion->connect_errno) {

        echo "Failed connected" . $conexion->connect_errno; //error por concreto
    }

    //procedimental
    //mysqli_set_charset($conexion, "utf8");
    $conexion->set_charset("utf8");

    $sql = "SELECT * FROM ARTICULOS";

    //procedimental:
    //$resultados = mysqli_query($conexion, $sql);
    $resultados = $conexion->query($sql);

    if ($conexion->errno) {
        die($conexion->error);
    }

    //procedimental
    //while($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC )){
    //}
/*
    while ($row = $resultados->fetch_assoc()) {

        echo "<table><tr><td>";

        echo $row['SECCIÓN'] . "</td><td>";
        echo $row['NOMBREARTÍCULO'] . "</td><td>";
        echo $row['FECHA'] . "</td><td></tr></table>";
        echo "<br>";
        echo "<br>";
    }
*/


    while ($row = $resultados->fetch_array()) { //forma con fetch_array

        echo "<table><tr><td>";

        echo $row['0'] . "</td><td>";
        echo $row['1'] . "</td><td>";
        echo $row['2'] . "</td><td></tr></table>";
        echo "<br>";
        echo "<br>";
    }
   

    //procedimental
    //mysqli_close($conexion);
    $conexion->close();


    ?>

</body>

</html>