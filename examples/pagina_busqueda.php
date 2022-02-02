<?php


//$busqueda = $_GET["buscar"];    //almacena lo que te estoy pasando por la url [get]

require("datos_conexion.php");

$conection = mysqli_connect($db_host, $db_user, $db_password);    //coneccion

$busqueda = mysqli_real_escape_string($conection, $_GET["buscar"]);


if (mysqli_connect_errno()) { //100% de fallo a la coneccion a la base
    echo "Fallo al conectar con la BBDD";
    exit();
}
mysqli_select_db($conection, $db_name) or die("No se encuentra la base deP datos"); //escoger la base de datos
mysqli_set_charset($conection, "utf8"); //caracteres latinos

//$query = "SELECT * FROM ARTICULOS WHERE SECCIÓN LIKE '$busqueda'"; //todos los articulos

//Inyecccion
$query = "SELECT * FROM ARTICULOS WHERE SECCIÓN LIKE '$busqueda'";
echo $query;



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
