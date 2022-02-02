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

      if ($numero_registro != 0) {

        // echo "<h2> Adelante </h2>";
        session_start();
        $_SESSION['session'] = $_POST['login'];
        //header("location:usuario_registro1.php");
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
  if (!isset($_session['session'])) {  //se no se ha iniciado sesion incluya el formulario

    include("formulario.html");
  }else{
    echo 'Usuario: ' . $_session['session'];
  }

  ?>
  <h2>Prueba</h2>

</body>

</html>