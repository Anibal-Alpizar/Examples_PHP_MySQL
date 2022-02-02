<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <style>
    h1,
    h2 {
      text-align: center;
      color: #333;
    }

    table {
      width: 25%;
      background-color: #ffc;
      border: 2px dotted #f00;
      margin: auto;
    }

    .izq {
      text-align: right;
    }

    .der {
      text-align: left;
    }

    td {
      text-align: center;
    }
  </style>
</head>

<body>


  <?php

  $autenticador = false;


  if (isset($_POST["enviar"])) {  //Si se pulsa el boton enviar

    try {

      //pdo

      $base = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT * FROM usuario_pass WHERE USUARIOS = :user AND PASSWORDD = :pass";
      $resultado = $base->prepare($sql);

      //caracteres especiales en los cuadros de texto
      $login = htmlentities(addslashes($_POST['login']));
      $password = htmlentities($_POST['password']);

      //asociar marcadores

      $resultado->bindValue(":user", $login);
      $resultado->bindValue("pass", $password);

      $resultado->execute();
      $numero_registro = $resultado->rowCount(); //no existe = 0, existe = 1

      if ($numero_registro != 0) {  //ha encontrador un usuario

        $autenticador = true;

        if (isset($_POST['recordar'])) {  //activo la casilla de recordar

          setcookie("nombre_usuario", $_POST['login'], time() + 8600);
        }
      } else {

        // header("location:login.html");
        echo 'Usuario o contraseña incorrectos';
      }
    } catch (Exception $e) {

      $e->getLine();
      $e->getMessage();
    }
  }
  ?>
  <?php

  if ($autenticador == false) {  //login no ha tenido exito
    if (!isset($_COOKIE['nombre_usuario'])) { //no hay cookie
      include("formulario.html");
    }
  }


  ?>
  <h2>Prueba</h2>

</body>

</html>