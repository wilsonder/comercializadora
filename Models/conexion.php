<?php 

class con
{
    private static $conexion=NULL;
    function __construct(){}

    public static function conexion(){
        $loca='localhost';
        $user='root';
        $pass='';
        $db='comersena';
        $odbc='mysql:local=$local;dbname='.$db;

        try {
            self::$conexion=new PDO($odbc,$user,$pass);
        } catch (PDOException $e) {
            echo "ERROR:    ". $e->getMessage();
        }

        return self::$conexion;
    }
}

 ?>