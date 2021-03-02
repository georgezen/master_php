<?php
require_once 'models/usuario.php';
require_once './vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

class UsuarioController
{

    public function obtener_todos()
    {

        $user = new Usuario();
        $html = "";
        $users = $user->get_all('usuario');

        $html .= "<ul>";
        while($user = $users->fetch_object()):
            $html .=  "<li>"."El nombre es: ".$user->nombre." y el apellido es: ".$user->apellidos."</li>";
        endwhile;
        $html .= "</ul>";

        $pdf = new Html2Pdf;
        $pdf->writeHTML($html);
        $document = $pdf->output();

        require_once 'views/mostrar_todos.php';
    }

    

    public function crear()
    {
        $cadena = "dwewew";
        $pdf = new Html2Pdf;
        $pdf->writeHTML($cadena);
        $document = $pdf->output();


        require_once 'views/crear_usuario.php';
    }
}
