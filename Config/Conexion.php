<?php

    class Conexion{
        
        public $db;
        
        public function __construct(){
            
            $host = "localhost";
            $dbname = "proyecto_lineaiii";
            $username = "root";
            $password = "";
            
            try {
                
                $this->db = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
                
            } catch (PDOException $e) {
                
                echo "Error: ". $e->getMessage();
            }

            }
        
        
        
            //Funcion que me permite cerrar una conexion cuando yo quiera =)
            public function CloseConexion()
            {
                $this->db = null;
            }

    }
        
    

    

?>