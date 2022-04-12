<?php
class InicioControlador{
    public function __construct(){
    session_start();

    }
    public function redireccionar(){
        header("location: ../Controlador/UsuarioControl.php?action=admin");
    }
    public function RedireccionarInicio(){
        header("location: ../Inicial/header.php#");
    }
    
}


?>