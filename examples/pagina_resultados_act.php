<?php


$busqueda = $_GET["buscar"];    //almacena lo que te estoy pasando por la url [get]

require("datos_conexion.php");

$conection = mysqli_connect($db_host, $db_user, $db_password);    //coneccion

if (mysqli_connect_errno()) { //100% de fallo a la coneccion a la base
    echo "Fallo al conectar con la BBDD";
    exit();
}
mysqli_select_db($conection, $db_name) or die("No se encuentra la base deP datos"); //escoger la base de datos
mysqli_set_charset($conection, "utf8"); //caracteres latinos

$query = "SELECT * FROM ARTICULOS WHERE FECHA LIKE '$busqueda'"; //todos los articulos

$result = mysqli_query($conection, $query); //el resultado 

//mientras tenga registro en el result ejecute 
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { //mira FILA A FILA (registro a registro )y lo almacena en una array
    //array asociativo
    //echo "<table><tr><td>";

    echo "<form action='Actualizar.php' method = 'get'>";   //cabecera form
    echo "<input type='text' name='s_art' value='" . $row['SECCIÓN'] . "'><br>";    //rescatar el valor
    echo "<input type='text' name='n_art' value='" . $row['NOMBREARTÍCULO'] . "'><br>";    //rescatar el valor
    echo "<input type='text' name='fecha' value='" . $row['FECHA'] . "'><br>";    //rescatar el valor
    echo "<input type='text' name='p_art' value='" . $row['PAÍSDEORIGEN'] . "'><br>";    //rescatar el valor
    echo "<input type='text' name='precio' value='" . $row['PRECIO'] . "'><br>";    //rescatar el valor

    echo " <input type='submit' name='enviando' value='Actualizar!'>";

    echo "</form>";
}
mysqli_close($conection);
