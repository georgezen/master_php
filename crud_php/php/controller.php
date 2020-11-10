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

        case 'update':

            $id_update = $_POST['id_update_user'];
            $nombre_update = $_POST['nombre_edit'];
            $apellidos_update = $_POST['apellidos_edit'];

            echo $obj->update_user($id_update, $nombre_update, $apellidos_update);
            

            break;

        case 'delete_user':

            $id_del = $_POST['id_user_delete'];
            
            
            echo $obj->delete_user($id_del);


            break;            

        default:
            break;
    }
}
