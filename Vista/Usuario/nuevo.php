<?php
$email=$_GET['emaila'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!--  <link rel="stylesheet" href="../CSS/Login.css"> -->
        <link href="http://localhost/PROYECTO_NOVENO_SEM/CSS/RecuperarContra.css" rel="stylesheet" type="text/css">
        <title>Nueva contraseña</title>
</head>
<body>
<!--
<div class="wrapper">
    <form action="../Controlador/UsuarioControl.php" method="GET" class="form-signin">
      <h2 class="form-signin-heading">Ingresa tu nueva contraseña</h2>
      <input type="hidden" name="action" value="contrasena"> 
      <input type="password" name="contra1" placeholder="Ingrese su nueva contraseña" class="form-control" >
      <input type="password" name="contra2" placeholder="Ingrese su nueva contraseña" class="form-control" >
      <input type="hidden" name="email"  class="form-control" value='<?php echo $email;?>'> 
      
      <button type="submit" class="btn btn-lg btn-primary btn-block" >Restablecer</button>  
    </form>
  </div>
  !-->
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
                <h3 class="fs-subtitle">Hola!, ya puedes escrribir tu nueva contraseña</h3>
               
                <input type="hidden" name="action" value="contrasena"> 
                <input type="password" name="contra1" placeholder="Ingrese su nueva contraseña" class="form-control" >
                <input type="password" name="contra2" placeholder="Ingrese su nueva contraseña" class="form-control" >
                <input type="hidden" name="email"  class="form-control" value='<?php echo $email;?>'> 
      
               <button type="submit" class="next action-button" >Guardar</button>  
              
               
            </fieldset>
            
        </form>

    </div>
</div>
</body>
  </html>