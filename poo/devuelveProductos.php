
<?php


require('conexion.php');

class devuelveProductos extends Conexion
{

    public function __construct()
    {
        parent::__construct();  //conectar con la base de datos
    }


    public function get_productos($dato)
    {

        $sql = "SELECT * FROM ARTICULOS WHERE PAÍSDEORIGEN ='" . $dato . "'";
        $sentencia = $this->conexion_db->prepare($sql); //preparar la consulta
        $sentencia->execute(array());
        $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);    //array asociativo

        $sentencia->closeCursor();

        return $resultado;

        $this->conexion_db = null;


        //MYSQLI
        /*
        $resultado = $this->conexion_db->query('SELECT * FROM ARTICULOS WHERE PAÍSDEORIGEN = "' . $dato . '"');  //hacer la consulta 
        $productos = $resultado->fetch_all(MYSQLI_ASSOC);   //almacenar los resultado en un array asociativo
        return $productos;  //devulve el array
        */
    }
}

?>