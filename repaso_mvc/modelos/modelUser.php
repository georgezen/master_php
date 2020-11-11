<?php

class modelUser 
{

    public $nombre  = "pepe";
    public $apellidos = 'garcia';

    public function get_nombre()
    {
       return $this->nombre;
    }

    public function get_apellidos()
    {
        return $this->apellidos;
    }

    
}
