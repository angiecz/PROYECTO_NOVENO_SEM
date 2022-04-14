<?php
require '../Modelo/Admin.php';
require 'InicioControlador.php';
$ic= new InicioControlador();

class ChangePassword extends Admin{
    public function CompareNewsPasswords( $newpassword, $repeatnewpassword){
        if(strcmp($newpassword, $repeatnewpassword) != 0){
            echo "<script>
                alert('Las contraseñas no inciden');
            </script>";
            require '../Vista/Usuario/ChangePassword.php';
        }
    }

    public function CompareOldNewPasswords( $OldPassword, $name, $email){
        $usuarioinformacion=$this->BuscarContraForEmailName($name, $email);
        foreach($usuarioinformacion as $usuario){}
            if(!password_verify($OldPassword, $usuario->contrasena)){
                echo "<script>
                    alert('Las contraseñas no son iguales');
                </script>";
              }
    }

    public function ChangePasswords($name, $email, $newpassword){
        $newpassword= password_hash($newpassword, PASSWORD_BCRYPT);
        $updatepassword=$this->ChangePasswordBD($name, $email,$newpassword);
            echo "<script>
            alert('Nueva Contraseña actualizada.');
            window.location= 'UsuarioControl.php?action=login';
            </script>";  
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