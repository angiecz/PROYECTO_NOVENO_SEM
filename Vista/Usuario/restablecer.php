<?php
if (isset($_GET['emaila']) && isset($_GET['token'])) {
  $email = $_GET['emaila'];
  $token = $_GET['token'];
} else {
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--  <link rel="stylesheet" href="../CSS/Login.css"> -->
  <link href="http://localhost/PROYECTO_NOVENO_SEM/CSS/RecuperarContra.css" rel="stylesheet" type="text/css">
  <title>Restablecer</title>
</head>

<body>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <form id="msform" action="../../Controlador/UsuarioControl.php" method="GET" class="form-signin">>
        <!-- progressbar -->
        <ul id="progressbar">
          <li class="active">Restablecer contraseña</li>
          <li class="active">Recuperar contraseña</li>
          <li class="active">Nueva contraseña</li>
        </ul>
        <!-- fieldsets -->
        <fieldset>
          <h2 class="fs-title">Generar nueva contraseña</h2>
          <h3 class="fs-subtitle">Hola, para la recuperación de tus credenciales necesitamos la siguiente información</h3>
          <input type="hidden" name="action" value="reestablecer">
          <input type="number" name="codigo" placeholder="Ingrese el codigo enviado" class="form-control">
          <input type="hidden" name="emaila" value='<?php echo $email; ?>'>
          <input type="hidden" name="token" class="form-control" value='<?php echo $token; ?>'>
          <button type="submit" class="next action-button">Restablecer</button>
        </fieldset>
      </form>
    </div>
  </div>

</body>

</html>