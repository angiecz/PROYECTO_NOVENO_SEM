<?php
//require '../Config/Conexion.php';
require '../libs/model_main.php';
class Admin extends model_main{
    protected $id;
    protected $nombre;
    protected $email;
    protected $documento;
    protected $contrasena;
    protected $rol;

    protected function InsertUsuario(){
        $ic=new Conexion();
        $sql= "INSERT INTO usuarios(nombre_usuario,email,documento,contrasena) VALUES (?,?,?,?)";
        $insertar=$ic->db->prepare($sql);
        $insertar->bindParam(1,$this->nombre);
        $insertar->bindParam(2,$this->email);
        $insertar->bindParam(3,$this->documento);
        $insertar->bindParam(4,$this->contrasena);
        $insertar->execute();

        $ultimoid = $ic->db->lastInsertId();
        echo "<script>console.log('ultimoid: " .$ultimoid."' );</script>";
        return $ultimoid;
}

protected function InsertRolYPermisos(){
    $ic=new Conexion();
    echo "<script>console.log('despues del pivote: " .$this->id."' );</script>";
        $sql= "INSERT INTO usuario_permisos(usuario_id,rol_id,permiso_id) VALUES (?,?,?)";
        $insertar=$ic->db->prepare($sql);
        $insertar->bindParam(1,$this->id);
        $insertar->bindParam(2,$this->rol);
        $insertar->bindParam(3,$this->permiso);
        $insertar->execute();
}
protected function BuscarUsuarioForName(){
    $ic=new Conexion();
    $sql="SELECT u.id, u.nombre_usuario, u.email, u.contrasena, r.id AS rol_id, r.nombre AS rol FROM usuarios u INNER JOIN usuario_permisos u_p ON u.id = u_p.usuario_id INNER JOIN roles r ON u_p.rol_id = r.id WHERE u.nombre_usuario='$this->nombre' GROUP BY r.nombre";
    $consulta=$ic->db->prepare($sql);
    $consulta->execute();
    $objetoconsulta=$consulta->fetchAll(PDO::FETCH_OBJ);
    return $objetoconsulta;
}

protected function BuscarUsuarioPermisos(){
    $ic=new Conexion();
    $sql="SELECT u_p.permiso_id, p.nombre FROM usuario_permisos u_p INNER JOIN permisos p ON u_p.permiso_id = p.id WHERE u_p.usuario_id='$this->usuario_id' AND u_p.rol_id='$this->rol_id'";
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
protected function ConsultarRoles(){
    $ic = new Conexion();
    $sql = "SELECT id, nombre FROM roles";
    $consulta=$ic->db->prepare($sql);
    $consulta->execute();
    $objetoconsulta = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $objetoconsulta;
    
}
}
?>