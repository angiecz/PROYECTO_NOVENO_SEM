<?php
require '../Modelo/Admin.php';
require 'InicioControlador.php';
$ics = new InicioControlador();


class AdminControlador extends Admin
{

    function __construct()
    {
    }

    public function RedireccionarRolAdmin()
    {
        header("location: ../Inicial/header.php");
    }
    public function RedireccionarRolUsuario()
    {
        header("location: ../Inicial/header.php");
    }
    public function RedireccionarRolInvitado()
    {
        header("location: ../Inicial/header.php");
        
    }
    public function InsertView()
    {
        $rolesinformacion = $this->ConsultarRoles();
        require '../Vista/Admin/insertar.php';
    }
    
    public function ValidarPermisosAdmin()
    {
        if(isset($_SESSION['rol']) && $_SESSION['rol']!='Administrador'){
   
            echo "<script>
              alert('No tiene permisos en este módulo');
              window.location= '../Inicial/header.php#'
          </script>";
          }
          if(empty($_SESSION['rol'])){
           
            echo "<script>
            alert('No te encuentras logueado');
            window.location= 'UsuarioControl.php?action=login'
        </script>";
          }
    }

    public function VerifyLogin($nombre, $password, $postCount)
    {
        $arrayPermisos = [];
        $this->nombre = $nombre;
        $this->password = $password;
        $usuarioinformacion = $this->BuscarUsuarioForName();
        foreach ($usuarioinformacion as $usuario) {
        }
        if (password_verify($password, $usuario->contrasena)) {
            $_SESSION['nombre'] = $usuario->nombre_usuario;
            $_SESSION['email'] = $usuario->email;
            $_SESSION['rol'] = $usuario->rol;
            $_SESSION['rol_id'] = $usuario->rol_id;
            $_SESSION['id'] = $usuario->id;
            $this->usuario_id = $_SESSION['id'];
            $this->rol_id = $_SESSION['rol_id'];
            $usuariopermisos = $this->BuscarUsuarioPermisos();
            foreach ($usuariopermisos as $permisos) {    
                $arrayPermisos[] = $permisos->nombre;        
            }
            $_SESSION['Permisos'] = $arrayPermisos;
            //Log login correct
            $ip = $_SERVER['REMOTE_ADDR'];
            $user_agent = $_SERVER['HTTP_USER_AGENT'];
            $log_type = 1;
            $this->insert_log($usuario->id, $log_type, $ip, $user_agent);
            if ($_SESSION['rol'] == 'Administrador') {
                $this->RedireccionarRolAdmin();
            }
            if ($_SESSION['rol'] == 'Invitado') {
                $this->RedireccionarRolInvitado();
            }
            if ($_SESSION['rol'] == 'Usuario') {
                $this->RedireccionarRolUsuario();
            }
        } else {
            if ($postCount == 3) {
                 //Log many login attempts incorrecte
                $ip = $_SERVER['REMOTE_ADDR'];
                $user_agent = $_SERVER['HTTP_USER_AGENT'];
                $log_type = 3;
                $this->insert_log($usuario->id, $log_type, $ip, $user_agent);
                echo "<script>
                function popUp() {
                    swal('Good job!', 'You clicked the button!', 'success');
                }
                </script>";
                echo "<script>
                alert('Credenciales incorrectas, vuelva a intentarlo.');
                window.location= 'UsuarioControl.php?action=login'
            </script>";
            }
            echo "<script>
                alert('Credenciales incorrectas, vuelva a intentarlo.');
                window.location= 'UsuarioControl.php?action=login&count=$postCount'
            </script>";
        }
    }

    public function InsertViewAdmin()
    {
        require '../Vista/Admin/admin.php';
    }
    public function SaveInfoForModel($nombre,$email,$documento,$contrasena) {
        $this->nombre =$nombre; 
        $this->email =$email; 
        $this->documento =$documento; 
        $this->contrasena =$contrasena;
        $id_user = $this->InsertUsuario();
        //$this->rol =$rol; 
        $this->InsertUsuario();
        //Log Created user new
        $ip = $_SERVER['REMOTE_ADDR'];
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $log_type = 2;
        $this->insert_log( $_SESSION['id'], $log_type, $ip, $user_agent);
        echo "<script>console.log('despues de insert: " .$id_user."' );</script>";
        return $id_user;
        
        
    }
    public function SaveRolYPermisos($rol, $id, $permiso) {
        echo "<script>console.log('dentro del save: " .$id."' );</script>";
            $this->id = $id;
            $this->rol = $rol;
            $this->permiso = $permiso;
            $this->InsertRolYPermisos();
        }
    }
if (isset($_SESSION['rol']) && $_SESSION['rol'] != 'Administrador') {

    echo "<script>
      alert('No tiene permisos en este módulo');
      window.location= '../Inicial/header.php#'
  </script>";
}
if (isset($_POST['action']) && $_POST['action'] == 'login') {
    echo "<script>
            alert(Entra');'
            </script>";
    $instanciacontrolador = new AdminControlador();
    if (isset($_POST['count'])) {
        $sum = intval($_POST['count']) + 1;
        $instanciacontrolador->VerifyLogin($_POST['nombre'], $_POST['password'], $sum);
    } else {
        $instanciacontrolador->VerifyLogin($_POST['nombre'], $_POST['password'], 1);
    }
}

if (isset($_GET['action']) && $_GET['action'] == 'admin') {
    $instanciacontrolador = new AdminControlador();
    $instanciacontrolador->InsertViewAdmin();
}
if (isset($_GET['action']) && $_GET['action'] == 'insert') {
    $instanciacontrolador = new AdminControlador();
    $instanciacontrolador->InsertView();
    $instanciacontrolador->ValidarPermisosAdmin();
}
if (isset($_POST['action']) && $_POST['action'] == 'insert') {
    //Se encripta la contraseña
    $instanciacontrolador = new AdminControlador();
    $password = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
    //$password= sha1($_POST['contrasena']); //REQUERIMIENTO 3

    $id = $instanciacontrolador->SaveInfoForModel(
        $_POST['nombre'],
        $_POST['email'],
        $_POST['documento'],
        $password,
    );
    echo "<script>console.log('antes de save: " .$id."' );</script>";
    foreach( $_POST['Permisos'] as $permisos){
        $instanciacontrolador->SaveRolYPermisos($_POST['rol'], $id, $permisos);
    }
    
    echo "<script>
            alert('Usuario Registrado');
            window.location= '../Inicial/header.php'
            </script>";  
}

?>