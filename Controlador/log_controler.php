<?php
require '../Modelo/log.php';
require 'InicioControlador.php';
$ics = new InicioControlador();


class log_controlador
{
    public function SaveInfoForModel($user_id, $ip)
    {
        $this->user_id = $user_id;
        $this->ip = $ip;
        //$this->insert_log();
    }
}
if (isset($_SESSION['rol']) && $_SESSION['rol'] != 'Admin') {
    echo "<script>
      alert('No tiene permisos en este módulo');
      window.location= '../Inicial/header.php#'
  </script>";
}

if (isset($_POST['action']) && $_POST['action'] == 'login') {
    $instanciacontrolador = new AdminControlador();
    $instanciacontrolador->VerifyLogin($_POST['nombre'], $_POST['password']);
}
if (isset($_GET['action']) && $_GET['action'] == 'admin') {
    $instanciacontrolador = new AdminControlador();
    $instanciacontrolador->InsertViewAdmin();
}
if (isset($_GET['action']) && $_GET['action'] == 'insert') {
    $instanciacontrolador = new AdminControlador();
    $instanciacontrolador->InsertView();
}