<?php

class conexion{
   private $servername = "localhost";
   private $database = "crud_php";
   private $username = "root";
   private $password = "zenmuron";

   // Create connection
    public function conectar(){
        $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
    // Check connection
    return $conn;
    
    //echo "Conexion chida";
    
    }

    
    
}

$conectando = new conexion();
if ($conectando->conectar()) {
  //  echo "Chingon";
}else{
    
    die("Conexion erronea " . mysqli_connect_error());
}






?>