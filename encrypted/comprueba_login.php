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

    try {

        //pdo

        $login = htmlentities(addslashes($_POST['login']));
        $password = htmlentities($_POST['password']);

        $contador = 0;

        $base = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM usuario_pass WHERE USUARIOS = :login";

        $resultado = $base->prepare($sql);

        //asociar marcadores

        $resultado->bindValue(":login", $login);

        $resultado->execute();
        $numero_registro = $resultado->rowCount(); //no existe = 0, existe = 1

        while ($regristro = $resultado->fetch(PDO::FETCH_ASSOC)) {

            // echo 'Usuario: ' . $regristro['USUARIOS'] . ' Contraseña: ' . $regristro['PASSWORDD'] . "<br>";
            if (password_verify($password, $regristro['PASSWORDD'])) {    //la password por el usuario y la password cifrada que hay en la base de datos  //entra si ambos datos son iguales

                $contador++;
            }
        }

        if ($contador > 0) {
            echo 'Usuario registrado';
        } else {
            echo 'Usuario no registrado';
        }
        $resultado->closeCursor();
    } catch (Exception $e) {

        $e->getLine();
        $e->getMessage();
    }

    ?>

</body>

</html>