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

    $pais = $_GET["buscar"];
    require("datos_conexion.php");
    $coneccion = mysqli_connect($db_host, $db_user, $db_password);

    if (mysqli_connect_errno()) {
        echo "Failed connected";
        exit();
    }
    mysqli_select_db($coneccion, $db_name) or die("Is not found");
    mysqli_set_charset($coneccion, "utf8");



    //pasos para evitar la inyeccion SQL
    //1. Crear la instruccion sql con -> "?" en ves del criterio  

    $sql = "SELECT SECCIÓN, NOMBREARTÍCULO, FECHA, PAÍSDEORIGEN FROM ARTICULOS WHERE PAÍSDEORIGEN = ? ";

    //2. Preparar la consulta para obtener EL OBJETO CLAVE para todo el proceso

    $resultado = mysqli_prepare($coneccion, $sql);

    //3. Unir, lo que escribio en el cuadro de texto a la sentencia sql
    //return true / false

    //prepare -> tipo -> la variable donde esta almacenado el texto que dijita 

    //string -> "s"
    //int -> i;
    //decimal -> d;

    $ok = mysqli_stmt_bind_param($resultado, "s", $pais);


    //4. Ejectuar la consulta 

    $ok = mysqli_stmt_execute($resultado);  //true o false 

    if ($ok == false) {
        echo "Error al ejecutar la consulta";
    } else {

        //5. Asociar variables al resultado de la consulta 

        $ok = mysqli_stmt_bind_result($resultado, $seccion, $nombre, $fecha, $pais);

        //6. Leer la consulta 

        echo "Articulos encontrados: <br><br>";

        while (mysqli_stmt_fetch($resultado)) {
            echo $seccion . " " . $nombre . " " .  $fecha . " " . $pais . "<br>";
        }
        mysqli_stmt_close($resultado);
    }

    ?>



</body>

</html>