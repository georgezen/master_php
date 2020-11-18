<?php
require_once 'models/notas.php';


class NotaController
{

    public function obtener_todas()
    {
        $notin = new Nota();

        $imprimir_nota = $notin->get_all();

        require_once 'views/notas/listar.php';
        
    }

    public function crear()
    {
       
        
    }
}
