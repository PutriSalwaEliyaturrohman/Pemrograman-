<?php
class Conection 
{
    public function get_connection()
    {
        $host = "localhost";
        $database = "db_klinik" ;
        $username = "root";
        $password = "";
        $connect = new mysqli($host, $username,$password,$database);
        return $connect;
    }

}