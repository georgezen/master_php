<?php
require_once "conexion.php";
require_once "crudProcesses.php";
header('Content-Type: application/json');

$operacion = $_POST['operador'];

$obj = new crudProcesses();

if ($operacion == "") {
    echo $obj->get_user();
} else {

    switch ($operacion) {
        case 'registro':

            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            echo $obj->insert_user($nombre, $apellidos);

            break;
        case 'get_id_for_edit':
            $id = $_POST['id_user_edit'];
            echo $obj->get_id($id);

            break;

        default:
            break;
    }
}
