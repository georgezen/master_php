<?php
require_once 'config/database.php';

class ModelBase
{
    public $db;

    public function __construct()
    {
     $this->db = database::conectar();
    }

    

    public function get_all()
    {
        var_dump($this->db);
        return "Obteniendo todos los registros";
    }

}
