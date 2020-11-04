<?php
require_once 'conexion.php';
header('Content-Type: application/json');


class crudProcesses{


    public function get_user(){
    

        $conectando = new conexion();
        $conn = $conectando->conectar();

        $usuarios = "select * from crud_php.usuarios";
        $datos = mysqli_query($conn, $usuarios);

        $usuario = array();
        foreach ($datos as $dato) {
            array_push($usuario, $dato);
        }

        return  json_encode($usuario);
    }

    public function insert_user($nombre, $apellidos){
    
        $conectando = new conexion();
        $conn = $conectando->conectar();

        $usuarios = "INSERT INTO crud_php.usuarios (nombre,apellidos) values ('$nombre','$apellidos')";
        $result = mysqli_query($conn, $usuarios);

        return  json_encode($result);
    }
}