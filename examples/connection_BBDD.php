<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 50%;
            border: 1px dotted #FF0000;
            margin: auto;
            text-align: center;
            border: 1px solid #000;

        }
    </style>
</head>

<body>

    <?php

    require("datos_conexion.php");

    $conection = mysqli_connect($db_host, $db_user, $db_password);    //coneccion

    if (mysqli_connect_errno()) { //100% de fallo a la coneccion a la base
        echo "Fallo al conectar con la BBDD";
        exit();
    }
    mysqli_select_db($conection, $db_name) or die("No se encuentra la base deP datos"); //escoger la base de datos
    mysqli_set_charset($conection, "utf8"); //caracteres latinos

    $query = "SELECT * FROM ARTICULOS WHERE SECCIÓN='DEPORTE'"; //todos los articulos

    $result = mysqli_query($conection, $query); //el resultado 

    //mientras tenga registro en el result ejecute 
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { //mira FILA A FILA (registro a registro )y lo almacena en una array
        //arrau asociativo
        echo "<table><tr><td>";

        echo $row['SECCIÓN'] . "</td><td>";
        echo $row['NOMBRE ARTÍCULO'] . "</td><td>";
        echo $row['FECHA'] . "</td><td></tr></table>";
        //echo $row[3] . "</td><td></tr></table>";
        // echo $row[4] . " "; 

        echo "<br>";
        echo "<br>";
    }
    mysqli_close($conection);

    ?>


</body>

</html>