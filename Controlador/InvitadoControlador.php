<?php
require '../Modelo/Invitado.php';
require 'InicioControlador.php';
$ics= new InicioControlador();

if(empty($_SESSION['nombre'])){
   echo "No se ha logueado";
    $ics->redireccionar();
}
class InvControlador extends Invitado{
    
    public function InsertViewInvitado()
    {
        require '../Vista/Invitado/invitado.php';
    }

}
if(isset($_GET['action']) && $_GET['action']=='invitado'){
    $instanciacontrolador= new InvControlador();
    $instanciacontrolador->InsertViewInvitado();
}

  if(isset($_SESSION['rol']) && $_SESSION['rol']!='Invitado'){
   
    echo "<script>
      alert('No tiene permisos en este módulo');
      window.location= '../Inicial/header.php#'
  </script>";
  }
  if(empty($_SESSION['rol'])){
   
    echo "<script>
    alert('No te encuentras logueado');
    window.location= 'UsuarioControl.php?action=login'
</script>";
  }
?>