<?php

//$busqueda = $_GET["buscar"];    //almacena lo que te estoy pasando por la url [get]

$name = $_GET["name"];
$password = $_GET["password"];

$pass_cifrado = password_hash($password, PASSWORD_DEFAULT, array('cost' => 12)); //password_default = sal automatica



try {


    $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');

    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $base->exec('SET CHARACTER SET utf8');

    $sql = "INSERT INTO usuario_pass (USUARIOS, PASSWORDD) values (:usu,:pass)";

    $result = $base->prepare($sql);

    // $result->execute(array(":usu" => $name, ":pass" => $pass_cifrado));

    $result->execute(array(":usu" => $name, ":pass" => $pass_cifrado));
    echo 'Registro insertado';

    $result->closeCursor();
} catch (exception $e) {

    echo $e->getMessage();
} finally {
    $base = null;
}
