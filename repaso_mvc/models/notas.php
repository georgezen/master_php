<?php
require_once 'ModelBase.php';
class Nota extends ModelBase
{

    public $nombre;
    public $calificacion;


    public function get_nombre()
    {
        return $this->nombre = 2;
    }


}
