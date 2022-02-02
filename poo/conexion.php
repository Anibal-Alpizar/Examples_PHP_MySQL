<?php


require('config.php');


class Conexion
{

    protected $conexion_db;

    public function __construct()
    {

        //PDO
        try {

            $this->conexion_db = new PDO('mysql:host = localhost; dbname = pruebas', 'root', '');
            $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexion_db->exec("SET CHARACTER SET utf8");

            return $this->conexion_db;  //se retorna porque esta es la conexion final es la que se debe usar en otros archivos
        } catch (Exception $e) {

            echo 'La lina de error es: ' . $e->getLine();
        }
    }



    //MYSQLI ------------------------------------


    /*$this->conexion_db = new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE);

        if ($this->conexion_db->connect_errno) {

            echo 'Fallo al conectar a mysql: ' . $this->conexion_db->connect_error;

            return;
        }
        $this->conexion_db->set_charset(DB_CHARSET);*/
}
