<?php
require '../Modelo/Usuario.php';

require 'InicioControlador.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';
$ics= new InicioControlador();


class UsuarioControl extends Usuario{
    
    public function RedireccionarAlLogin()
    {
        echo "<script>
        alert('Gracias por utilizar nuestros servicios.');
        window.location= 'UsuarioControl.php?action=login'
    </script>";
    }

     public function LoginView()
    {
        require '../Vista/Usuario/login.php';
    }
    public function LoginViewCuestionario()
    {
        require '../Vista/Usuario/cuestionario.php';
    }
   
    public function LoginViewOlvidar()
    {
        require '../Vista/Usuario/recuperar.php';
    }
    public function LoginViewPlaneacion()
    {
        require '../Vista/Usuario/planeacion.php';
    }
    
    public function ValidarPermisos()
    {
        if(isset($_SESSION['rol']) && $_SESSION['rol']!='Usuario'){
   
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
    public function Correo(){
       
        //include '../Vista/Usuario/recuperar.php'; 
        $ic=new Conexion();
        
        $codigo=rand(1000,9999);
        $emaila=$_GET['emaila'];
        $bytes=random_bytes(5);
        $token=bin2hex($bytes);
        $sql=" INSERT INTO passwords(emaila,token,codigo) VALUES(?,?,?) ";
         $insertar=$ic->db->prepare($sql);
        $insertar->bindParam(1,$emaila);
        $insertar->bindParam(2,$token);
        $insertar->bindParam(3,$codigo);
        $insertar->execute();
        
        $mensaje = '
        <html>
        <head>
          <title>Restablecer</title>
        </head>
        <body>
            <h1>Macarena.net</h1>
            <div style="text-align:center; background-color:#FAFAFA">
                <h3>Restablecer contraseña</h3>
                </div>
                <div style="text-align:center; background-color:#FAFAFA">
                <p>Hola! Este es tu token de confirmación de contraseña, por favor ingresa al link y sigue con el proceso</p>
                <img src="https://cdn-icons-png.flaticon.com/512/261/261036.png" width="70px" height="70px">
                </div>
                <div style="text-align:center; background-color:#7DF1C8 ">
                <h3>'.$codigo.'</h3>
                </div>
                <div style="text-align:center; background-color:#FAFAFA">
                <p> <a 
                    href="http://localhost/PROYECTO_NOVENO_SEM/Vista/Usuario/restablecer.php?emaila='.$emaila.'&token='.$token.'"> 
                    para restablecer da click aqui </a> </p>
                <p> <small>Si usted no envio este codigo favor de omitir</small> </p>
            </div>
        </body>
        </html>
        '; 
          
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'colombiabsent@gmail.com';
            $mail->Password   = 'colombia1234.';
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;
            $mail->setFrom('colombiabsent@gmail.com', 'Colombia Absent');
            $mail->addAddress($_GET['emaila']);
            $mail->isHTML(true);
            $mail->Subject = 'Reestablecer contraseña';
            $mail->Body    = $mensaje;
            $mail->send();
            echo "<script>
        alert('Por favor revisa tu correo electronico.');
        window.location= 'UsuarioControl.php?action=login'
    </script>";
        } catch (Exception $e) {
            echo "No se envio nada";
        }
      
    }

    public function RestablecerContraseña(){
        
        $email=$_GET['emaila'];
        $token=$_GET['token'];
        $codigo=$_GET['codigo'];
        $ic=new Conexion();
       
         $sql="SELECT * FROM passwords WHERE emaila='$email' and token='$token' and codigo=$codigo";
         $consulta=$ic->db->prepare($sql);
         $consulta->execute();
         $objetoc=$consulta->fetchAll(PDO::FETCH_ASSOC);
    
         $correcto=false;
         if($objetoc>0){
            $correcto=true;   
         }
         else{
            $correcto=false; 
         }
         if($correcto==true){
            require '../Vista/Usuario/nuevo.php';
         }
         //NO ME SIRVE ESTA VERIFICACION
         else{
            echo "<script>
            alert('Su código no existe o no es correcto.');
            window.location= '../Vista/Usuario/restablecer.php'
            </script>";
         }
         
    }
    public function NuevaContrasena(){
        $nuevacontra=$_GET['contra'];
        $confirmar=$_GET['contra2'];
        $email=$_GET['email'];
        if($nuevacontra==$confirmar){
           $nuevacontra= password_hash($confirmar, PASSWORD_BCRYPT);
            $ic=new Conexion();
            $sql="UPDATE usuarios SET contrasena='$nuevacontra' WHERE email='$email'";
         $consulta=$ic->db->prepare($sql);
         $consulta->execute();
         echo "<script>
            alert('Nueva Contraseña registrada, ya puede ingresar con sus credenciales.');
            window.location= 'UsuarioControl.php?action=login'
            </script>"; 
            
            $mensaje = '
            <html>
            <head>
              <title>Restablecer</title>
            </head>
            <body>
                <h1>Macarena.net</h1>
                <div style="text-align:center; background-color:#FAFAFA">
                    <h2>Contraseña actualizada</h2>
                    <p>¡Hola!, hemos aceptado el cambio de tu contraseña correctamente, bienvenido nuevamente!</p>
                    <img src="https://cdn-icons-png.flaticon.com/512/637/637546.png" width="70px" height="70px">
                    <p> <small> Si usted no cambió de contraseña por favor comuníquese con el administrador</small> </p>
                </div>
            </body>
            </html>
            '; 
           $mail = new PHPMailer(true);
            try {
                $mail->SMTPDebug = 0;
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'colombiabsent@gmail.com';
                $mail->Password   = 'colombia1234.';
                $mail->SMTPSecure = 'tls';
                $mail->Port       = 587;
                $mail->setFrom('colombiabsent@gmail.com', 'Colombia Absent');
                $mail->addAddress($_GET['email']);
                $mail->isHTML(true);
                $mail->Subject = 'Actualizacion contraseña';
                $mail->Body    = $mensaje;
                $mail->send();
                echo "<script>
            alert('Por favor revisa tu correo electronico.');
            window.location= 'UsuarioControl.php?action=login'
        </script>";
            } catch (Exception $e) {
                echo "No se envio nada";
            }
        }
        else{
            echo "<script>
            alert('No coinciden sus contraseñas, vuelva a registrarlas');
            window.location= '../Vista/Usuario/nuevo.php'
            </script>";
        }
    }
    public function ChangePassword()
    {
        require '../Vista/Usuario/ChangePassword.php';
    }
    
   public function Salir(){
    session_destroy();
    $this->RedireccionarAlLogin();
   }
}


if(isset($_GET['action']) && $_GET['action']=='login'){
    $instanciacontrolador= new UsuarioControl();
    $instanciacontrolador->LoginView();
}


if(isset($_GET['action']) && $_GET['action']=='logout'){
    $instanciacontrolador= new UsuarioControl();
    $instanciacontrolador->Salir();  
}

if(isset($_GET['action']) && $_GET['action']=='olvidar'){
    $instanciacontrolador= new UsuarioControl();
    $instanciacontrolador->LoginViewOlvidar();  
    
}

if(isset($_GET['action']) && $_GET['action']=='recuperar'){
    $instanciacontrolador= new UsuarioControl();
    $instanciacontrolador->Correo();
    
}

if(isset($_GET['action']) && $_GET['action']=='reestablecer'){
    $instanciacontrolador= new UsuarioControl();  
    $instanciacontrolador->RestablecerContraseña();
    
}

if(isset($_GET['action']) && $_GET['action']=='contrasena'){
    $instanciacontrolador= new UsuarioControl();
   $instanciacontrolador->NuevaContrasena(); 
}

if(isset($_GET['action']) && $_GET['action']=='changepassword'){
    $instanciacontrolador = new UsuarioControl();
    $instanciacontrolador -> ChangePassword();
    
}
if(isset($_GET['action']) && $_GET['action']=='valorar'){
    $instanciacontrolador= new UsuarioControl();
    $instanciacontrolador->LoginViewCuestionario();
    $instanciacontrolador->ValidarPermisos();
  
}

if(isset($_GET['action']) && $_GET['action']=='planeacion'){
    $instanciacontrolador= new UsuarioControl();
    $instanciacontrolador->LoginViewPlaneacion();
    $instanciacontrolador->ValidarPermisos();
  
}

?>
