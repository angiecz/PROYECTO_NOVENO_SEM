<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="forte.js"></script>
    <link rel="stylesheet" href="../CSS/Cuestionario.css">

    <title>Cuestionario Hardening</title>
</head>

<body>
    <div class="wrap">
        <div class="info">
            <h1>Hardening</h1>
            <p>Bienvenido al cuestionario de Hardening. Como bien sabe, es importante brindar confiabilidad y seguridad
                por medio de
                su sistema; es por esta razón que necesitamos que responda con sinceridad las siguientes preguntas</p>
        </div>

        <form action="" class="formulario">
            <div class="radio">
                <h2>Auditoría de sistemas</h2>
                <p>¿Se realiza una revisión frecuente al sistema implementado dentro de su empresa?</p>

                <input type="radio" name="radio" id="Abrir" class="Abrir" required>
                <label for="Abrir">No</label>
                <input type="radio" name="radio" id="Fechar" class="Fechar" required>
                <label for="Fechar">Sí</label>
                <br></br>
                <h4 id="Revision"></h4>
                <span class="fs-subtitle1" id="Mensaje"></span>
            </div>
        </form>
        <form action="" class="formulario">
            <div class="radio">
                <h2>Fortalecimiento de sistemas</h2>
                <p>¿Tiene un plan de acción para controlar riesgos o problemas que se presenten en el sistema?</p>
                
                <input type="radio" name="radio" id="Abrir1" class="Abrir" required>
                <label for="Abrir1">No</label>
                <input type="radio" name="radio" id="Fechar1" class="Fechar" required>
                <label for="Fechar1">Sí</label>
                <br></br>
                <h4 id="Revision1"></h4>
                <span class="fs-subtitle1" id="Mensaje1"></span>
            </div>
        </form>
        <form action="" class="formulario">
            <div class="radio">
                <p>¿Cuenta con personal capacitado para mantener y preservar la seguridad de su sistema?</p>
                
                <input type="radio" name="radio" id="Abrir2" class="Abrir" required>
                <label for="Abrir2">No</label>
                <input type="radio" name="radio" id="Fechar2" class="Fechar" required>
                <label for="Fechar2">Sí</label>
                <br></br>
                <h4 id="Revision2"></h4>
                <span class="fs-subtitle1" id="Mensaje2"></span>
            </div>
        </form>
        <form action="" class="formulario">
            <div class="radio">
                <p>¿Siempre descarga aplicaciones desde su sitio oficial?</p>
                
                <input type="radio" name="radio" id="Abrir3" class="Abrir" required>
                <label for="Abrir3">No</label>
                <input type="radio" name="radio" id="Parar3" class="Parar" required>
                <label for="Parar3">Algunas veces</label>
                <input type="radio" name="radio" id="Fechar3" class="Fechar" required>
                <label for="Fechar3">Sí</label>
                <br></br>
                <h4 id="Revision3"></h4>
                <span class="fs-subtitle1" id="Mensaje3"></span>
            </div>
        </form>
        <form action="" class="formulario">
            <div class="radio">
                <p>¿Frecuentemente realiza un cambio de contraseñas en sus dispositivos y aplicaciones?</p>
                
                <input type="radio" name="radio" id="Abrir4" class="Abrir" required>
                <label for="Abrir4">No</label>
                <input type="radio" name="radio" id="Parar4" class="Parar" required>
                <label for="Parar4">Algunas veces</label>
                <input type="radio" name="radio" id="Fechar4" class="Fechar" required>
                <label for="Fechar4">Sí</label>
                <br></br>
                <h4 id="Revision4"></h4>
                <span class="fs-subtitle1" id="Mensaje4"></span>
            </div>
        </form>
        <form action="" class="formulario">
            <div class="radio">
                <p>¿Realiza un proceso de verificación de los correos electrónicos y contenido que le envían?</p>
                
                <input type="radio" name="radio" id="Abrir5" class="Abrir" required>
                <label for="Abrir5">No</label>
                <input type="radio" name="radio" id="Parar5" class="Parar" required>
                <label for="Parar5">Algunas veces</label>
                <input type="radio" name="radio" id="Fechar5" class="Fechar" required>
                <label for="Fechar5">Sí</label>
                <br></br>
                <h4 id="Revision5"></h4>
                <span class="fs-subtitle1" id="Mensaje5"></span>
            </div>
        </form>
        <form action="" class="formulario">
            <div class="radio">
                <p>¿Se encarga de eliminar o desinstalar los programas o aplicaciones que ya no son necesarios o usados?</p>
                
                <input type="radio" name="radio" id="Abrir6" class="Abrir" required>
                <label for="Abrir6">No</label>
                <input type="radio" name="radio" id="Parar6" class="Parar" required>
                <label for="Parar6">Algunas veces</label>
                <input type="radio" name="radio" id="Fechar6" class="Fechar" required>
                <label for="Fechar6">Sí</label>
                <br></br>
                <h4 id="Revision6"></h4>
                <span class="fs-subtitle1" id="Mensaje6"></span>
            </div>
        </form>
        <form action="" class="formulario">
            <div class="radio">
                <p>¿Bloquea el sistema de sus dispositivos a la hora de realizar una pausa activa o alejarse de su zona de trabajo?</p>
                
                <input type="radio" name="radio" id="Abrir7" class="Abrir" required>
                <label for="Abrir7">No</label>
                <input type="radio" name="radio" id="Parar7" class="Parar" required>
                <label for="Parar7">Algunas veces</label>
                <input type="radio" name="radio" id="Fechar7" class="Fechar" required>
                <label for="Fechar7">Sí</label>
                <br></br>
                <h4 id="Revision7"></h4>
                <span class="fs-subtitle1" id="Mensaje7"></span>
            </div>
        </form>
        <form action="" class="formulario">
            <div class="radio">
                <p>¿Tiene un control de copias de seguridad de sus dispositivos?</p>
                
                <input type="radio" name="radio" id="Abrir8" class="Abrir" required>
                <label for="Abrir8">No</label>
                <input type="radio" name="radio" id="Fechar8" class="Fechar" required>
                <label for="Fechar8">Sí</label>
                <br></br>
                <h4 id="Revision8"></h4>
                <span class="fs-subtitle1" id="Mensaje8"></span>
            </div>
        </form>
        <form action="" class="formulario">
            <div class="radio">
                <h2>Parcheo de vulnerabilidades</h2>
                <p>¿Tiene un sistema que se encargue de identificar los cambios que se realizan para evitar y disminuir los riesgos que pueden generarse en su sistema?</p>
                
                <input type="radio" name="radio" id="Abrir9" class="Abrir" required>
                <label for="Abrir9">No</label>
                <input type="radio" name="radio" id="Fechar9" class="Fechar" required>
                <label for="Fechar9">Sí</label>
                <br></br>
                <h4 id="Revision9"></h4>
                <span class="fs-subtitle1" id="Mensaje9"></span>
            </div>
        </form>
        <form action="" class="formulario">
            <div class="radio">
                <p>¿Tiene antivirus instalado en sus dispositivos?</p>
                
                <input type="radio" name="radio" id="Abrir10" class="Abrir" onclick="optionAntivirus(0)" required>
                <label for="Abrir10">No</label>
                <input type="radio" name="radio" id="Fechar10" class="Fechar" onclick="optionAntivirus(1)" required>
                <label for="Fechar10">Sí</label>
                <br></br>
                <h4 id="Revision10"></h4>
                <span class="fs-subtitle1" id="Mensaje10"></span>
            </div>
        </form>
        <form action="" class="formulario" id="antivirus">
            <div class="radio" id="antivirus">
                <p>¿Su antivirus tiene habilitada la opción de bloquear automáticamente archivos sospechosos?</p>

                <input type="radio" name="radio" id="Abrir11" class="Abrir" required>
                <label for="Abrir11">No</label>
                <input type="radio" name="radio" id="Fechar11" class="Fechar" required>
                <label for="Fechar11">Sí</label>
                <br></br>
                <h4 id="Revision11"></h4>
                <span class="fs-subtitle1" id="Mensaje11"></span>
            </div>
        </form>
        <form action="" class="formulario">
            <div class="radio">
                <h2>Fortalecimiento de la red</h2>
                <p>¿El control de acceso de su red (muro de fuego) bloquea los accesos no deseados o no autorizados?</p>
                
                <input type="radio" name="radio" id="Abrir12" class="Abrir" required>
                <label for="Abrir12">No</label>
                <input type="radio" name="radio" id="Fechar12" class="Fechar" required>
                <label for="Fechar12">Sí</label>
                <br></br>
                <h4 id="Revision12"></h4>
                <span class="fs-subtitle1" id="Mensaje12"></span>
            </div>
        </form>
        <form action="" class="formulario">
            <div class="radio">
                <p>¿Hace uso de aplicaciones que ofrecen el servicio de VPN en sus dispositivos? </p>
                
                <input type="radio" name="radio" id="Abrir13" class="Abrir" required>
                <label for="Abrir13">No</label>
                <input type="radio" name="radio" id="Parar13" class="Parar" required>
                <label for="Parar13">Algunas veces</label>
                <input type="radio" name="radio" id="Fechar13" class="Fechar" required>
                <label for="Fechar13">Sí</label>
                <br></br>
                <h4 id="Revision13"></h4>
                <span class="fs-subtitle1" id="Mensaje13"></span>
            </div>
        </form>
        <form action="" class="formulario">
            <div class="radio">
                <p>¿Modifica y gestiona las reglas del control de acceso de su red?</p>
                
                <input type="radio" name="radio" id="Abrir14" class="Abrir" required>
                <label for="Abrir14">No</label>
                <input type="radio" name="radio" id="Parar14" class="Parar" required>
                <label for="Parar14">Algunas veces</label>
                <input type="radio" name="radio" id="Fechar14" class="Fechar" required>
                <label for="Fechar14">Sí</label>
                <br></br>
                <h4 id="Revision14"></h4>
                <span class="fs-subtitle1" id="Mensaje14"></span>
            </div>
        </form>
        <form action="" class="formulario">
            <div class="radio">
                <p>¿Se encarga de bloquear los puertos de red que no son necesarios o no están siendo utilizados?</p>
                
                <input type="radio" name="radio" id="Abrir15" class="Abrir" required>
                <label for="Abrir15">No</label>
                <input type="radio" name="radio" id="Parar15" class="Parar" required>
                <label for="Parar15">Algunas veces</label>
                <input type="radio" name="radio" id="Fechar15" class="Fechar" required>
                <label for="Fechar15">Sí</label>
                <br></br>
                <h4 id="Revision15"></h4>
                <span class="fs-subtitle1" id="Mensaje15"></span>
            </div>
        </form>
        <form action="" class="formulario">
            <div class="radio">
                <p>¿Gestiona la desactivación y eliminación de los protocolos y servicios que son desconocidos e innecesarios?</p>
                
                <input type="radio" name="radio" id="Abrir16" class="Abrir" required>
                <label for="Abrir16">No</label>
                <input type="radio" name="radio" id="Parar16" class="Parar" required>
                <label for="Parar16">Algunas veces</label>
                <input type="radio" name="radio" id="Fechar16" class="Fechar" required>
                <label for="Fechar16">Sí</label>
                <br></br>
                <h4 id="Revision16"></h4>
                <span class="fs-subtitle1" id="Mensaje16"></span>
            </div>
        </form>
        <form action="" class="formulario">
            <div class="radio">
                <p>¿Restringe el acceso a sus servicios y dispositivos a los usuarios son credenciales de acceso?</p>
                
                <input type="radio" name="radio" id="Abrir17" class="Abrir" required>
                <label for="Abrir17">No</label>
                <input type="radio" name="radio" id="Fechar17" class="Fechar" required>
                <label for="Fechar17">Sí</label>
                <br></br>
                <h4 id="Revision17"></h4>
                <span class="fs-subtitle1" id="Mensaje17"></span>
            </div>
        </form>
        <form action="" class="formulario">
            <div class="radio">
                <h2>Refuerzo del servidor</h2>
                <p>¿Maneja servidores dentro de su organización?</p>
                
                <input type="radio" name="radio" id="Abrir18" class="Abrir" onclick="optionServidores(0)" required>
                <label for="Abrir18">No</label>
                <input type="radio" name="radio" id="Fechar18" class="Fechar" onclick="optionServidores(1)" required>
                <label for="Fechar18">Sí</label>
                <br></br>
                <h4 id="Revision18"></h4>
                <span class="fs-subtitle1" id="Mensaje18"></span>
            </div>
        </form>
        <form action="" class="formulario" id="servidores1">
            <div class="radio" id="servidores1">
                <p>¿El servidor está instalado en una zona segura y de acceso restringido?</p>
                
                <input type="radio" name="radio" id="Abrir19" class="Abrir" required>
                <label for="Abrir19">No</label>
                <input type="radio" name="radio" id="Parar19" class="Parar" required>
                <label for="Parar19">Algunas veces</label>
                <input type="radio" name="radio" id="Fechar19" class="Fechar" required>
                <label for="Fechar19">Sí</label>
                <br></br>
                <h4 id="Revision19"></h4>
                <span class="fs-subtitle1" id="Mensaje19"></span>
            </div>
        </form>
        <form action="" class="formulario" id="servidores2">
            <div class="radio" id="servidores2">
                <p>Al momento de instalar aplicaciones en los dispositivos: ¿Analiza si estas son totalmente necesarias?</p>
                
                <input type="radio" name="radio" id="Abrir20" class="Abrir" required>
                <label for="Abrir20">No</label>
                <input type="radio" name="radio" id="Parar20" class="Parar" required>
                <label for="Parar20">Algunas veces</label>
                <input type="radio" name="radio" id="Fechar20" class="Fechar" required>
                <label for="Fechar20">Sí</label>
                <br></br>
                <h4 id="Revision20"></h4>
                <span class="fs-subtitle1" id="Mensaje20"></span>
            </div>
        </form>
        <form action="" class="formulario" id="servidores3">
            <div class="radio" id="servidores3">
                <p>¿Verifica la seguridad de los recursos compartidos, por ejemplo, carpetas conectadas directamente a la impresora?</p>
                
                <input type="radio" name="radio" id="Abrir21" class="Abrir" required>
                <label for="Abrir21">No</label>
                <input type="radio" name="radio" id="Parar21" class="Parar" required>
                <label for="Parar21">Algunas veces</label>
                <input type="radio" name="radio" id="Fechar21" class="Fechar" required>
                <label for="Fechar21">Sí</label>
                <br></br>
                <h4 id="Revision21"></h4>
                <span class="fs-subtitle1" id="Mensaje21"></span>
            </div>
        </form>
        <form action="" class="formulario" id="servidores4">
            <div class="radio" id="servidores4">
                <p>¿Se revisan y asignan los accesos de los usuarios, mayormente dando privilegios mínimos?</p>
                
                <input type="radio" name="radio" id="Abrir22" class="Abrir" required>
                <label for="Abrir22">No</label>
                <input type="radio" name="radio" id="Fechar22" class="Fechar" required>
                <label for="Fechar22">Sí</label>
                <br></br>
                <h4 id="Revision22"></h4>
                <span class="fs-subtitle1" id="Mensaje22"></span>
            </div>
        </form>
        <form action="" class="formulario">
            <div class="radio">
                <h2>Endurecimiento de la aplicación</h2>
                <p>¿Se encarga de eliminar los archivos innecesarios o que no han sido usados en mucho tiempo?</p>
                
                <input type="radio" name="radio" id="Abrir23" class="Abrir" required>
                <label for="Abrir23">No</label>
                <input type="radio" name="radio" id="Parar23" class="Parar" required>
                <label for="Parar23">Algunas veces</label>
                <input type="radio" name="radio" id="Fechar23" class="Fechar" required>
                <label for="Fechar23">Sí</label>
                <br></br>
                <h4 id="Revision23"></h4>
                <span class="fs-subtitle1" id="Mensaje23"></span>
            </div>
        </form>
        <form action="" class="formulario">
            <div class="radio">
                <p>¿Tiene un sistema o aplicación que permita controlar el acceso o uso de las aplicaciones para los usuarios? </p>
                
                <input type="radio" name="radio" id="Abrir24" class="Abrir" required>
                <label for="Abrir24">No</label>
                <input type="radio" name="radio" id="Fechar24" class="Fechar" required>
                <label for="Fechar24">Sí</label>
                <br></br>
                <h4 id="Revision24"></h4>
                <span class="fs-subtitle1" id="Mensaje24"></span>
            </div>
        </form>
        <form action="" class="formulario">
            <div class="radio">
                <p>¿Se eliminan las contraseñas guardadas por defecto, o hace uso de esta práctica?</p>
                
                <input type="radio" name="radio" id="Abrir25" class="Abrir" required>
                <label for="Abrir25">No</label>
                <input type="radio" name="radio" id="Fechar25" class="Fechar" required>
                <label for="Fechar25">Sí</label>
                <br></br>
                <h4 id="Revision25"></h4>
                <span class="fs-subtitle1" id="Mensaje25"></span>
            </div>
        </form>
        <form action="" class="formulario">
            <div class="radio">
                <p>¿Aplica buenas prácticas frente a la eliminación de contraseñas que ya no utiliza?</p>
                
                <input type="radio" name="radio" id="Abrir26" class="Abrir" required>
                <label for="Abrir26">No</label>
                <input type="radio" name="radio" id="Parar26" class="Parar" required>
                <label for="Parar26">Algunas veces</label>
                <input type="radio" name="radio" id="Fechar26" class="Fechar" required>
                <label for="Fechar26">Sí</label>
                <br></br>
                <h4 id="Revision26"></h4>
                <span class="fs-subtitle1" id="Mensaje26"></span>
            </div>
        </form>
        <form action="" class="formulario">
            <div class="radio">
                <h2>Fortalecimiento de la base de datos</h2>
                <p>¿Cuenta con una base de datos? </p>
                
                <input type="radio" name="radio" id="Abrir27" class="Abrir" onclick="optionBD(0)" required>
                <label for="Abrir27">No</label>
                <input type="radio" name="radio" id="Fechar27" class="Fechar" onclick="optionBD(1)" required>
                <label for="Fechar27">Sí</label>
                <br></br>
                <h4 id="Revision27"></h4>
                <span class="fs-subtitle1" id="Mensaje27"></span>
            </div>
        </form>
        <form action="" class="formulario" id="basedatos1">
            <div class="radio" id="basedatos1">
                <p>¿Maneja restricciones para el acceso a la base de datos dependiendo del usuario que desee ingresar?</p>
                
                <input type="radio" name="radio" id="Abrir28" class="Abrir" required>
                <label for="Abrir28">No</label>
                <input type="radio" name="radio" id="Fechar28" class="Fechar" required>
                <label for="Fechar28">Sí</label>
                <br></br>
                <h4 id="Revision28"></h4>
                <span class="fs-subtitle1" id="Mensaje28"></span>
            </div>
        </form>
        <form action="" class="formulario" id="basedatos2">
            <div class="radio" id="basedatos2">
                <p>¿Usa algún método para que su información no sea legible si el usuario no tiene autorización?</p>
                
                <input type="radio" name="radio" id="Abrir29" class="Abrir" required>
                <label for="Abrir29">No</label>
                <input type="radio" name="radio" id="Fechar29" class="Fechar" required>
                <label for="Fechar29">Sí</label>
                <br></br>
                <h4 id="Revision29"></h4>
                <span class="fs-subtitle1" id="Mensaje29"></span>
            </div>
        </form>
        <form action="" class="formulario" id="basedatos3">
            <div class="radio" id="basedatos3">
                <p>¿Se hace una eliminación de cuentas preventiva?</p>
                
                <input type="radio" name="radio" id="Abrir30" class="Abrir" required>
                <label for="Abrir30">No</label>
                <input type="radio" name="radio" id="Fechar30" class="Fechar" required>
                <label for="Fechar30">Sí</label>
                <br></br>
                <h4 id="Revision30"></h4>
                <span class="fs-subtitle1" id="Mensaje30"></span>
            </div>
        </form>
        <form action="" class="formulario" id="basedatos4">
            <div class="radio" id="basedatos4">
                <p>¿Comprueba que el usuario que ingresa a la BD si ha sido autenticado previamente?</p>
                
                <input type="radio" name="radio" id="Abrir31" class="Abrir" required>
                <label for="Abrir31">No</label>
                <input type="radio" name="radio" id="Fechar31" class="Fechar" required>
                <label for="Fechar31">Sí</label>
                <br></br>
                <h4 id="Revision31"></h4>
                <span class="fs-subtitle1" id="Mensaje31"></span>
            </div>
        </form>
        <form action="" class="formulario" id="basedatos5">
            <div class="radio" id="basedatos5">
                <p>¿Genera un cambio frecuente de contraseñas en la base de datos, a pesar de que sean seguras?</p>
                
                <input type="radio" name="radio" id="Abrir32" class="Abrir" required>
                <label for="Abrir32">No</label>
                <input type="radio" name="radio" id="Fechar32" class="Fechar" required>
                <label for="Fechar32">Sí</label>
                <br></br>
                <h4 id="Revision32"></h4>
                <span class="fs-subtitle1" id="Mensaje32"></span>
            </div>
        </form>
        <form action="" class="formulario" id="basedatos6">
            <div class="radio" id="basedatos6">
                <p>¿Tiene conocimiento de cuáles son los privilegios o permisos con los que cuenta cada usuario de la base de datos dependiendo de su rol?</p>
                
                <input type="radio" name="radio" id="Abrir33" class="Abrir" required>
                <label for="Abrir33">No</label>
                <input type="radio" name="radio" id="Fechar33" class="Fechar" required>
                <label for="Fechar33">Sí</label>
                <br></br>
                <h4 id="Revision33"></h4>
                <span class="fs-subtitle1" id="Mensaje33"></span>
            </div>
        </form>
        <form action="" class="formulario">
            <div class="radio">
                <h2>Fortalecimiento del sistema operativo</h2>
                <p>¿Realiza actualizaciones de aplicaciones o software de forma automática?</p>
                
                <input type="radio" name="radio" id="Abrir34" class="Abrir" required>
                <label for="Abrir34">No</label>
                <input type="radio" name="radio" id="Fechar34" class="Fechar" required>
                <label for="Fechar34">Sí</label>
                <br></br>
                <h4 id="Revision34"></h4>
                <span class="fs-subtitle1" id="Mensaje34"></span>
            </div>
        </form>
        <form action="" class="formulario">
            <div class="radio">
                <p>¿Oculta la información de los archivos de su computadora para los usuarios no autorizados?</p>
                
                <input type="radio" name="radio" id="Abrir35" class="Abrir" required>
                <label for="Abrir35">No</label>
                <input type="radio" name="radio" id="Parar35" class="Parar" required>
                <label for="Parar35">Algunas veces</label>
                <input type="radio" name="radio" id="Fechar35" class="Fechar" required>
                <label for="Fechar35">Sí</label>
                <br></br>
                <h4 id="Revision35"></h4>
                <span class="fs-subtitle1" id="Mensaje35"></span>
            </div>
        </form>
        <form action="" class="formulario">
            <div class="radio">
                <p>¿Usa alguna aplicación que se encargue de las actualizaciones y corrección de errores del sistema operativo?</p>
                
                <input type="radio" name="radio" id="Abrir36" class="Abrir" required>
                <label for="Abrir36">No</label>
                <input type="radio" name="radio" id="Fechar36" class="Fechar" required>
                <label for="Fechar36">Sí</label>
                <br></br>
                <h4 id="Revision36"></h4>
                <span class="fs-subtitle1" id="Mensaje36"></span>
            </div>
        </form>
        <form action="" class="formulario">
            <div class="radio">
                <p>¿Gestiona constantemente la eliminación de controladores, software o servicios que no sean considerados necesarios?</p>
                
                <input type="radio" name="radio" id="Abrir37" class="Abrir" required>
                <label for="Abrir37">No</label>
                <input type="radio" name="radio" id="Parar37" class="Parar" required>
                <label for="Parar37">Algunas veces</label>
                <input type="radio" name="radio" id="Fechar37" class="Fechar" required>
                <label for="Fechar37">Sí</label>
                <br></br>
                <h4 id="Revision37"></h4>
                <span class="fs-subtitle1" id="Mensaje37"></span>
            </div>
        </form>
        <form action="" class="formulario">
            <div class="radio">
                <p>¿Tiene implementadas cuentas de usuario con permisos distintos para el acceso al sistema de sus computadoras?</p>
                
                <input type="radio" name="radio" id="Abrir38" class="Abrir" required>
                <label for="Abrir38">No</label>
                <input type="radio" name="radio" id="Parar38" class="Parar" required>
                <label for="Parar38">Algunas veces</label>
                <input type="radio" name="radio" id="Fechar38" class="Fechar" required>
                <label for="Fechar38">Sí</label>
                <br></br>
                <h4 id="Revision38"></h4>
                <span class="fs-subtitle1" id="Mensaje38"></span>
            </div>
        </form>
        <form action="" class="formulario">
            <div class="radio">
                <p>¿Tiene implementado un control o registro de los accesos al sistema de sus dispositivos?</p>
                
                <input type="radio" name="radio" id="Abrir39" class="Abrir" required>
                <label for="Abrir39">No</label>
                <input type="radio" name="radio" id="Fechar39" class="Fechar" required>
                <label for="Fechar39">Sí</label>
                <br></br>
                <h4 id="Revision39"></h4>
                <span class="fs-subtitle1" id="Mensaje39"></span>
            </div>
        </form>





        <div class="frame">
            <button class="custom-btn btn-15" onclick="Mostrar_resultado()">Enviar</button>
        </div>
    </div>
    <script>
    function Mostrar_resultado() {

        /**Solo agrego titulos para la respectiva revisión */
        var titulo = document.getElementById('Revision');
        titulo.textContent = "Aspectos a tener en cuenta";
        var titulo1 = document.getElementById('Revision1');
        titulo1.textContent = "Aspectos a tener en cuenta";
        var titulo2 = document.getElementById('Revision2');
        titulo2.textContent = "Aspectos a tener en cuenta";
        var titulo3 = document.getElementById('Revision3');
        titulo3.textContent = "Aspectos a tener en cuenta";
        var titulo4 = document.getElementById('Revision4');
        titulo4.textContent = "Aspectos a tener en cuenta";
        var titulo5 = document.getElementById('Revision5');
        titulo5.textContent = "Aspectos a tener en cuenta";
        var titulo6 = document.getElementById('Revision6');
        titulo6.textContent = "Aspectos a tener en cuenta";
        var titulo7 = document.getElementById('Revision7');
        titulo7.textContent = "Aspectos a tener en cuenta";
        var titulo8 = document.getElementById('Revision8');
        titulo8.textContent = "Aspectos a tener en cuenta";
        var titulo9 = document.getElementById('Revision9');
        titulo9.textContent = "Aspectos a tener en cuenta";
        var titulo10 = document.getElementById('Revision10');
        titulo10.textContent = "Aspectos a tener en cuenta";
        var titulo11 = document.getElementById('Revision11');
        titulo11.textContent = "Aspectos a tener en cuenta";
        var titulo12 = document.getElementById('Revision12');
        titulo12.textContent = "Aspectos a tener en cuenta";
        var titulo13 = document.getElementById('Revision13');
        titulo13.textContent = "Aspectos a tener en cuenta";
        var titulo14 = document.getElementById('Revision14');
        titulo14.textContent = "Aspectos a tener en cuenta";
        var titulo15 = document.getElementById('Revision15');
        titulo15.textContent = "Aspectos a tener en cuenta";
        var titulo16 = document.getElementById('Revision16');
        titulo16.textContent = "Aspectos a tener en cuenta";
        var titulo17 = document.getElementById('Revision17');
        titulo17.textContent = "Aspectos a tener en cuenta";
        var titulo19 = document.getElementById('Revision19');
        titulo19.textContent = "Aspectos a tener en cuenta";
        var titulo20 = document.getElementById('Revision20');
        titulo20.textContent = "Aspectos a tener en cuenta";
        var titulo21 = document.getElementById('Revision21');
        titulo21.textContent = "Aspectos a tener en cuenta";
        var titulo22 = document.getElementById('Revision22');
        titulo22.textContent = "Aspectos a tener en cuenta";
        var titulo23 = document.getElementById('Revision23');
        titulo23.textContent = "Aspectos a tener en cuenta";
        var titulo24 = document.getElementById('Revision24');
        titulo24.textContent = "Aspectos a tener en cuenta";
        var titulo25 = document.getElementById('Revision25');
        titulo25.textContent = "Aspectos a tener en cuenta";
        var titulo26 = document.getElementById('Revision26');
        titulo26.textContent = "Aspectos a tener en cuenta";
        var titulo28 = document.getElementById('Revision28');
        titulo28.textContent = "Aspectos a tener en cuenta";
        var titulo29 = document.getElementById('Revision29');
        titulo29.textContent = "Aspectos a tener en cuenta";
        var titulo30 = document.getElementById('Revision30');
        titulo30.textContent = "Aspectos a tener en cuenta";
        var titulo31 = document.getElementById('Revision31');
        titulo31.textContent = "Aspectos a tener en cuenta";
        var titulo32 = document.getElementById('Revision32');
        titulo32.textContent = "Aspectos a tener en cuenta";
        var titulo33 = document.getElementById('Revision33');
        titulo33.textContent = "Aspectos a tener en cuenta";
        var titulo34 = document.getElementById('Revision34');
        titulo34.textContent = "Aspectos a tener en cuenta";
        var titulo35 = document.getElementById('Revision35');
        titulo35.textContent = "Aspectos a tener en cuenta";
        var titulo36 = document.getElementById('Revision16');
        titulo36.textContent = "Aspectos a tener en cuenta";
        var titulo37 = document.getElementById('Revision37');
        titulo37.textContent = "Aspectos a tener en cuenta";
        var titulo38 = document.getElementById('Revision38');
        titulo38.textContent = "Aspectos a tener en cuenta";
        var titulo39 = document.getElementById('Revision39');
        titulo39.textContent = "Aspectos a tener en cuenta";


        if (document.getElementById('Abrir').checked) {
            var span = document.getElementById('Mensaje');
            span.textContent = "Al manejar un sistema, es importante aplicar y generar revisiones para saber que planes se pueden realizar frente a la seguridad y a la prevención; te recomendamos que estas sean dadas por un profesional apto en el tema, puesto que de esta forma te pueden generar mejoras. Recuerda que tu sistema puede estar expuesto a diversas amenazas e incluso puede evolucionar para presentar mayores beneficios.";
        }
        if (document.getElementById('Fechar').checked) {
            var span = document.getElementById('Mensaje');
            span.textContent = "¡Excelente!, es importante que este tipo de revisiones sean dadas por un profesional, para mantenerte al tanto de prevenciones para tu sistema y por ende tener planes de acción frente al tema.";
        }


        if (document.getElementById('Abrir1').checked) {
            var span = document.getElementById('Mensaje1');
            span.textContent = "Es importante que se cree e incluya este plan debido a que permite la identificación de sistemas, controles operativos, técnicos y de gestión de seguridad; es posible identificar los recursos humanos de la empresa como el personal requerido, habilidades requeridas y personal disponible.";
        }
        if (document.getElementById('Fechar1').checked) {
            var span = document.getElementById('Mensaje1');
            span.textContent = "¡Excelente!, recomendamos mantener este plan lo más actualizado posible.";
        }
        
        
        if (document.getElementById('Abrir2').checked) {
            var span = document.getElementById('Mensaje2');
            span.textContent = "Es importante que se cuente con personal encargado de esta área de la entidad debido a que su labor permitirá aumentar la confianza de los clientes, gestionar mejor la información, perfeccionamiento en el uso y mantenimiento de los equipos y puede ayudar a prevenir o contrarrestar ataques informáticos.";
        }
        if (document.getElementById('Fechar2').checked) {
            var span = document.getElementById('Mensaje2');
            span.textContent = "¡Excelente! Te recomendamos mantener a este personal constantemente en tu organización para mantener la seguridad.";
        }
        
        
        if (document.getElementById('Abrir3').checked) {
            var span = document.getElementById('Mensaje3');
            span.textContent = "Es importante siempre descargar el software desde los sitios oficiales debido a que esto evita que se instalen otras aplicaciones que estén adjuntas a la descarga, lo cual sería software innecesario o también se puede presentar la descarga de malware, que son programas que instalan virus en los dispositivos.";
        }
        if (document.getElementById('Parar3').checked) {
            var span = document.getElementById('Mensaje3');
            span.textContent = "Se debe eliminar esta practica para que siempre se descarguen los sistemas desde la web oficial con el fin de evitar que se descarguen softwares adjuntos innecesarios o malware en los dispositivos.";
        }
        if (document.getElementById('Fechar3').checked) {
            var span = document.getElementById('Mensaje3');
            span.textContent = "¡Excelente!, recomendamos mantener está buena práctica.";
        }
        
        
        if (document.getElementById('Abrir4').checked) {
            var span = document.getElementById('Mensaje4');
            span.textContent = "Es importante crear un habito de cambio de contraseña en periodos de tiempo, ejemplo, cada 3 meses, esto debido a que impide que los atacantes o personas con malas intenciones en el sistema no tengan acceso a los dispositivos y a la información para que puedan robarla, comprometerla o hasta sobornar con eso.";
        }
        if (document.getElementById('Parar4').checked) {
            var span = document.getElementById('Mensaje4');
            span.textContent = "Se recomienda crear un habito de cambio de contraseña en los dispositivos con el fin de mantener la información de la organización segura.";
        }
        if (document.getElementById('Fechar4').checked) {
            var span = document.getElementById('Mensaje4');
            span.textContent = "¡Excelente!, recomendamos mantener esta buena práctica con el fin de mantener la seguridad de tus dispositivos.";
        }
        
        
        if (document.getElementById('Abrir5').checked) {
            var span = document.getElementById('Mensaje5');
            span.textContent = "Se recomienda crear un habito que identifique los correos que son enviados para validar si el remitente es desconocido o no se relacionan con las funciones o servicios de la entidad, validar el motivo del correo con el fin de evitar solicitudes de información. Al mismo tiempo se deben validar los archivos adjuntos al correo con el fin de evitar la descargar de programas con malware o virus.";
        }
        if (document.getElementById('Parar5').checked) {
            var span = document.getElementById('Mensaje5');
            span.textContent = "Es importante convertir esta labor en un habito constante con el fin de evitar amenazas que pueden surgir por este medio como lo pueden ser vulnerabilidades en la información, accesos no deseados, ataques, etc.";
        }
        if (document.getElementById('Fechar5').checked) {
            var span = document.getElementById('Mensaje5');
            span.textContent = "¡Excelente! Recomendamos mantener esta buena práctica.";
        }
        
        
        if (document.getElementById('Abrir6').checked) {
            var span = document.getElementById('Mensaje6');
            span.textContent = "Identificar, eliminar y mantener las aplicaciones que solamente se van a usar son clave, debido a que permiten elevar el nivel de seguridad de la red. Esto lleva a que los equipos que tengan solo lo necesario sean menos propensos a ser victimas de un ataque.";
        }
        if (document.getElementById('Parar6').checked) {
            var span = document.getElementById('Mensaje6');
            span.textContent = "La instalación de aplicaciones debe controlarse debido a que se debe realizar esta labor solamente si son necesarias en alguna tarea especifica, no controlar esto aumenta la posibilidad de ataques y expone la seguridad de los equipos innecesariamente.";
        }
        if (document.getElementById('Fechar6').checked) {
            var span = document.getElementById('Mensaje6');
            span.textContent = "¡Excelente!, recomendamos mantener está buena práctica todo el tiempo.";
        }
        
        
        if (document.getElementById('Abrir7').checked) {
            var span = document.getElementById('Mensaje7');
            span.textContent = "Al dejar los dispositivos desbloqueados después de alejarse de la zona de trabajo se esta vulnerando de forma muy grabe la seguridad del dispositivo, la red y la información de la entidad debido a que se le está dando la posibilidad a que una persona con malas intenciones tenga un dispositivo a la mano que este conectado a los datos de la organización y con esto, puede realizar un ataque de seguridad de forma sencilla. Es por esto por lo que recomendamos siempre bloquear los dispositivos del área de trabajo una vez nos alejemos de esta.";
        }
        if (document.getElementById('Parar7').checked) {
            var span = document.getElementById('Mensaje7');
            span.textContent = "Es importante crear un habito en los trabajadores que permita apagar sus dispositivos una vez se levanten de su área de trabajo debido a que esta pequeña acción puede prevenir que personas sin acceso y con malas intenciones accedan a los dispositivos de la organización.";
        }
        if (document.getElementById('Fechar7').checked) {
            var span = document.getElementById('Mensaje7');
            span.textContent = "¡Excelente!, recomendamos mantener esta buena práctica";
        }
        
        
        if (document.getElementById('Abrir8').checked) {
            var span = document.getElementById('Mensaje8');
            span.textContent = "Es importante que se mantenga un control y respaldo de la información vital de la empresa debido a que esto permite que se mantenga la continuidad de la entidad al reducir los tiempos de interrupción de los procesos y funciones principales en caso de suceder un ataque.";
        }
        if (document.getElementById('Fechar8').checked) {
            var span = document.getElementById('Mensaje8');
            span.textContent = "¡Excelente!, recomendamos mantener esta buena práctica.";
        }
        
        
        if (document.getElementById('Abrir9').checked) {
            var span = document.getElementById('Mensaje9');
            span.textContent = "Es importante que se cuente con un sistema que se encargue de esta labor debido a que permitirá tener un registro y control de todos los cambios que se realicen en el sistema con el fin de poder respaldar o razones de errores o problemas en caso tal de que suceda algo por un cambio realizado.";
        }
        if (document.getElementById('Fechar9').checked) {
            var span = document.getElementById('Mensaje9');
            span.textContent = "¡Excelente! Recomendamos mantener este sistema en sus dispositivos.";
        }
        
        
        if (document.getElementById('Abrir10').checked) {
            var span = document.getElementById('Mensaje10');
            span.textContent = "Recomendamos instalar un antivirus en sus dispositivos con el fin de tener un sistema de control que permita asegurar todos los archivos del sistema y eviten amenazas de seguridad.";
        }
        if (document.getElementById('Fechar10').checked) {
            var span = document.getElementById('Mensaje10');
            span.textContent = "¡Excelente! Recomendamos mantener este sistema en sus dispositivos.";
        }
        
        
        if (document.getElementById('Abrir11').checked) {
            var span = document.getElementById('Mensaje11');
            span.textContent = "Recomendamos que se active esta labor en el antivirus con el fin tener un control en la seguridad del dispositivo que sea capaz de bloquear cualquier archivo que sea detectado como amenazante para el sistema por el antivirus.";
        }
        if (document.getElementById('Fechar11').checked) {
            var span = document.getElementById('Mensaje11');
            span.textContent = "¡Excelente! Recomendamos mantener esta opción siempre habilitada";
        }
        
        
        if (document.getElementById('Abrir12').checked) {
            var span = document.getElementById('Mensaje12');
            span.textContent = "Es recomendable que genere controles de acceso, puesto que estos evitarán amenazas o daños generados por personal externo con fines maliciosos, estos son generados por medio de paquetes que ingresan y así mismo pueden salir dentro de la red, así que sería bueno restringir accesos en específico.";
        }
        if (document.getElementById('Fechar12').checked) {
            var span = document.getElementById('Mensaje12');
            span.textContent = "¡Excelente!, estas prácticas previenen amenazas en tu red y fomentan un mayor fortalecimiento.";
        }
    

        if (document.getElementById('Abrir13').checked) {
            var span = document.getElementById('Mensaje13');
            span.textContent = "Al no contar con un servicio de VPN en sus dispositivos se está permitiendo que sus dispositivos estén navegando en la red sin anonimato y los datos de navegación son inseguros debido a que no se les brinda un proceso de cifrado y esto permite que una persona con suficientes conocimientos en el área pueda acceder a ellos. Es recomendado hacer uso de un servicio de VPN.";
        }
        if (document.getElementById('Parar13').checked) {
            var span = document.getElementById('Mensaje13');
            span.textContent = "Se recomienda hacer uso de un servicio VPN constantemente con el fin de tener una navegación segura, privada y que garantizara una tranquilidad para el usuario.";
        }
        if (document.getElementById('Fechar13').checked) {
            var span = document.getElementById('Mensaje13');
            span.textContent = "¡Excelente! Recomendamos mantener esta buena práctica.";
        }


        if (document.getElementById('Abrir14').checked) {
            var span = document.getElementById('Mensaje14');
            span.textContent = "Si no se modifican y gestionan dichas reglas de control de acceso su red es vulnerable a accesos malintencionados que puede perjudicarle gravemente en su organización. ";
        }
        if (document.getElementById('Parar14').checked) {
            var span = document.getElementById('Mensaje14');
            span.textContent = "A diario se generan nuevos programas malintencionados o en su defecto personas que quieren ingresar a su red, es importante que mantenga una constante actualización de las reglas de control de acceso para prevenir esto.";
        }
        if (document.getElementById('Fechar14').checked) {
            var span = document.getElementById('Mensaje14');
            span.textContent = "¡Excelente! Recomendamos mantener esta buena práctica.";
        }


        if (document.getElementById('Abrir15').checked) {
            var span = document.getElementById('Mensaje15');
            span.textContent = "Al no bloquear los puertos se está permitiendo la posibilidad de que su red sea atacada, ya que no se estaría protegiendo los servicios de sus dispositivos que son más delicados.";
        }
        if (document.getElementById('Parar15').checked) {
            var span = document.getElementById('Mensaje15');
            span.textContent = "Es importante bloquear los puertos no usados de forma habitual con el fin de garantizar la seguridad de la red de la empresa.";
        }
        if (document.getElementById('Fechar15').checked) {
            var span = document.getElementById('Mensaje15');
            span.textContent = "¡Excelente! Recomendamos mantener esta buena práctica.";
        }


        if (document.getElementById('Abrir16').checked) {
            var span = document.getElementById('Mensaje16');
            span.textContent = "La eliminación o desactivación de servicios y protocolos utilizados en los dispositivos trae consigo ventajas de rendimiento y seguridad, es por ello que se debe tener un monitoreo de cuales se están usando y realizar el respectivo procedimiento.";
        }
        if (document.getElementById('Parar16').checked) {
            var span = document.getElementById('Mensaje16');
            span.textContent = "Es importante mantener una supervisión de los protocolos y servicios que son manejados y detectar cuales no están siendo necesarios o son desconocidos para eliminar, esto con el objetivo de proteger en mayor medida al sistema.";
        }
        if (document.getElementById('Fechar16').checked) {
            var span = document.getElementById('Mensaje16');
            span.textContent = "¡Excelente! Recomendamos mantener esta buena práctica.";
        }


        if (document.getElementById('Abrir17').checked) {
            var span = document.getElementById('Mensaje17');
            span.textContent = "Al no restringir el acceso a sus servicios con credenciales de usuario está permitiendo que cualquier persona que haga parte o no de la organización pueda acceder a los dispositivos de la empresa sin necesidad de iniciar sesión en algún apartado, esto provoca una vulnerabilidad en el sistema debido a que cualquier persona tiene acceso a la información de la organización.";
        }
        if (document.getElementById('Fechar17').checked) {
            var span = document.getElementById('Mensaje17');
            span.textContent = "¡Excelente! Recomendamos mantener esta buena práctica.";
        }


        if (document.getElementById('Abrir19').checked) {
            var span = document.getElementById('Mensaje19');
            span.textContent = "Se recomienda cambiar el lugar de ubicación del servidor debido a que al ser una zona poco segura o que no garantice el acceso restringido se esta dando la posibilidad de que pueda ser robado, dañado o vulnerado mediante algún software maligno; lo anterior es debido a que se brinda la posibilidad de que cualquier persona se acerque a un recurso tan importante como lo es el servidor.";
        }
        if (document.getElementById('Fechar19').checked) {
            var span = document.getElementById('Mensaje19');
            span.textContent = "¡Excelente! Recomendamos que el servidor siga en esta zona o sea cambiado a un lugar con más seguridad.";
        }


        if (document.getElementById('Abrir20').checked) {
            var span = document.getElementById('Mensaje20');
            span.textContent = "Al no analizar el nivel de necesidad de las aplicaciones que van a ser instalas en el servidor se abre una puerta a que las posibilidades de ataque al dispositivo se amplíen y al mismo tiempo, esto puede incurrir en una sobrecarga de almacenamiento innecesaria en el servidor, lo que provocaría que la calidad de funcionamiento y servicios se deteriore.";
        }
        if (document.getElementById('Parar20').checked) {
            var span = document.getElementById('Mensaje20');
            span.textContent = "Se recomienda volver esta acción un habito debido a que su realización permitirá mantener los niveles de seguridad del dispositivo y un optimo funcionamiento de este mismo.";
        }
        if (document.getElementById('Fechar20').checked) {
            var span = document.getElementById('Mensaje20');
            span.textContent = "¡Excelente! Recomendamos mantener esta buena práctica.";
        }


        if (document.getElementById('Abrir21').checked) {
            var span = document.getElementById('Mensaje21');
            span.textContent = "Se recomienda revisar estos recursos compartidos debido a que pueden llegar a ser una vulnerabilidad en los dispositivos de la empresa, ya que se esta habilitando un recurso que conecta dos dispositivos y permite el intercambio de información entre estos, característica que puede llegar a ser aprovechada por una persona con malas intenciones.";
        }
        if (document.getElementById('Parar21').checked) {
            var span = document.getElementById('Mensaje21');    
            span.textContent = "Es importante que esta tarea sea una rutina constante ya que su realización permite que los clientes o usuarios de la empresa tengan a la mano herramientas seguras.";
        }
        if (document.getElementById('Fechar21').checked) {
            var span = document.getElementById('Mensaje21');
            span.textContent = "¡Excelente! Recomendamos mantener este buen habito.";
        }


        if (document.getElementById('Abrir22').checked) {
            var span = document.getElementById('Mensaje22');
            span.textContent = "Es importante que se validen y asignen los privilegios de acceso a cada usuario en los dispositivos de la empresa debido a que esto puede provocar una vulnerabilidad en los controles y niveles de acceso de la red.";
        }
        if (document.getElementById('Fechar22').checked) {
            var span = document.getElementById('Mensaje22');
            span.textContent = "¡Excelente! Se recomienda mantener esta buena práctica.";
        }


        if (document.getElementById('Abrir23').checked) {
            var span = document.getElementById('Mensaje23');
            span.textContent = "Al no tener una práctica de eliminación de archivos innecesarios se abre la posibilidad de que con el tiempo se acumulen bastantes archivos de este tipo, hasta el punto de ocupar gran parte o todo el almacenamiento del dispositivo, lo que ira provocando un mayor deterioro en el funcionamiento de este y una vez se vea la necesidad de realizar esta tarea, el proceso consumirá mucho tiempo ya que se deberá analizar cada archivo con el fin de decidir si es necesario dejarlo o eliminarlo. Por lo anterior, se recomienda crear la práctica de eliminación de archivos innecesarios o que no se hayan usado en mucho tiempo.";
        }
        if (document.getElementById('Parar23').checked) {
            var span = document.getElementById('Mensaje23');
            span.textContent = "Se recomienda realizar esta labor periódicamente con el fin de evitar una saturación de almacenamiento en los dispositivos.";
        }
        if (document.getElementById('Fechar23').checked) {
            var span = document.getElementById('Mensaje23');
            span.textContent = "¡Excelente! Recomendamos mantener esta buena práctica.";
        }


        if (document.getElementById('Abrir24').checked) {
            var span = document.getElementById('Mensaje24');
            span.textContent = "Se recomienda instalar un aplicativo que se encargue de controlar el acceso de los usuarios con el fin de permitir tener un mayor control en los niveles de acceso a la red de la empresa, lo que permitiría asegurar de una mejor forma la información de la entidad.";
        }
        if (document.getElementById('Fechar24').checked) {
            var span = document.getElementById('Mensaje24');
            span.textContent = "¡Excelente! Es importante que se mantenga esta práctica.";
        }


        if (document.getElementById('Abrir25').checked) {
            var span = document.getElementById('Mensaje25');
            span.textContent = "Es importante que se realice esta tarea periódicamente debido a que se puede presentar un riesgo en la seguridad de la información, ya que algunas personas pueden acceder a los datos de los dispositivos o cuentas, ya que estas contraseñas son almacenadas y cualquiera puede verlas siempre y cuando tenga acceso al dispositivo que las almacene.";
        }
        if (document.getElementById('Fechar25').checked) {
            var span = document.getElementById('Mensaje25');
            span.textContent = "¡Excelente! Recomendamos mantener esta buena práctica.";
        }


        if (document.getElementById('Abrir26').checked) {
            var span = document.getElementById('Mensaje26');
            span.textContent = "Limpieza no";
        }
        if (document.getElementById('Parar26').checked) {
            var span = document.getElementById('Mensaje26');
            span.textContent = "Limpieza tal vez";
        }
        if (document.getElementById('Fechar26').checked) {
            var span = document.getElementById('Mensaje26');
            span.textContent = "Limpieza si";
        }     
        
        
        if (document.getElementById('Abrir28').checked) {
            var span = document.getElementById('Mensaje28');
            span.textContent = "Es importante que esta tarea se realice siempre debido a que al no tener un control de restricciones en las cuentas de la base de datos se está provocando una vulnerabilidad en la seguridad de la información, debido a que cualquier persona que logre tener acceso a la base de datos puede ver consultar, eliminar, registrar o modificar la información almacenada.";
        }
        if (document.getElementById('Fechar28').checked) {
            var span = document.getElementById('Mensaje28');
            span.textContent = "¡Excelente! Se recomienda mantener esta buena práctica.";
        }


        if (document.getElementById('Abrir29').checked) {
            var span = document.getElementById('Mensaje29');
            span.textContent = "Es importante que se habilite un método de ocultación de la información para los usuarios, por ejemplo, la encriptación, ya que esto permitirá que en dado caso alguien pueda acceder a los datos de la entidad, lo único que encuentre es un conjunto de datos sin sentido que de no ser desencriptados no pueden ser comprendidos o usados.";
        }
        if (document.getElementById('Fechar29').checked) {
            var span = document.getElementById('Mensaje29');
            span.textContent = "¡Excelente! Se recomienda mantener siempre este método habilitado.";
        }


        if (document.getElementById('Abrir30').checked) {
            var span = document.getElementById('Mensaje30');
            span.textContent = "Se recomienda siempre eliminar las cuentas de la base de datos que ya no son usadas o que fuera deshabilitadas, debido a que su existencia permite que una persona con suficientes conocimientos y malas intenciones logre acceder a la información almacenada desde estas cuentas y vulnerar la seguridad de los datos.";
        }
        if (document.getElementById('Fechar30').checked) {
            var span = document.getElementById('Mensaje30');
            span.textContent = "¡Excelente! Recomendamos mantener esta práctica.";
        }


        if (document.getElementById('Abrir31').checked) {
            var span = document.getElementById('Mensaje31');
            span.textContent = "Este tipo de autenticaciones pueden generar un seguimiento al acceso en la BD, lo cual permite saber más claramente que usuarios han podido ingresar a generar cambios y en caso de realizar algún cambio riesgoso, se puede identificar más fácilmente. Es recomendable acudir a un profesional en caso de que no sepa como generar este tipo de procedimientos.";
        }
        if (document.getElementById('Fechar31').checked) {
            var span = document.getElementById('Mensaje31');
            span.textContent = "¡Excelente!, sin embargo, es importante que todos estos procesos y el conocimiento de estos los mantenga actualizados para mayores beneficios. Este tipo de información la puede encontrar en la web, claramente en páginas que sean de carácter fiable.";
        }


        if (document.getElementById('Abrir32').checked) {
            var span = document.getElementById('Mensaje32');
            span.textContent = "Tu información se puede encontrar en alto riesgo debido a la ausencia de estas actualizaciones, esto debido a que las contraseñas se ven más propensas a ser descifradas y ser utilizadas para distintos fines, es por esta razón que el cambiarlas o solicitarles a los usuarios un cambio frecuente puede generar mayor dificultad a los atacantes. Es recomendable que se inicie con este tipo de buenas prácticas, y, por otra parte, se genere una revisión al tipo de encriptación utilizado actualmente, ya que existen unos más seguros que otros. Por otra parte, puedes ser guiado y acompañado por un profesional en el tema para mejores resultados.";
        }
        if (document.getElementById('Fechar32').checked) {
            var span = document.getElementById('Mensaje32');
            span.textContent = "¡Excelente! Este tipo de prácticas previenen ataques o robo de credenciales con fines maliciosos; te recomendamos que te mantengas al tanto de los tipos de encriptaciones para que puedas aumentar la seguridad en estos casos.";
        }


        if (document.getElementById('Abrir33').checked) {
            var span = document.getElementById('Mensaje33');
            span.textContent = "Se le recomienda actualizarse frente a este tema, ya que muchos riesgos pueden depender de este tipo de situaciones y a su vez, puede presentar mayor beneficio que esté al tanto de todos estos procesos dentro de su organización. En caso de que no desee o no pueda estar presente en este proceso, puede asignar a un profesional que haga gestión de este, recuerde que con este tipo de permisos pueden ser afectada a gran escala su base de datos.";
        }
        if (document.getElementById('Fechar33').checked) {
            var span = document.getElementById('Mensaje33');
            span.textContent = "¡Genial!, al mantenerse al tanto de los privilegios con los que cuenta cada uno de sus usuarios puede evitar grandes amenazas y corregirlas fácilmente en caso de que se presenten.";
        }


        if (document.getElementById('Abrir34').checked) {
            var span = document.getElementById('Mensaje34');
            span.textContent = "Es recomendado activar la actualización automática de los programas o revisar constantemente de forma manual si hay nuevas actualizaciones, lo anterior es debido a que, mantener al día estos programas hace que no se pierda la seguridad ya que esto trae consigo parches que reducen la exposición a ciberataques; menor riesgo de perdida de productividad; y la protección de los datos y archivos de la empresa.";
        }
        if (document.getElementById('Fechar34').checked) {
            var span = document.getElementById('Mensaje34');
            span.textContent = "¡Excelente!, recomendamos mantener esta buena practica que mantiene la seguridad de los programas.";
        }


        if (document.getElementById('Abrir35').checked) {
            var span = document.getElementById('Mensaje35');
            span.textContent = "Al no ocultar la información de los archivos de los computadores se puede vulnerar la seguridad de los datos debido a que se está permitiendo que cualquier persona que logre tener acceso al dispositivo sin autorización pueda ver información sensible para la organización y hacer lo que quiera con ella. Es por esto por lo que se recomiendo ocultar los archivos importantes a los usuarios no autorizados.";
        }
        if (document.getElementById('Parar35').checked) {
            var span = document.getElementById('Mensaje35');
            span.textContent = "Se recomienda ocultar los archivos, programas o información relevante de la organización con el fin de asegurarlos y evitar que cualquier usuario tenga acceso a estos datos.";
        }
        if (document.getElementById('Fechar35').checked) {
            var span = document.getElementById('Mensaje35');
            span.textContent = "¡Excelente! Recomendamos mantener esta buena práctica.";
        }


        if (document.getElementById('Abrir36').checked) {
            var span = document.getElementById('Mensaje36');
            span.textContent = "Se recomienda hacer uso de una aplicación que se encargue las actualizaciones del sistema operativo con el fin de que está las pueda realizar automáticamente y al mismo tiempo, controlar los cambios realizados con el fin de prevenir errores en el funcionamiento del sistema o advertir a los usuarios de los problemas.";
        }
        if (document.getElementById('Fechar36').checked) {
            var span = document.getElementById('Mensaje36');
            span.textContent = "¡Excelente! Recomendamos mantener activada siempre esta aplicación.";
        }


        if (document.getElementById('Abrir37').checked) {
            var span = document.getElementById('Mensaje37');
            span.textContent = "Limpieza no";
        }
        if (document.getElementById('Parar37').checked) {
            var span = document.getElementById('Mensaje37');
            span.textContent = "Limpieza tal vez";
        }
        if (document.getElementById('Fechar37').checked) {
            var span = document.getElementById('Mensaje37');
            span.textContent = "Limpieza si";
        }


        if (document.getElementById('Abrir38').checked) {
            var span = document.getElementById('Mensaje38');
            span.textContent = "Limpieza no";
        }
        if (document.getElementById('Parar38').checked) {
            var span = document.getElementById('Mensaje38');
            span.textContent = "Limpieza tal vez";
        }
        if (document.getElementById('Fechar38').checked) {
            var span = document.getElementById('Mensaje38');
            span.textContent = "Limpieza si";
        }


        if (document.getElementById('Abrir39').checked) {
            var span = document.getElementById('Mensaje39');
            span.textContent = "Se recomienda que realice registros para seguimiento, o, en caso tal solicitar ayuda a un profesional, pues de esta manera traerá consigo mayores ventajas frente a posibles amenazas que se generen, o incluso afectaciones generadas por los mismos usuarios. Además, este tipo de seguimientos pueden contribuir en el momento en que su sistema sea auditado, pues tiene evidencias de la importancia y prevalencia que está generando frente a la seguridad y prevención en caso de posibles situaciones críticas.";
        }
        if (document.getElementById('Fechar39').checked) {
            var span = document.getElementById('Mensaje39');
            span.textContent = "¡Excelente!, este tipo de implementaciones permite generar un seguimiento a todo tipo de accesos referentes a sus dispositivos, identificando con claridad que usuarios estuvieron involucrados en su uso.";
        }

    }
    function optionAntivirus(x){
    if(x===0){
        $("#antivirus").hide();
    }else{
        $("#antivirus").show();
    }
}
    function optionServidores(x){
    if(x===0){
        $("#servidores1").hide();
        $("#servidores2").hide();
        $("#servidores3").hide();
        $("#servidores4").hide();
    }else{
        $("#servidores1").show();
        $("#servidores2").show();
        $("#servidores3").show();
        $("#servidores4").show();
    }
}
    function optionBD(x){
    if(x===0){
        $("#basedatos1").hide();
        $("#basedatos2").hide();
        $("#basedatos3").hide();
        $("#basedatos4").hide();
        $("#basedatos5").hide();
        $("#basedatos6").hide();
    }else{
        $("#basedatos1").show();
        $("#basedatos2").show();
        $("#basedatos3").show();
        $("#basedatos4").show();
        $("#basedatos5").show();
        $("#basedatos6").show();
    }
}
    </script>
</body>

</html>