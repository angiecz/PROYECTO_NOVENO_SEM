<?php
if(isset($_SESSION['email'])){
$email = $_SESSION['email'];
$name = $_SESSION['nombre'];
}
else{
  //header("Location: login.php");
}
if(isset($_GET['msg'])){
    $msg = $_GET['msg'];
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../CSS/ChangePassword.css"> 
        <!-- ===== IONICONS ===== -->
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        <title>Cambiar contraseña</title>
    </head>
</html>
<body>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form id="msform" action="../Controlador/ChangePasswordControlador.php" method="POST" class="form-signin">
                <fieldset>
                    <h2 class="fs-title">Cambiar contraseña</h2>
                    <h3 class="fs-subtitle">Hola, para el cambio de tu contraseña es requerida la siguiente información</h3>
                    <input type="hidden" name="email" value='<?php echo $email;?>'>
                    <input type="hidden" name="name" value='<?php echo $name;?>'>
                    <input type="hidden" name="action" value="ChangePassword">
                    <div class="password_flex">
                        <input type="password" name="OldPassword" placeholder="OldPassword" id="OldPassword">
                        <button class="Botonpassword" type="button" onclick="mostrarOldContrasena()">
                            <ion-icon name="eye-outline" class="nav__logo" id="OldLogito"></ion-icon>
                        </button>
                    </div>
                    <div class="password_flex">
                        <input type="password" name="NewPassword" placeholder="NewPassword" id="NewPassword">
                        <button class= "Botonpassword" type="button" onclick="mostrarNewContrasena()">
                            <ion-icon name="eye-outline" class="nav__logo" id="NewLogito"></ion-icon>
                        </button>
                    </div>
                    <div class="password_flex">
                        <input type="password" name="RepeatNewPassword" placeholder="RepeatNewPassword" id="RepeatNewPassword">
                        <button class= "Botonpassword" type="button" onclick="mostrarRepeatNewContrasena()">
                            <ion-icon name="eye-outline" class="nav__logo" id="RepeatNewLogito"></ion-icon>
                        </button>
                    </div>
                    <button type="submit" class="next action-button">Restablecer</button>
                    <?php
                        if(isset($msg) and $msg ===1){
                            ?>
                            <p>Las contraseñas son distintas</p>
                            <?php
                        }else if(isset($msg) and $msg ===2){
                            ?>
                            <p>Las contraseñas son distintas</p>
                            <?php
                        }
                    ?>
                </fieldset>
            </form>
        </div>
    </div>
    <script>
        function mostrarOldContrasena(){
      var tipo = document.getElementById("OldPassword");
      var icon = document.getElementById("OldLogito");
      if(tipo.type == "password"){
        tipo.type = "text";
        icon.name = "eye-off-outline";
    }else{
        tipo.type = "password";
        icon.name = "eye-outline";
    }
}
function mostrarNewContrasena(){
    var tipo = document.getElementById("NewPassword");
    var icon = document.getElementById("NewLogito");
    if(tipo.type == "password"){
        tipo.type = "text";
        icon.name = "eye-off-outline";
    }else{
        tipo.type = "password";
        icon.name = "eye-outline";
    }
}
function mostrarRepeatNewContrasena(){
    var tipo = document.getElementById("RepeatNewPassword");
    var icon = document.getElementById("RepeatNewLogito");
    if(tipo.type == "password"){
        tipo.type = "text";
        icon.name = "eye-off-outline";
    }else{
        tipo.type = "password";
        icon.name = "eye-outline";
    }
}
    </script>
</body>
