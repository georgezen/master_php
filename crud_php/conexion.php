<?php
$servername = "localhost";
$database = "crud_php";
$username = "root";
$password = "zenmuron";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Conexion erronea " . mysqli_connect_error());
}
//echo "Conexion chida";

?>