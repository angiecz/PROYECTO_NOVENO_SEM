<?php 
require '../Controlador/InicioControlador.php';
$is= new InicioControlador();
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
                        <a href="http://localhost/PROYECTO_NOVENO_SEM/Controlador/UsuarioControl.php?action=login" class="nav__link">
                            <ion-icon name="chatbubbles-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Login</span>
                        </a>

                    
                        <!--<a href="http://localhost/PROYECTO_NOVENO_SEM/Controlador/UsuarioControl.php?action=insert" class="nav__link">
                            <ion-icon name="settings-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Registrese</span>
                        </a>
-->
                      <!--  <a href="http://localhost/PROYECTO_NOVENO_SEM/Controlador/UsuarioControl.php?action=usuario" class="nav__link">
                            <ion-icon name="chatbubbles-outline" class="nav__icon"></ion-icon> 
                            <span class="nav__name">Usuario</span> -->
                           
                            <?php 
                            try {
                                if(empty($_SESSION['rol'])){
                                    echo '<script language="javascript">alert("No recibirá mayor opción debido a no estar logueado, por favor dirígase al login.");</script>';
                                    
                                 } 
                                else if($_SESSION['rol']=='Admin') { ?>
                                <a href="http://localhost/PROYECTO_NOVENO_SEM/Controlador/AdminControlador.php?action=insert" class="nav__link">
                            <ion-icon name="settings-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Registrese</span>
                        </a>
                          <?php }} catch (Exception $e) {
                        
                              
                          
                          } ?>
                           
                             <!--  <a href="http://localhost/PROYECTO_NOVENO_SEM/Controlador/InvitadoControlador.php?action=invitado" class="nav__link">
                            <ion-icon name="chatbubbles-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Invitado</span>-->
                           
                         <!--  </a> -->
                    </div>
                </div>

                <a href="http://localhost/PROYECTO_NOVENO_SEM/Controlador/UsuarioControl.php?action=logout" class="nav__link">
                    <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>
        <script>
        /*===== EXPANDER MENU  =====*/ 
const showMenu = (toggleId, navbarId, bodyId)=>{
  const toggle = document.getElementById(toggleId),
  navbar = document.getElementById(navbarId),
  bodypadding = document.getElementById(bodyId)

  if(toggle && navbar){
    toggle.addEventListener('click', ()=>{
      navbar.classList.toggle('expander')

      bodypadding.classList.toggle('body-pd')
    })
  }
}
showMenu('nav-toggle','navbar','body-pd')

/*===== LINK ACTIVE  =====*/ 
const linkColor = document.querySelectorAll('.nav__link')
function colorLink(){
  linkColor.forEach(l=> l.classList.remove('active'))
  this.classList.add('active')
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))


/*===== COLLAPSE MENU  =====*/ 
const linkCollapse = document.getElementsByClassName('collapse__link')
var i

for(i=0;i<linkCollapse.length;i++){
  linkCollapse[i].addEventListener('click', function(){
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

  
      </script>
      
      <div align="center"><image src = "../Imagenes/FONDO.gif" >  </div>

</body>

</html>

