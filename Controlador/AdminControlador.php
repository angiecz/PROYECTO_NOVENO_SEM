<?php
require '../Modelo/Admin.php';
require 'InicioControlador.php';
$ics= new InicioControlador();


class AdminControlador extends Admin{
    public function RedireccionarRolAdmin()
    {
    
       
       header("location: AdminControlador.php?action=admin");
    }
    public function RedireccionarRolUsuario()
    {
    
       
       header("location: Usuariocontrol.php?action=usuario");
    }
    public function RedireccionarRolInvitado()
    {
    
       
       header("location: InvitadoControlador.php?action=invitado");
    }
    public function InsertView()
    {
        require '../Vista/Admin/insertar.php';
    }

    public function VerifyLogin($nombre,$password){
        $this->nombre=$nombre;
        $this->password=$password;
       
        $usuarioinformacion=$this->BuscarUsuarioForName();
        foreach($usuarioinformacion as $usuario){}
           if(password_verify($password,$usuario->contrasena)){
            
               $_SESSION['nombre']=$usuario->nombre_usuario;
               $_SESSION['email']=$usuario->email;
               $_SESSION['rol']=$usuario->rol;

             if($_SESSION['rol']=='Admin'){
                $this->RedireccionarRolAdmin();
               }
               if($_SESSION['rol']=='Invitado'){
                $this->RedireccionarRolInvitado();
               }
               if($_SESSION['rol']=='Usuario'){
                $this->RedireccionarRolUsuario();
               }
           }
           else{
            echo "<script>
            alert('Credenciales incorrectas, vuelva a intentarlo.');
            window.location= 'UsuarioControl.php?action=login'
        </script>";
           }
        
           }

    public function InsertViewAdmin()
    {
        require '../Vista/Admin/admin.php';
    }
    public function SaveInfoForModel($nombre,$email,$documento,$contrasena,$rol) {
        $this->nombre =$nombre; 
        $this->email =$email; 
        $this->documento =$documento; 
        $this->contrasena =$contrasena; 
        $this->rol =$rol; 
        //$this->foto =$foto; 
       // $this->foto_url =$foto_url; 
        $this->InsertUsuario();

}
}
 if(isset($_SESSION['rol']) && $_SESSION['rol']!='Admin'){
   
      echo "<script>
      alert('No tiene permisos en este módulo');
      window.location= '../Inicial/header.php#'
  </script>";
  }

   
  if(isset($_POST['action']) && $_POST['action']=='login'){
    $instanciacontrolador= new AdminControlador();
    $instanciacontrolador->VerifyLogin($_POST['nombre'],$_POST['password']);
}
if(isset($_GET['action']) && $_GET['action']=='admin'){
    $instanciacontrolador= new AdminControlador();
    $instanciacontrolador->InsertViewAdmin();
}
if(isset($_GET['action']) && $_GET['action']=='insert'){
    $instanciacontrolador= new AdminControlador();
    $instanciacontrolador->InsertView();
}
if(isset($_POST['action']) && $_POST['action']=='insert'){
    //Se encripta la contraseña
   $instanciacontrolador= new AdminControlador();
    $password= password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
    //$password= sha1($_POST['contrasena']); //REQUERIMIENTO 3

    //No me funciono esta parte para la foto.
    //$foto= $_FILES['imagen']['name'];
    //$fototemporal= $_FILES['imagen']['tmp_name'];
    //$fotourl="../Vista/Usuario/Image/" . $foto;
    //copy($fototemporal,$foto_url);
    $instanciacontrolador->SaveInfoForModel(
        $_POST['nombre'],
        $_POST['email'],
        $_POST['documento'],
        $password,
        $_POST['rol'],
        //$foto,
       // $foto_url
        
    );
    echo "<script>
            alert('Usuario Registrado');
            window.location= '../Inicial/header.php'
            </script>";  
}
?>