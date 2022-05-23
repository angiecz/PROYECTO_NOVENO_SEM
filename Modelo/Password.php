<?php

require '../libs/model_main.php';

class Password extends model_main
{
    protected $id;
    protected $emaila;
    protected $token;
    protected $codigo;
    protected $fecha;

    protected function searchPasswordForToken($token, $email)
    {
        $ic = new Conexion();
        $sql = "SELECT token FROM passwords WHERE token ='$token' and  emaila = '$email'";
        $consulta = $ic->db->prepare($sql);
        $consulta->execute();
        $objetoconsulta = $consulta->fetchAll(PDO::FETCH_OBJ);

        return $objetoconsulta;
    }
    
}