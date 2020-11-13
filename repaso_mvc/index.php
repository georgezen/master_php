<?php
require_once 'controllers/usuario.php';
require_once 'controllers/nota.php';

if (isset($_GET['controlador'])) {
    $nombre_controlador = $_GET['controlador'];
} else {
    echo "No existe este controlador imbecil";
    exit();
}

if (class_exists($nombre_controlador)) {
    $controlador = new $nombre_controlador();

    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $accion = $_GET['action'];
        $controlador->$accion();
    } else {
       echo "No existe esta pagina";
    }
} else {
    echo "No existe este controlador pendejo";
}










?>
