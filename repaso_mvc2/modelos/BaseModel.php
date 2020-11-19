<?php

class BaseModel 
{

    public $nombre;
    public $grado;

    public function __construct($nombre,$grado)
    {
        $this->nombre = $nombre;
        $this->grado = $grado;
    }

    public function get_datos()
    {

        $texto = "El grado es ".$this->nombre." y el grado es: ".$this->grado;

        return $texto;
        
    }
    
}



