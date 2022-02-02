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

    //1. Crear coneccion

    try {
        $base = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
        echo "successful connection";
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    } finally {
        $base = null;
    }




    ?>

</body>

</html>