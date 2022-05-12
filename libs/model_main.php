<?php
require '../Config/Conexion.php';

class model_main
{
    protected $id;
    protected $user_id;
    protected $ip;
    protected $user_agent;

    function __construct()
    {
        
    }
    protected function insert_log($user_id,$ip)
    {
        $ic = new Conexion();
        $sql = "INSERT INTO log(user_id,ip) VALUES (?,?)";
        $insertar = $ic->db->prepare($sql);
        $insertar->bindParam(1, $this->user_id);
        $insertar->bindParam(2, $this->ip);
        // $insertar->bindParam(3,$this->documento);
        // $insertar->bindParam(4,$this->contrasena);
        // $insertar->bindParam(5,$this->rol);
        $insertar->execute();
    }
}