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
            echo "<script>
                alert('Las contraseñas no inciden');
            </script>";
            //require ;
            header("Location: http://localhost/PROYECTO_NOVENO_SEM/Controlador/UsuarioControl.php?action=changepassword");
            die();
        }
        $instanciacontrolador -> CompareOldNewPasswords($_POST['OldPassword'], $_POST['name'], $_POST['email']);
    }

    public function CompareOldNewPasswords( $OldPassword, $name, $email){
        $instanciacontrolador = new ChangePassword();
        $usuarioinformacion=$this->BuscarContraForEmailName($name, $email);
        foreach($usuarioinformacion as $usuario){}
            if(!password_verify($OldPassword, $usuario->contrasena)){
                echo "<script>
                    alert('Las contraseñas no son iguales');
                </script>";
            require '../Vista/Usuario/ChangePassword.php';
              }
              $instanciacontrolador -> ChangePasswords($_POST['name'], $_POST['email'], $_POST['NewPassword']);

    }

    public function ChangePasswords($name, $email, $newpassword){
        $newpassword= password_hash($newpassword, PASSWORD_BCRYPT);
        $updatepassword=$this->ChangePasswordBD($name, $email,$newpassword);
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
            alert('Se ha actualizado tu contraseña. \nPor favor revisa tu correo');
            window.location= 'UsuarioControl.php?action=login';
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
    }
?>