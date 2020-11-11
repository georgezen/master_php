<?php
require_once 'controllers/controllerUser.php';

$obj = new controllerUser();
//$obj->get_all();


if (isset($_GET['action'])) {
    $action = $_GET['action'];

    $obj->$action();
}










?>