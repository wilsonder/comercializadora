<?php
    class Login
    {

        // Variables 
        private $sesion;
        private $dbl;
    
        public function __construct()
        {
            // constantes para el acceso a DBMS
            $hostname = 'localhost';
            $database = 'comersena';
            $username = 'root';
            $password = "12345678";
            $dsn;

             try {
                $dsn = "mysql:host=$hostname;dbname=$database";
                $this->lista_usuarios = array();
                $this->dbl= new PDO($dsn, $username, $password);
            }

            catch (PDOException $e) {
                echo 'Excepción capturada: ', $e->getMessage(), $dsn, "\n";
            }
        }
     
        private function set_names()
        {
            return $this->dbl->query("SET NAMES 'utf8'");
        }
     
        public function login_usuario($e, $p)
        {
            try
            {
                self::set_names();
                $sql="select * from tb_usuario where usu_docu= '".$e."' and usu_contra = '".$p."'";
                foreach ($this->dbl->query($sql) as $res)
                {
                        $this->lista_usuarios[]=$res;
                }
                return $this->lista_usuarios;
                $this->dbl=null;
            }

            catch (PDOException $e) 
            {
                echo 'Excepción capturada: ', $e->getMessage(), "\n";
            }
        }
    }
?>