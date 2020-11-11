<?php
declare(strict_types=1);//Esta linea de codigo activa el tipado fuerte de php

class Index
{


    public $color;
    public $modelo = 'Toyoya';

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function color_get(){
        $color = 'otro';
        return $color;
    }

    public  function ger_info(string $otro)
    {
        $info = $otro;
     return $info;
    }


    
}






