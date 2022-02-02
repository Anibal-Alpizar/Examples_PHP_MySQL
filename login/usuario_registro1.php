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


    session_start();    //retornar la session 

    if (!isset($_SESSION['session'])) {
        header('location:login.html');
    } else {

        echo "Usuario: " . $_SESSION['session'];
        
    }



    ?>

    <p>Esto es un mensaje unicamente para los usuarios registros en la base</p>
    <p>usuarios</p>
    <p><a href="usuario_registro2.php">Usuario 1</a></p>
    <p><a href="usuario_registro3.php">Usuario 2</a></p>
    <p><a href="usuario_registro4.php">Usuario 3</a></p>


    <p><a href="cierre.php">Cierra sesion</a></p>
    

    
</body>

</html>