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
    $busqueda_art = $_POST["nombre_art"];
    $busqueda_pai = $_POST["pais_art"];
    $busqueda_fecha = $_POST["fecha_art"];
    $busqueda_prec = $_POST["precio_art"];

    

    //1. Crear coneccion

    try {
        $base = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
        //echo "successful connection";

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $base->exec("SET CHARACTER SET utf8");

        //$sql = "SELECT SECCIÓN, NOMBREARTÍCULO, FECHA, PAÍSDEORIGEN FROM ARTICULOS WHERE PAÍSDEORIGEN = :PAIS AND SECCIÓN = :SECCION";
        $sql = "INSERT INTO ARTICULOS (SECCIÓN, NOMBREARTÍCULO, FECHA, PAÍSDEORIGEN, PRECIO) VALUES (:seccion, :nombre, :fecha, :pais, :precio)";

        $resultado = $base->prepare($sql);

        //array asociativo / asociar marcadores con variables
        //=> = almacenado en
        $resultado->execute(array(":seccion" => $busqueda_sec, ":nombre" => $busqueda_art, ":fecha" => $busqueda_fecha, ":pais" => $busqueda_pai, ":precio" => $busqueda_prec));

        echo 'Se realizó correctamente';
        $resultado->closeCursor();
    } catch (Exception $e) {
        die('Error: ' . $e->getLine());  //acceder (->) a un metodo del objeto e
    } finally {
        $base = null;
    }

    ?>

</body>

</html>