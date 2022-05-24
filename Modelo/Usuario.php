<?php

require '../libs/model_main.php';
class Usuario extends model_main
{
  /*  protected $id;
    protected $nombre;
    protected $email;
    protected $documento;
    protected $contrasena;
    protected $rol;
    protected $foto;
    protected $foto_url;
    protected function InsertUsuario(){
        $ic=new Conexion();
        $sql= "INSERT INTO usuarios(nombre_usuario,email,documento,contrasena,rol) VALUES (?,?,?,?,?)";
        $insertar=$ic->db->prepare($sql);
        $insertar->bindParam(1,$this->nombre);
        $insertar->bindParam(2,$this->email);
        $insertar->bindParam(3,$this->documento);
        $insertar->bindParam(4,$this->contrasena);
        $insertar->bindParam(5,$this->rol);
        //$insertar->bindParam(6,$this->foto);
       // $insertar->bindParam(7,$this->foto_url);
        $insertar->execute();
    }*/
  /*protected function BuscarUsuarioForName(){
        $ic=new Conexion();
        $sql="SELECT * FROM usuarios WHERE nombre_usuario='$this->nombre'";
        $consulta=$ic->db->prepare($sql);
        $consulta->execute();
        $objetoconsulta=$consulta->fetchAll(PDO::FETCH_OBJ);
        return $objetoconsulta;
}*/
  protected function BuscarUsuarioForName($email)
  {
    $ic = new Conexion();
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $consulta = $ic->db->prepare($sql);
    $consulta->execute();
    $objetoconsulta = $consulta->fetchAll(PDO::FETCH_OBJ);

    return $objetoconsulta;
  }
  protected function searchPasswordForToken($token, $email, $codigo)
  {
    $ic = new Conexion();
    $sql = "SELECT id FROM passwords WHERE emaila ='$email' and token ='$token' and codigo = '$codigo'";
    $consulta = $ic->db->prepare($sql);
    $consulta->execute();
    $objetoconsulta = $consulta->fetchAll(PDO::FETCH_OBJ);

    return $objetoconsulta;
  }
}