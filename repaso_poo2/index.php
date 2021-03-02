<?php
require_once 'Entidades/Coche.php';
require_once 'Entidades2/Avion.php';

use Entidades\Coche;
use Entidades2\Avion as avioneta;
$obj = new Coche();
$avion = new avioneta();

$obj->color = 'negro';
echo $obj->imprimir_color()."<br>";

echo $obj->conducir()."<br>";

echo $obj->cilindros1()."<br>";

echo $avion->entity()."<br>";

/* Los namespace sirven para organizar los archivos que fueron declarados en 
una carpeta*/

?>