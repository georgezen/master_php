<?php

class controllerUser 
{
    
    public function get_all()
    {
        require_once 'modelos/modelUser.php';
        $user = new modelUser();
        
       echo  $user->get_nombre();
        require_once 'index.php';
    }

    public function get_all2()
    {
     echo 'hola';
    }
    
}


