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

    $busqueda_sec = $_POST["seccion_art"];
    $busqueda_por = $_POST["pais_art"];


    //1. Crear coneccion

    try {
        $base = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
        //echo "successful connection";

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $base->exec("SET CHARACTER SET utf8");

        $sql = "SELECT SECCIÓN, NOMBREARTÍCULO, FECHA, PAÍSDEORIGEN FROM ARTICULOS WHERE PAÍSDEORIGEN = :PAIS AND SECCIÓN = :SECCION";

        $resultado = $base->prepare($sql);

        //array asociativo
        //=> = almacenado en
        $resultado->execute(array(":PAIS" => $busqueda_por, ":SECCION" => $busqueda_sec));

        while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo " Nombre: " . $registro['NOMBREARTÍCULO'] . " Seccion: " . $registro['SECCIÓN'] . " Fecha: " . $registro['FECHA']  . " Pais de origen " . $registro['PAÍSDEORIGEN'] . "<br>";
        }
        $resultado->closeCursor();
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());  //acceder (->) a un metodo del objeto e
    } finally {
        $base = null;
    }

    ?>

</body>

</html>