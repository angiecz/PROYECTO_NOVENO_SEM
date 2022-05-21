<?php
require '../Config/Conexion.php';
class Admin{
    protected $id;
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
        $insertar->execute();
       
}
protected function BuscarUsuarioForName(){
    $ic=new Conexion();
    $sql="SELECT * FROM usuarios WHERE nombre_usuario='$this->nombre'";
    $consulta=$ic->db->prepare($sql);
    $consulta->execute();
    $objetoconsulta=$consulta->fetchAll(PDO::FETCH_OBJ);
    return $objetoconsulta;
    
}

protected function BuscarContraForEmailName($name, $email){
    $ic=new Conexion();
    echo "<script>console.log('Console: " . $name . $email ."' );</script>";
    $sql="SELECT * FROM usuarios WHERE nombre_usuario='$name' and email = '$email'";
    $consulta=$ic->db->prepare($sql);
    $consulta->execute();
    $objetoconsulta=$consulta->fetchAll(PDO::FETCH_OBJ);
    return $objetoconsulta;
}

protected function ChangePasswordBD($name, $email, $newpassword){
    $ic=new Conexion();
    echo "<script>console.log('Console: " . $name . $email ."' );</script>";
    $sql="UPDATE usuarios SET contrasena = '$newpassword' WHERE nombre_usuario='$name' and email = '$email'";
    $actualizar=$ic->db->prepare($sql);
    $actualizar->execute();
    $objetoconsulta=$actualizar->fetchAll(PDO::FETCH_OBJ);
    return $objetoconsulta;
}

}
?>