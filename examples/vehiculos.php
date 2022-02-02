<?php
class Coche

{
    protected $ruedas;
    var $color;
    var $motor;

    function __construct()
    {
        //estado inicial - constructor
        $this->ruedas = 4;
        $this->color = "";
        $this->motor = 1600;
    }

    function get_ruedas()
    {
        return $this->ruedas;
    }


    function arrancar()
    {
        echo "Estoy arrancando <br>";
    }

    function girar()
    {
        echo "Estoy girando <br>";
    }

    function frenar()
    {
        echo "Estoy frenando <br>";
    }

    function set_color($color_coche, $nombre_coche)
    {
        $this->color = $color_coche;
        echo "El color de" . $nombre_coche . " es: " . $this->color . "<br>";
    }
}

//--------------------------------------------------------------


class Camion extends Coche
{

    var $ruedas;
    var $color;
    var $motor;

    //function Coche()
    function __construct()
    {
        //estado inicial - constructor
        $this->ruedas = 8;
        $this->color = "";
        $this->motor = 2600;
    }

    function estable_color($color_camion, $nombre_camion)
    {
        $this->color = $color_camion;
        echo "El color de" . $nombre_camion . " es: " . $this->color . "<br>";
    }

    function arrancar()
    {
        parent::arrancar();
        echo "Camion arrancado";
    }
}
