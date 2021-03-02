<?php
require_once 'ModelBase.php';
class Usuario extends ModelBase
{

    public $nombre;
    public $apellidos;

    public function __construct()
    {
     parent::__construct();
    }

    public function get_nombre()
    {
        return $this->nombre = 2;
    }


}
