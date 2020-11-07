<?php
require_once 'conexion.php';

class crudProcesses
{

    public function get_user()
    {

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

    public function insert_user($nombre, $apellidos)
    {

        $conectando = new conexion();
        $conn = $conectando->conectar();

        $usuarios = "INSERT INTO crud_php.usuarios (nombre,apellidos) values ('$nombre','$apellidos')";
        $result = mysqli_query($conn, $usuarios);

        return  json_encode($result);
    }

    public function get_id($id)
    {
        $conectando = new conexion();
        $conn = $conectando->conectar();

        $usuarios = "SELECT id_usuario,nombre,apellidos from crud_php.usuarios where id_usuario = '$id'";

        $rs = mysqli_query($conn, $usuarios);

        $data = mysqli_fetch_row($rs);

        return  json_encode($data);
    }
}
