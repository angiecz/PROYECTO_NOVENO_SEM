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
    
   /* public function RedireccionarRolAdmin()
    {
    
       
       header("location: AdminControlador.php?action=admin");
    }*/
    /*public function RedireccionarRolUsuario()
    {
    
       
       header("location: Usuariocontrol.php?action=usuario");
    }
    public function RedireccionarRolInvitado()
    {
    
       
       header("location: InvitadoControlador.php?action=invitado");
    }*/
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
    public function LoginViewOlvidar()
    {
        require '../Vista/Usuario/recuperar.php';
    }
    
        
    
 
    public function InsertViewUsu()
    {
        require '../Vista/Usuario/usuario.php';
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
            <h1>Empresa X</h1>
            <div style="text-align:center; background-color:#ccc">
                <p>Restablecer contrasena</p>
                <h3>'.$codigo.'</h3>
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
        $nuevacontra=$_GET['contra1'];
        $confirmar=$_GET['contra2'];
        $email=$_GET['email'];
        if($nuevacontra==$confirmar){
           // $nuevacontra=sha1($confirmar);
           $nuevacontra= password_hash($confirmar, PASSWORD_BCRYPT);
            $ic=new Conexion();
            $sql="UPDATE usuarios SET contrasena='$nuevacontra' WHERE email='$email'";
         $consulta=$ic->db->prepare($sql);
         $consulta->execute();
         echo "<script>
            alert('Nueva Contraseña registrada, ya puede ingresar con sus credenciales.');
            window.location= 'UsuarioControl.php?action=login'
            </script>";  
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
    
      
    
   
   
/*public function SaveInfoForModel($nombre,$email,$documento,$contrasena,$rol) {
       $this->nombre =$nombre; 
       $this->email =$email; 
       $this->documento =$documento; 
       $this->contrasena =$contrasena; 
       $this->rol =$rol; 
       //$this->foto =$foto; 
      // $this->foto_url =$foto_url; 
       $this->InsertUsuario();
       
    }*/

   /*public function VerifyLogin($nombre,$password){
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
       echo "No es :'v";
   }

   }*/
   public function Salir(){
    session_destroy();
    $this->RedireccionarAlLogin();
   }
}

//LOS IF IBAN POR AQUI SOLOS
if(isset($_GET['action']) && $_GET['action']=='login'){
    $instanciacontrolador= new UsuarioControl();
    $instanciacontrolador->LoginView();
}

if(isset($_GET['action']) && $_GET['action']=='usuario'){
    $instanciacontrolador= new UsuarioControl();
    $instanciacontrolador->InsertViewUsu();
}

/*if(isset($_POST['action']) && $_POST['action']=='insert'){
    //Se encripta la contraseña
   $instanciacontrolador= new UsuarioControl();
    //$password= password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
    $password= sha1($_POST['contrasena']); //REQUERIMIENTO 3

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
}*/

/*if(isset($_POST['action']) && $_POST['action']=='login'){
    $instanciacontrolador= new UsuarioControl();
    $instanciacontrolador->VerifyLogin($_POST['nombre'],$_POST['password']);
}*/
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

?>
