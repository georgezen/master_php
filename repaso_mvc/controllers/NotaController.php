<?php
require_once 'models/notas.php';


class NotaController
{

    public function obtener_todas()
    {
        $notin = new Nota();

        $notas = $notin->get_all('nota');

        require_once 'views/notas/listar.php';
        
    }

    public function crear()
    {
       
        
    }
}
