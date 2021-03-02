<?php
require_once 'ModelBase.php';
class Nota extends ModelBase
{

    public $nombre;
    public $calificacion;

    public function __construct()
    {
     parent::__construct();
    }

    public function get_nombre()
    {
        return $this->nombre = 2;
    }


}
