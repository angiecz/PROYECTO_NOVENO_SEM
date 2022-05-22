<?php
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $name = $_SESSION['nombre'];
} else {
    //header("Location: login.php");
}
if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="forte.js"></script>
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
                    <h3 class="fs-subtitle">Hola, para el cambio de tu contraseña es requerida la siguiente información
                    </h3>
                    <input type="hidden" name="email" value='<?php echo $email; ?>'>
                    <input type="hidden" name="name" value='<?php echo $name; ?>'>
                    <input type="hidden" name="action" value="ChangePassword">
                    <div class="password_flex">
                        <input type="password" name="OldPassword" placeholder="Digite su contraseña actual" id="OldPassword">
                        <button class="Botonpassword" type="button" onclick="mostrarOldContrasena()">
                            <ion-icon name="eye-outline" class="nav__logo" id="OldLogito"></ion-icon>
                        </button>
                    </div>
                    <span class="fs-subtitle1" id="Mensaje">Estado de tu contraseña:</span>
                    <div class="password_flex">
                        <input type="password" name="NewPassword" placeholder="Digite su nueva contraseña" id="NewPassword">
                        <button class="Botonpassword" type="button" onclick="mostrarNewContrasena()">
                            <ion-icon name="eye-outline" class="nav__logo" id="NewLogito"></ion-icon>
                        </button>
                    </div>
                    <span class="fs-subtitle1" id="Mensaje1">Estado de tu contraseña:</span>
                    <div class="password_flex">
                        <input type="password" name="RepeatNewPassword" placeholder="Vuelva a digitar su nueva contraseña" id="RepeatNewPassword">
                        <button class="Botonpassword" type="button" onclick="mostrarRepeatNewContrasena()">
                            <ion-icon name="eye-outline" class="nav__logo" id="RepeatNewLogito"></ion-icon>
                        </button>
                    </div>
                    <?php
                    if (isset($msg) && $msg == 1) {
                    ?>
                        <p class="Advertencia">La contraseña antigua no es igual</p>
                    <?php
                    } else if (isset($msg) && $msg == 2) {
                    ?>
                        <p class="Advertencia">Las contraseñas son distintas</p>
                    <?php
                    }
                    ?>
                    <button type="submit" class="next action-button">Restablecer</button>
                </fieldset>
            </form>
        </div>
    </div>
    <script>
        function mostrarOldContrasena() {
            var tipo = document.getElementById("OldPassword");
            var icon = document.getElementById("OldLogito");
            if (tipo.type == "password") {
                tipo.type = "text";
                icon.name = "eye-off-outline";
            } else {
                tipo.type = "password";
                icon.name = "eye-outline";
            }
        }

        function mostrarNewContrasena() {
            var tipo = document.getElementById("NewPassword");
            var icon = document.getElementById("NewLogito");
            if (tipo.type == "password") {
                tipo.type = "text";
                icon.name = "eye-off-outline";
            } else {
                tipo.type = "password";
                icon.name = "eye-outline";
            }
        }

        function mostrarRepeatNewContrasena() {
            var tipo = document.getElementById("RepeatNewPassword");
            var icon = document.getElementById("RepeatNewLogito");
            if (tipo.type == "password") {
                tipo.type = "text";
                icon.name = "eye-off-outline";
            } else {
                tipo.type = "password";
                icon.name = "eye-outline";
            }
        }
    </script>
</body>
<script>
        $('#NewPassword').keyup(function(e) {
                var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
                var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
                var enoughRegex = new RegExp("(?=.{6,}).*", "g");
                if (false == enoughRegex.test($(this).val())) {
                        $('#Mensaje').html('Incluye más caracteres.').css("color", "black");
                } else if (strongRegex.test($(this).val())) {
                        $('#Mensaje').className = 'ok';
                        $('#Mensaje').html('¡Fuerte!').css("color", "green");
                } else if (mediumRegex.test($(this).val())) {
                        $('#Mensaje').className = 'alert';
                        $('#Mensaje').html('¡Media!').css("color", "purple");
                } else {
                        $('#Mensaje').className = 'error';
                        $('#Mensaje').html('¡Débil!').css("color", "red");
                }
                return true;
        });
        $('#RepeatNewPassword').keyup(function(e) {
                var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
                var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
                var enoughRegex = new RegExp("(?=.{6,}).*", "g");
                if (false == enoughRegex.test($(this).val())) {
                        $('#Mensaje1').html('Incluye más caracteres.').css("color", "black");
                } else if (strongRegex.test($(this).val())) {
                        $('#Mensaje1').className = 'ok';
                        $('#Mensaje1').html('¡Fuerte!').css("color", "green");
                } else if (mediumRegex.test($(this).val())) {
                        $('#Mensaje1').className = 'alert';
                        $('#Mensaje1').html('¡Media!').css("color", "purple");
                } else {
                        $('#Mensaje1').className = 'error';
                        $('#Mensaje1').html('¡Débil!').css("color", "red");
                }
                return true;
        });
</script>