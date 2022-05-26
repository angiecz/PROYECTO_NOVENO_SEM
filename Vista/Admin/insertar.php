<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="forte.js"></script>
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="../CSS/Insert.css">
        <!-- ===== IONICONS ===== -->
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <title>Registro Personal</title>
</head>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form id="msform" method="POST" action="AdminControlador.php">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Registro de nuevo usuario</li>
                <li class="active">Inserción usuario</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Registro usuario</h2>
                <h3 class="fs-subtitle">Hola, por favor ingresa la información de acuerdo a lo solicitado.</h3>
                <input type="hidden" name="action" value="insert">
                <label for="nombre" class="fs-subtitle">Nombre:</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre de usuario" required>
                <label for="email" class="fs-subtitle">E-mail:</label>
                <input type="email" class="form-control" name="email" placeholder="Correo" required>
                <label for="documento" class="fs-subtitle">Documento de identidad:</label>
                <input type="number" class="form-control" name="documento" placeholder="Identidad" required>
                <br> <label for="contrasena" class="fs-subtitle">Contraseña:</label> </br>
                <span class="fs-subtitle1" id="Mensaje">Aquí mostraremos la fortaleza generada por tu contraseña</span>
                <div class="password_flex">
                    <input type="password" id="contrasena" class="input_contrasena" name="contrasena" placeholder="Contraseña" required>
                    <label for="password"></label>
                    <button class="Botonpassword" type="button" onclick="mostrarPassword()">
                        <ion-icon name="eye-outline" class="nav__logo" id="PasswordLogito"></ion-icon>
                    </button>
                </div>
                <fieldset>
                    <h2 class="fs-title">Acceso a reconocer</h2>
                    <label for="rol" class="fs-subtitle">Rol:</label>
                    <select class="form-control" name="rol" onchange="permisos(this.value)">
                        <?php
                        foreach ($rolesinformacion as $roles) {
                            echo '<option value="' . $roles["id"] . '">' . $roles["nombre"] . '</option>';
                        }
                        ?>
                    </select>
                </fieldset>
                <h2 class="fs-title" style="margin-top: 25px;">Establecer permisos</h2>
                <div class="div_permisos">
                    <p>
                    <input type="checkbox" id="cbox1" value="1" name="Permisos[]"> <label class="LabelCheck" for="cbox1" id="labcbox1">Registrar usuarios</label>
                    </p>
                    <p>
                    <input type="checkbox" id="cbox2" value="2" name="Permisos[]"> <label class="LabelCheck" for="cbox2" id="labcbox2">Formulario Hardening</label>
                    </p>
                    <p>
                    <input type="checkbox" id="cbox3" value="3" name="Permisos[]"> <label class="LabelCheck" for="cbox3" id="labcbox3">Planeación Estrategica</label>
                    </p>
                </div>
                <input type="submit" class="next action-button" id="boton1" value="Registrar">
                <input type="reset" class="next action-button" id="boton2" value="Reiniciar">
            </fieldset>
        </form>
    </div>
</div>
<script>
    $('#contrasena').keyup(function(e) {
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

    function permisos(id) {
        if (id == 1) {
            $("#cbox1").show();
            $("#cbox2").show();
            $("#cbox3").show();
            $("#labcbox1").show();
            $("#labcbox2").show();
            $("#labcbox3").show();
        }
        if (id == 2) {
            $("#cbox1").hide();
            $("#cbox2").show();
            $("#cbox3").show();
            $("#labcbox1").hide();
            $("#labcbox2").show();
            $("#labcbox3").show();

        }
    }
    function mostrarPassword() {
                    var tipo = document.getElementById("contrasena");
                    var icon = document.getElementById("PasswordLogito");
                    if (tipo.type == "password") {
                        tipo.type = "text";
                        icon.name = "eye-off-outline";
                    } else {
                        tipo.type = "password";
                        icon.name = "eye-outline";
                    }
                }
</script>
<script>

</script>

</html>