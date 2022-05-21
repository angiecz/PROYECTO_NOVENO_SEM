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
    protected function insert_log($user_id,$log_type, $ip, $user_agent)
    {
        $ic = new Conexion();
        $sql = "INSERT INTO log(user_id,log_type, ip,user_agent) VALUES (?,?,?,?)";
        $insertar = $ic->db->prepare($sql);
        $insertar->bindParam(1, $user_id);
        $insertar->bindParam(2, $log_type);
        $insertar->bindParam(3, $ip);
        $insertar->bindParam(4, $user_agent);
        // $insertar->bindParam(4,$this->contrasena);
        // $insertar->bindParam(5,$this->rol);
        $insertar->execute();
    }
}