<?php

require '../libs/model_main.php';

class Password extends model_main
{
    protected $id;
    protected $emaila;
    protected $token;
    protected $codigo;
    protected $fecha;

    // protected function insertPassword()
    // {
    //     $ic = new Conexion();
    //     $sql = "INSERT INTO usuarios(nombre_usuario,email,documento,contrasena,rol) VALUES (?,?,?,?,?)";
    //     $insertar = $ic->db->prepare($sql);
    //     $insertar->bindParam(1, $this->nombre);
    //     $insertar->bindParam(2, $this->email);
    //     $insertar->bindParam(3, $this->documento);
    //     $insertar->bindParam(4, $this->contrasena);
    //     $insertar->bindParam(5, $this->rol);
    //     $insertar->execute();
    // }
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