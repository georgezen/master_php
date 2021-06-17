<?php
require_once "../config_log.php";
header('Content-Type: application/json');

$nombre = $_POST['name'];
$apellidos = $_POST['apellido'];
$carrera = $_POST['carrera'];
$array = explode(",", $carrera);

$data = array('nombre'=>$nombre, 'apellidos'=>$apellidos,'carrera'=>$array);

echo json_encode($data);




