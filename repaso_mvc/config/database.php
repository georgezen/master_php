<?php

class database{
    

    public static function conectar()
    {
        $con = new mysqli('localhost','root','zenmuron','repaso_mvc');

        $con->query('SET NAMES "utf8"');

        return $con;
    }

}
