<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="../CSS/RecuperarContra.css"> 
      

     <!-- <link href="http://localhost/PROYECTO_NOVENO_SEM/CSS/RecuperarContra.css" rel="stylesheet" type="text/css">  -->
        <title>Recuperación de contraseña</title>
</head>

<body>
<!--
<div class="wrapper">
    <form action="UsuarioControl.php" method="GET" class="form-signin">
      <h2 class="form-signin-heading">Ingresa el correo electrónico</h2>
      <input type="hidden" name="action" value="recuperar"> 
      <input type="email" name="emaila" placeholder="Email Address" class="form-control" required /> 
      <input type="submit" class="btn btn-lg btn-primary btn-block" ></input>  
    </form>
    
  </div>
  !-->
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form id="msform">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Restablecer contraseña</li>
                <li class="active">Recuperar contraseña</li>
                <li class="active">Nueva contraseña</li>
                
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Solicitar nueva contraseña</h2>
                <h3 class="fs-subtitle">Hola, para la recuperación de tus credenciales necesitamos tu correo electrónico</h3>
                <input type="hidden" name="action" value="recuperar"> 
                <input type="email" name="emaila" placeholder="Email Address" class="form-control" required /> 
                <button type="submit" class="next action-button">Enviar</button>
               
            </fieldset>
            
        </form>

    </div>
</div>
  

</body>
  </html>