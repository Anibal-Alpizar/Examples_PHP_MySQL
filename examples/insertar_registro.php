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

$query = "INSERT INTO articulos (SECCIÓN, NOMBREARTÍCULO, FECHA , PAÍSDEORIGEN, PRECIO) values ('$secci','$nom','$fec', '$pais', $prec)";

$result = mysqli_query($conection, $query); //el resultado 

if ($result == false) {
    echo "Query failed";
} else {
    echo "Query sucefully";
    echo "<table><tr><td>$secci</td></tr>";
    echo "<table><tr><td>$nom</td></tr>";
    echo "<table><tr><td>$fec</td></tr>";
    echo "<table><tr><td>$pais</td></tr>";
    echo "<table><tr><td>$prec</td></tr>";

}



mysqli_close($conection);
