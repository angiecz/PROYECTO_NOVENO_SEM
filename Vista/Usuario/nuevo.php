<?php
$email=$_GET['emaila'];
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
        <!-- ===== IONICONS ===== -->
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        <link href="http://localhost/PROYECTO_NOVENO_SEM/CSS/RecuperarContra.css" rel="stylesheet" type="text/css">
        <title>Nueva contraseña</title>
</head>
<body>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form id="msform" action="../Controlador/UsuarioControl.php" method="GET" class="form-signin">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Restablecer contraseña</li>
                <li class="active">Recuperar contraseña</li>
                <li class="active">Nueva contraseña</li>
                
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Nueva contraseña</h2>
                <h3 class="fs-subtitle">Hola!, ya puedes escribir tu nueva contraseña</h3>
               
                <input type="hidden" name="action" value="contrasena"> 
                <span  class="fs-subtitle1" id="Mensaje">Aquí mostraremos la fortaleza generada por tu contraseña</span>
                <div class="password_flex">
                        <input type="password" name="contra" id="contra" placeholder="Ingrese su nueva contraseña" class="form-control" >
                        <button class="Botonpassword" type="button" onclick="mostrarNewPassword()">
                            <ion-icon name="eye-outline" class="nav__logo" id="NewPassword"></ion-icon>
                        </button>
                </div>
                <span  class="fs-subtitle1" id="Mensaje1">Estado de tu contraseña:</span>
                <div class="password_flex">
                        <input type="password" id="contra2" name="contra2" placeholder="Ingrese su nueva contraseña nuevamente" class="form-control" >
                        <button class="Botonpassword" type="button" onclick="mostrarNewPasswordRepeat()">
                            <ion-icon name="eye-outline" class="nav__logo" id="NewPasswordRepeat"></ion-icon>
                        </button>
                </div>
                <input type="hidden" name="email"  class="form-control" value='<?php echo $email;?>'> 
               <button type="submit" class="next action-button" >Guardar</button>     
            </fieldset>    
        </form>
    </div>
</div>
</body>
<script>
$('#contra').keyup(function(e) {
     var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
     var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
     var enoughRegex = new RegExp("(?=.{6,}).*", "g");
     if (false == enoughRegex.test($(this).val())) {
             $('#Mensaje').html('Incluye más caracteres.').css("color","black");
     } else if (strongRegex.test($(this).val())) {
             $('#Mensaje').className = 'ok';
             $('#Mensaje').html('¡Fuerte!').css("color","green");
     } else if (mediumRegex.test($(this).val())) {
             $('#Mensaje').className = 'alert';
             $('#Mensaje').html('¡Media!').css("color","purple");
     } else {
             $('#Mensaje').className = 'error';
             $('#Mensaje').html('¡Débil!').css("color","red");
     }
     return true;
});
$('#contra2').keyup(function(e) {
     var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
     var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
     var enoughRegex = new RegExp("(?=.{6,}).*", "g");
     if (false == enoughRegex.test($(this).val())) {
             $('#Mensaje1').html('Incluye más caracteres.').css("color","black");
     } else if (strongRegex.test($(this).val())) {
             $('#Mensaje1').className = 'ok';
             $('#Mensaje1').html('¡Fuerte!').css("color","green");
     } else if (mediumRegex.test($(this).val())) {
             $('#Mensaje1').className = 'alert';
             $('#Mensaje1').html('¡Media!').css("color","purple");
     } else {
             $('#Mensaje1').className = 'error';
             $('#Mensaje1').html('¡Débil!').css("color","red");
     }
     return true;
});
</script>


<script>
        function mostrarNewPassword(){
      var tipo = document.getElementById("contra");
      var icon = document.getElementById("NewPassword");
      if(tipo.type == "password"){
        tipo.type = "text";
        icon.name = "eye-off-outline";
    }else{
        tipo.type = "password";
        icon.name = "eye-outline";
    }
}
function mostrarNewPasswordRepeat(){
    var tipo = document.getElementById("contra2");
    var icon = document.getElementById("NewPasswordRepeat");
    if(tipo.type == "password"){
        tipo.type = "text";
        icon.name = "eye-off-outline";
    }else{
        tipo.type = "password";
        icon.name = "eye-outline";
    }
}
    </script>
  </html>