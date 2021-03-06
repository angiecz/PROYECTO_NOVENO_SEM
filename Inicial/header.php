<?php
require '../Controlador/InicioControlador.php';
$is = new InicioControlador();

if (empty($_SESSION['rol'])) {

    echo "<script>
        alert('No te encuentras logueado');
        window.location= '../Controlador/UsuarioControl.php?action=login'
    </script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="../CSS/Header.css">
    <title>MACARENA.NET-INICIO</title>
</head>

<body id="body-pd">
    <div class="l-navbar" id="navbar">
        <nav class="nav">
            <div>
                <div class="nav__brand">
                    <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                    <a href="#" class="nav__logo">Macarena.net</a>
                </div>
                <div class="nav__list">
                    <a href="#" class="nav__link active">
                        <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Inicio</span>
                    </a>
                    <?php
                    try {
                        if ($_SESSION['rol'] == 'Administrador') {
                            $permitir_registrar = false;
                            foreach ($_SESSION['Permisos'] as $permisos) {
                                if($permisos == 'Registrar usuarios'){
                                    $permitir_registrar = true;
                                    echo "<script>console.log('Tiene permiso de registrar' );</script>";
                                }
                            }
                            if($permitir_registrar == true){
                            ?>
                    <a href="http://localhost/PROYECTO_NOVENO_SEM/Controlador/AdminControlador.php?action=insert"
                        class="nav__link">
                        <ion-icon name="settings-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Registrar usuario</span>
                    </a>
                    <?php 
                            }
                        }
                    } catch (Exception $e) {
                    } ?>

                    <?php
                    try {
                        if ($_SESSION['rol'] == 'Administrador' || $_SESSION['rol'] == 'Usuario') {
                            $permitir_registrar = false;
                            foreach ($_SESSION['Permisos'] as $permisos) {
                                if($permisos == 'Hardening'){
                                    $permitir_registrar = true;
                                    echo "<script>console.log('Tiene permiso de hardening' );</script>";
                                }
                            }
                            if($permitir_registrar == true){
                            ?>
                    <a href="http://localhost/PROYECTO_NOVENO_SEM/Controlador/UsuarioControl.php?action=valorar"
                        class="nav__link">
                        <ion-icon name="clipboard-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Hardening</span>
                    </a>
                    <?php 
                            }
                        }
                    } catch (Exception $e) {
                    } ?>
                    <?php
                    try {
                        if ($_SESSION['rol'] == 'Usuario' || $_SESSION['rol'] == 'Administrador') { 
                            $permitir_planeacion = false;
                            foreach ($_SESSION['Permisos'] as $permisos) {
                                if($permisos == 'Planeacion'){
                                    $permitir_planeacion = true;
                                    echo "<script>console.log('Tiene permiso de planear' );</script>";
                                }
                            }
                            if($permitir_planeacion == true){
                            ?>
                    <a href="http://localhost/PROYECTO_NOVENO_SEM/Controlador/UsuarioControl.php?action=planeacion"
                        class="nav__link">
                        <ion-icon name="business-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Planeaci??n E</span>
                    </a>
                    <?php }
                    }
                    } catch (Exception $e) {
                    } ?>

                </div>
            </div>
            <div class="nav_list_under">
                <?php
                try {

                ?>
                <a href="http://localhost/PROYECTO_NOVENO_SEM/Controlador/UsuarioControl.php?action=changepassword"
                    class="nav__link">
                    <ion-icon name="finger-print-outline" class="nav__icon"></ion-icon>
                    <span class="nav__name">Cambiar contrase??a</span>
                </a>
                <?php
                } catch (Exception $e) {
                }
                ?>
                <a href="http://localhost/PROYECTO_NOVENO_SEM/Controlador/UsuarioControl.php?action=logout"
                    class="nav__link">
                    <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                    <span class="nav__name">Log Out</span>
                </a>
            </div>

        </nav>
    </div>
    <script>
    /===== EXPANDER MENU  =====/
    const showMenu = (toggleId, navbarId, bodyId) => {
        const toggle = document.getElementById(toggleId),
            navbar = document.getElementById(navbarId),
            bodypadding = document.getElementById(bodyId)

        if (toggle && navbar) {
            toggle.addEventListener('click', () => {
                navbar.classList.toggle('expander')

                bodypadding.classList.toggle('body-pd')
            })
        }
    }
    showMenu('nav-toggle', 'navbar', 'body-pd')

    // /= === = LINK ACTIVE === == /
    const linkColor = document.querySelectorAll('.nav__link')

    function colorLink() {
        linkColor.forEach(l => l.classList.remove('active'))
        this.classList.add('active')
    }
    linkColor.forEach(l => l.addEventListener('click', colorLink))


    // /= === = COLLAPSE MENU === == /
    const linkCollapse = document.getElementsByClassName('collapse__link')
    var i

    for (i = 0; i < linkCollapse.length; i++) {
        linkCollapse[i].addEventListener('click', function() {
            const collapseMenu = this.nextElementSibling
            collapseMenu.classList.toggle('showCollapse')

            const rotate = collapseMenu.previousElementSibling
            rotate.classList.toggle('rotate')
        })
    }
    </script>


    <!-- ===== IONICONS ===== -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

    <!-- ===== MAIN JS ===== -->
    <script src="assets/js/main.js"></script>

    <div align="center">
        <image src="../Imagenes/FONDO.gif">
    </div>

</body>

</html>