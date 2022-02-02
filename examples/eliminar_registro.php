<?php

//$busqueda = $_GET["buscar"];    //almacena lo que te estoy pasando por la url [get]

$secci = $_GET["s_art"];
$nom = $_GET["n_art"];
$fec = $_GET["fecha"];
$pais = $_GET["p_art"];
$prec = $_GET["precio"];

require("datos_conexion.php");

$conection = mysqli_connect($db_host, $db_user, $db_password);    //coneccion

if (mysqli_connect_errno()) { //100% de fallo a la coneccion a la base
    echo "Fallo al conectar con la BBDD";
    exit();
}
mysqli_select_db($conection, $db_name) or die("No se encuentra la base deP datos"); //no encuentra la base de datos
mysqli_set_charset($conection, "utf8"); //caracteres latinos - codificacion

$query = "DELETE FROM articulos WHERE NOMBREARTÍCULO = '$nom'";

$result = mysqli_query($conection, $query); //el resultado 

if ($result == false) {
    echo "Query failed";
} else {

    if (mysqli_affected_rows($conection) == 0) {

        echo "No se afecto ningun registro";
    } else {

        echo "Se elimino un total de: " . mysqli_affected_rows($conection) . " registros";
    }
}



mysqli_close($conection);
