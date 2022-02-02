<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <?php

    function ejecuta_consulta($labusqueda)
    {
        //$busqueda = $_GET["buscar"];    //almacena lo que te estoy pasando por la url [get] de una pagina diferente

        require("datos_conexion.php");

        $conection = mysqli_connect($db_host, $db_user, $db_password);    //coneccion

        if (mysqli_connect_errno()) { //100% de fallo a la coneccion a la base
            echo "Fallo al conectar con la BBDD";
            exit();
        }
        mysqli_select_db($conection, $db_name) or die("No se encuentra la base deP datos"); //escoger la base de datos
        mysqli_set_charset($conection, "utf8"); //caracteres latinos

        $query = "SELECT * FROM ARTICULOS WHERE NOMBREARTÍCULO LIKE '$labusqueda%'"; //todos los articulos

        $result = mysqli_query($conection, $query); //el resultado 

        //mientras tenga registro en el result ejecute 
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { //mira FILA A FILA (registro a registro )y lo almacena en una array
            //arrau asociativo
            echo "<table><tr><td>";

            echo $row['SECCIÓN'] . "</td><td>";
            echo $row['NOMBREARTÍCULO'] . "</td><td>";
            echo $row['FECHA'] . "</td><td></tr></table>";
            //echo $row[3] . "</td><td></tr></table>";
            // echo $row[4] . " "; 

            echo "<br>";
            echo "<br>";
        }
        mysqli_close($conection);
    }
    ?>


</head>

<body>

    <?php
    @$mibusqueda = $_GET["buscar"];
    $mipag = $_SERVER["PHP_SELF"]; //SE TIENE QUE LLAMAR A ELLA MISMA

    if ($mibusqueda != NULL) { //sino esta vacia
        ejecuta_consulta($mibusqueda);
    } else {    //construccion de un formulario porque la primera vez $mibusqueda esta vacia
        echo ("<form action='" . $mipag . "'method='get'>
        <label> Buscar por nombre de articulo: <input type='text' name='buscar'></label>
        <input type='submit' name='enviando' value='Dalte!'>
        </form>");
       // al leerlo por segunda vez ya hay informacion en el input type text

    }

    ?>



</body>

</html>