<?php

header('Content-Type: application/json');

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellido'];

    $arra = array('nombre' => $nombre, 'apellido' => $apellidos);
    echo json_encode($arra);



?>