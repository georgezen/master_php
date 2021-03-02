<?php
require_once '../modelos/Model.php';

class Controller
{



    public function heredando_modelos()
    {
        $invoca = new Model();
        echo $invoca->invocar();
    }
}

$obj = new Controller();
$obj->heredando_modelos();
