<?php
namespace Entidades;
require_once 'Persona.php';

class Coche extends Persona
{

    public $color = "rojo";
    private $cilindros = 8;

    public  function imprimir_color()
    {
        return $this->color;
    }

    public  function conducir()
    {
        $obj = new Coche();

        echo $obj->manejar();
    }

    public  function cilindros1()
    {
        return $this->cilindros;
    }

    
}
