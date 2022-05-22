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
                <input type="password" id="contrasena" class="form-control" name="contrasena" placeholder="Contraseña" required>
                <fieldset>
                    <h2 class="fs-title">Acceso a reconocer</h2>
                    <label for="rol" class="fs-subtitle">Rol:</label>
                    <select class="form-control" name="rol">
                        <option value="Admin">Admin</option>
                        <option value="Usuario">Usuario</option>
                        <option value="Invitado">Invitado</option>
                    </select>
                </fieldset>
                <input type="submit" class="next action-button" id="boton" value="Registrar">
                <input type="reset" class="next action-button" id="boton" value="Reiniciar">
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
</script>

</html>