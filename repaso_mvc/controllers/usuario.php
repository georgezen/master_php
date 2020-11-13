<?php
require_once 'models/usuario.php';


class UsuarioController 
{

    public function obtener_todos()
    {

       $user = new Usuario();

       $users = $user->get_all();

        require_once 'views/mostrar_todos.php';
        
    }

    public function crear()
    {
        require_once 'views/crear_usuario.php';
    }    
    
}
