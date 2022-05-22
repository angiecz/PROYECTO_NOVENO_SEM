<!------------ Thanks Daniel Almeida for the reference  ----------->
<!-- https://dribbble.com/shots/4027518-Login-screen-interaction -->

<?php
if (isset($_GET['count'])) {
  $count = $_GET['count'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--  <link rel="stylesheet" href="../CSS/Login.css"> -->
  <link href="http://localhost/PROYECTO_NOVENO_SEM/CSS/Login.css" rel="stylesheet" type="text/css">
  <!-- ===== IONICONS ===== -->
  <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
  <title>Inicio de sesión</title>
</head>

<body>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--  <link rel="stylesheet" href="../CSS/Login.css"> -->
    <link href="http://localhost/PROYECTO_NOVENO_SEM/CSS/Login.css" rel="stylesheet" type="text/css">
    <title>Inicio de sesión</title>
  </head>

  <body>
    <div class="login-wrapper">
      <div class="login-left">
        <img src="../Imagenes/MACARENA.NET.gif">
        <div class="h1">Da clic para ingresar</div>
      </div>
      <form action="AdminControlador.php" method="POST" class="form_login">

        <div class="login-right">
          <div class="h2">Bienvenido al sistema</div>
          <div class="form-group">
            <input type="hidden" name="action" value="login">
            <input type="text" name="nombre" placeholder="Nombre de tu usuario" required>
            <label for="Email"></label>
          </div>
          <div class="password_flex">

            <input type="password" name="password" placeholder="Contraseña" id="password" required>
            <label for="password"></label>
            <button class="Botonpassword" type="button" onclick="mostrarPassword()">
              <ion-icon name="eye-outline" class="nav__logo" id="PasswordLogito"></ion-icon>
            </button>
          </div>
          <div class="button-area">
            <button class="btn btn-primary">Ingresar</button>
          </div>
          <div class="Olvidar_text">
            <a href="http://localhost/PROYECTO_NOVENO_SEM/Controlador/UsuarioControl.php?action=olvidar" class="">¿Olvidaste tu contraseña?</a>
          </div>
        </div>
        <script>
          var openLoginRight = document.querySelector('.h1');
          var loginWrapper = document.querySelector('.login-wrapper');

          openLoginRight.addEventListener('click', function() {
            loginWrapper.classList.toggle('open');
          });
        </script>


        <script>
          function mostrarPassword() {
            var tipo = document.getElementById("password");
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
  </body>

</html>