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



    //$busqueda = $_GET["buscar"];    //almacena lo que te estoy pasando por la url [get]

    require("datos_conexion.php");

    $conection = mysqli_connect($db_host, $db_user, $db_password);    //coneccion

    if (mysqli_connect_errno()) { //100% de fallo a la coneccion a la base
        echo "Fallo al conectar con la BBDD";
        exit();
    }
    mysqli_select_db($conection, $db_name) or die("No se encuentra la base deP datos"); //no encuentra la base de datos
    mysqli_set_charset($conection, "utf8"); //caracteres latinos - codificacion

    $query = "INSERT INTO articulos (SECCIÓN, NOMBREARTÍCULO, PAÍSDEORIGEN) values ('PC','Mause','Argentina')";

    $result = mysqli_query($conection, $query); //el resultado 


    mysqli_close($conection);





    ?>


</body>

</html>