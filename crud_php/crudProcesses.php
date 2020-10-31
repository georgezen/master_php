<?php
require_once 'conexion.php';

header('Content-Type: application/json');
$data =  "string";
//echo json_encode($data);


$usuarios = "select * from crud_php.usuarios";
$datos = mysqli_query($conn, $usuarios);

$usuario = array();
foreach($datos as $dato){
    array_push($usuario,$dato);
}
echo json_encode($usuario);
mysqli_close($conn);
