<?php
require_once 'config/database.php';

class ModelBase
{
    public $db;

    public function __construct()
    {
     $this->db = database::conectar();
    }

    

    public function get_all($tabla)
    {
        $query = $this->db->query('select * from '.$tabla);
        return $query;
        
    }

}
