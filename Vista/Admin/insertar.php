

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="../CSS/Insert.css">
        
        <title>Registro Personal</title>
    </head>
    <!--
<div class="container" style="max-width: 650px; min-width: 400px;">
  <div class="card">
    <h2 class="card-header text-center">formulario de Registro</h2>
    <div class="card-body">
      <form id="myForm" method="POST" action="AdminControlador.php">
      <input type="hidden" name="action" value="insert">
        <div class="form-group">
          <legend>Datos de la Cuenta</legend>
          <label for="nombre">Nombre:</label>
          <input type="text" class="form-control" name="nombre" placeholder="Nombre de usuario" required>
          <label for="email">E-mail:</label>
          <input type="email" class="form-control" name="email" placeholder="Correo" required>
          <label for="documento">DOC:</label>
          <input type="number" class="form-control" name="documento" placeholder="IDENTIDAD" required>
          <label for="contrasena">Contraseña:</label>
          <input type="password" class="form-control" name="contrasena" placeholder="Contraseña" required>
        </div>

        <div class="form-group">
          <legend>Datos Personales</legend>
          <label for="rol">Rol:</label>
            <select class="form-control" name="rol">
              <option value="Admin">Admin</option>
              <option value="Usuario">Usuario</option>
              <option value="Invitado">Invitado</option>
              
            </select>   -->   
          <!--  <label for="imagen">Imagen Usuario:</label>
          <input type="file" class="form-control" name="imagen" accept= ".jpg, .png, .gif">    -->  
       <!--
        </div>
        <input type="submit" class="btn btn-success" id="boton" value="Registrar">
        <input type="reset" class="btn btn-danger" id="boton" value="Reiniciar">
      </form>
    </div>
</div>
</div>
!-->
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
          <label for="contrasena" class="fs-subtitle">Contraseña:</label>
          <input type="password" class="form-control" name="contrasena" placeholder="Contraseña" required>
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

</html>