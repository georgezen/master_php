<?php
require_once 'BaseModel.php';

class Model extends BaseModel
{

    public function __construct()
    {
     parent::__construct("usuarios","alto2");
    }

    public function invocar()
    {
        $modelin = new Model();
        return $modelin->get_datos();
        
    }
    
}

$invoca = new Model();
$invoca->invocar();

?>