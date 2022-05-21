<?php
require '../Modelo/Admin.php';
require 'InicioControlador.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';
$ic= new InicioControlador();

class ChangePassword extends Admin{
    public function CompareNewsPasswords( $newpassword, $repeatnewpassword){
        $instanciacontrolador = new ChangePassword();
        if(strcmp($newpassword, $repeatnewpassword) != 0){
            header("Location: http://localhost/PROYECTO_NOVENO_SEM/Controlador/UsuarioControl.php?action=changepassword&msg=2");
            die();
        }
    }

    public function CompareOldNewPasswords( $OldPassword, $name, $email){
        $instanciacontrolador = new ChangePassword();
        $usuarioinformacion=$this->BuscarContraForEmailName($name, $email);
        foreach($usuarioinformacion as $usuario){}
            if(!password_verify($OldPassword, $usuario->contrasena)){
                header("Location: http://localhost/PROYECTO_NOVENO_SEM/Controlador/UsuarioControl.php?action=changepassword&msg=1");
                die();
              }

    }

    public function ChangePasswords($name, $email, $newpassword){
        $newpassword= password_hash($newpassword, PASSWORD_BCRYPT);
        $updatepassword=$this->ChangePasswordBD($name, $email, $newpassword);
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
            $mail->CharSet = 'UTF-8';
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'colombiabsent@gmail.com';
            $mail->Password   = 'colombia1234.';
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;
            $mail->setFrom('colombiabsent@gmail.com', 'Colombia Absent');
            $mail->addAddress($_POST['email']);
            $mail->isHTML(true);
            $subject = "Actualizacion contraseña";
            $subject = utf8_decode($subject);
            $mail->Subject = $subject;
            $mail->Body    = $mensaje;
            $mail->send();
            echo "<script>
                alert('Se ha actualizado tu contraseña. Por favor revisa tu correo');
                window.location= 'http://localhost/PROYECTO_NOVENO_SEM/Inicial/header.php'
            </script>";
        } catch (Exception $e) {
            echo "No se envio nada";
        }
    }

    public function ChangePassword(){
        require '../Vista/Usuario/ChangePassword.php';
    }
}
    if(isset($_POST['action']) && $_POST['action']=='ChangePassword'){
        $instanciacontrolador = new ChangePassword();
        $instanciacontrolador -> CompareNewsPasswords($_POST['NewPassword'], $_POST['RepeatNewPassword']);
        $instanciacontrolador -> CompareOldNewPasswords($_POST['OldPassword'], $_POST['name'], $_POST['email']);
        $instanciacontrolador -> ChangePasswords($_POST['name'], $_POST['email'], $_POST['NewPassword']);

    }
?>