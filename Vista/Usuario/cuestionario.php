<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
            <p>Bienvenido al cuestionario de Hardening. Como bien sabe, es importante brindar confiabilidad y seguridad por medio de
                su sistema; es por esta razón que necesitamos que responda con sinceridad las siguientes preguntas</p>
		</div>
		
		<form action="" class="formulario">
			<div class="radio">
				<h2>Auditoría de sistemas</h2>
                <p>¿Audita actualmente los sistemas que implementa?</p>
                
				<input type="radio" name="radio" id="Abrir" required>
				<label for="Abrir">No</label>
                <input type="radio" name="radio" id="Parar" required>
				<label for="Parar">Algunas veces</label>
                <input type="radio" name="radio" id="Fechar" required>
				<label for="Fechar">Sí</label>
                <br></br>
                <h4 id="Revision1"></h4>
                 <span  class="fs-subtitle1" id="Mensaje1"></span> 
			</div>
		</form>
		<form action="" class="pregunta2">
			<div class="radio">
				<h2>Fortalecimiento de sistemas</h2>
                <p>¿Ejecuta un plan de acción para el control de riesgos?</p>
				<input type="radio" name="radio" id="Abrir1" required>
				<label for="Abrir1">No</label>
               
				<input type="radio" name="radio" id="Parar1" required>
				<label for="Parar1">Algunas veces</label>
                
				<input type="radio" name="radio" id="Fechar1" required>
				<label for="Fechar1">Sí</label>
                <br></br>
               <h4 id="Revision2"></h4> 
                <span  class="fs-subtitle1" id="Mensaje2"></span>
			</div>
		</form>
        <form action="" class="pregunta3">
			<div class="radio">
				<h2>Parcheo de vulnerabilidades</h2>
                <p>¿Cuenta con un sistema que identifique este tipo de parcheos?</p>
				<input type="radio" name="radio" id="Abrir2" required>
				<label for="Abrir2">No</label>
               
		
				<input type="radio" name="radio" id="Parar2" required>
				<label for="Parar2">Algunas veces</label>
               
				<input type="radio" name="radio" id="Fechar2" required>
				<label for="Fechar2">Sí</label>
                <br></br>
               <h4 id="Revision3"></h4>
                <span  class="fs-subtitle1" id="Mensaje3"></span>
			</div>
		</form>
        <form action="" class="pregunta4">
			<div class="radio">
				<h2>Fortalecimiento de la red</h2>
                <p>¿El firewall está cumpliendo todas sus tareas??</p>
				<input type="radio" name="radio" id="Abrir3" required>
				<label for="Abrir3">No</label>
                
				<input type="radio" name="radio" id="Parar3" required>
				<label for="Parar3">Algunas veces</label>
                
				<input type="radio" name="radio" id="Fechar3" required>
				<label for="Fechar3">Sí</label>
                <br></br>
               <h4 id="Revision4"></h4>
                <span  class="fs-subtitle1" id="Mensaje4"></span>
			</div>
		</form>
        <form action="" class="pregunta5">
			<div class="radio">
            <p>¿Verifica los puntos de acceso?</p>
				<input type="radio" name="radio" id="Abrir4" required>
				<label for="Abrir4">No</label>
              
				<input type="radio" name="radio" id="Parar4" required>
				<label for="Parar4">Algunas veces</label>
                
				<input type="radio" name="radio" id="Fechar4" required>
				<label for="Fechar4">Sí</label>
                <br></br>
                <h4 id="Revision5"></h4>
                <span  class="fs-subtitle1" id="Mensaje5"></span>
			</div>
		</form>
        <form action="" class="pregunta6">
			<div class="radio">
				<h2>Refuerzo del servidor</h2>
                <p>¿Ubica los servidores en un lugar seguro?</p>
				<input type="radio" name="radio" id="Abrir5" required>
				<label for="Abrir5">No</label>
                
				<input type="radio" name="radio" id="Parar5" required>
				<label for="Parar5">Algunas veces</label>
                
				<input type="radio" name="radio" id="Fechar5" required>
				<label for="Fechar5">Sí</label>
                <br></br>
                <h4 id="Revision6"></h4>
                <span  class="fs-subtitle1" id="Mensaje6"></span>
			</div>
		</form>
        <form action="" class="pregunta7">
			<div class="radio">
            <p>¿Verifica si el software a instalar es totalmente necesario?</p>
				<input type="radio" name="radio" id="Abrir6" required>
				<label for="Abrir6">No</label>
                
				<input type="radio" name="radio" id="Parar6" required>
				<label for="Parar6">Algunas veces</label>
                
				<input type="radio" name="radio" id="Fechar6" required>
				<label for="Fechar6">Sí</label>
                <br></br>
               <h4 id="Revision7"></h4>
                <span  class="fs-subtitle1" id="Mensaje7"></span>
			</div>
		</form>
        <form action="" class="pregunta8">
			<div class="radio">
            <o>¿Verifica el uso de recursos compartidos?</p>
				<input type="radio" name="radio" id="Abrir7" required>
				<label for="Abrir7">No</label>
                
				<input type="radio" name="radio" id="Parar7" required>
				<label for="Parar7">Algunas veces</label>
               
				<input type="radio" name="radio" id="Fechar7" required>
				<label for="Fechar7">Sí</label>
                <br></br>
                <h4 id="Revision8"></h4>
                <span  class="fs-subtitle1" id="Mensaje8"></span>
			</div>
		</form>
        <form action="" class="pregunta9">
			<div class="radio">
            <h2>Endurecimiento de la aplicación</h2>
            <p>¿Elimina archivos innecesarios?</p>
				<input type="radio" name="radio" id="Abrir8" required>
				<label for="Abrir8">No</label>
                
				<input type="radio" name="radio" id="Parar8" required>
				<label for="Parar8">Algunas veces</label>
              
				<input type="radio" name="radio" id="Fechar8" required>
				<label for="Fechar8">Sí</label>
                <br></br>
               <h4 id="Revision9"></h4>
                <span  class="fs-subtitle1" id="Mensaje9"></span>
			</div>
		</form>
        <form action="" class="pregunta10">
			<div class="radio">
            <h2>Fortalecimiento de la base de datos</h2>
            <p>¿Existen restricciones para privilegios?</p>
				<input type="radio" name="radio" id="Abrir9" required>
				<label for="Abrir9">No</label>
              
				<input type="radio" name="radio" id="Parar9" required>
				<label for="Parar9">Algunas veces</label>
                
				<input type="radio" name="radio" id="Fechar9" required>
				<label for="Fechar9">Sí</label>
                <br></br>
               <h4 id="Revision10"></h4> 
                <span  class="fs-subtitle1" id="Mensaje10"></span>
			</div>
		</form>
        <form action="" class="pregunta11">
			<div class="radio">
            <p>¿Es cifrada la información pertinente?</p>
				<input type="radio" name="radio" id="Abrir10" required>
				<label for="Abrir10">No</label>
                
				<input type="radio" name="radio" id="Parar10" required>
				<label for="Parar10">Algunas veces</label>
               
				<input type="radio" name="radio" id="Fechar10" required>
				<label for="Fechar10">Sí</label>
                <br></br>
               <h4 id="Revision11"></h4>
                <span  class="fs-subtitle1" id="Mensaje11"></span>
			</div>
		</form>
        <form action="" class="pregunta12">
			<div class="radio">
            <p>¿Se hace una eliminación de cuentas preventiva?</p>
				<input type="radio" name="radio" id="Abrir11" required>
				<label for="Abrir11">No</label>
               
				<input type="radio" name="radio" id="Parar11" required>
				<label for="Parar11">Algunas veces</label>
               
				<input type="radio" name="radio" id="Fechar11" required>
				<label for="Fechar11">Sí</label>
                <br></br>
               <h4 id="Revision12"></h4>
             <span  class="fs-subtitle1" id="Mensaje12"></span>
			</div>
		</form>
        <form action="" class="pregunta13">
			<div class="radio">
            <h2>Fortalecimiento del sistema operativo</h2>
            <p>¿Realiza actualizaciones de forma automática?</p>
				<input type="radio" name="radio" id="Abrir12" required>
				<label for="Abrir12">No</label>
               
				<input type="radio" name="radio" id="Parar12" required>
				<label for="Parar12">Algunas veces</label>
                
				<input type="radio" name="radio" id="Fechar12" required>
				<label for="Fechar12">Sí</label>
                <br></br>
               <h4 id="Revision13"></h4>
                <span  class="fs-subtitle1" id="Mensaje13"></span>
			</div>
		</form>
        <form action="" class="pregunta14">
			<div class="radio">
            <p>¿Cifra los archivos locales?</p>
				<input type="radio" name="radio" id="Abrir13" required>
				<label for="Abrir13">No</label>
               
				<input type="radio" name="radio" id="Parar13" required>
				<label for="Parar13">Algunas veces</label>
               
				<input type="radio" name="radio" id="Fechar13" required>
				<label for="Fechar13">Sí</label>
                <br></br>
               <h4 id="Revision14"></h4>
                <span  class="fs-subtitle1" id="Mensaje14"></span>
			</div>
		</form>
        <form action="" class="pregunta15">
			<div class="radio">
            <h2>Limpieza de programas</h2>
            <p>¿Realiza la limpieza o incluso eliminación de programas innecesarios?</p>
				<input type="radio" name="radio" id="Abrir14" required>
				<label for="Abrir14">No</label>
              
				<input type="radio" name="radio" id="Parar14" required>
				<label for="Parar14">Algunas veces</label>
                
				<input type="radio" name="radio" id="Fechar14" required>
				<label for="Fechar14">Sí</label>
                <br></br>
               <h4 id="Revision15"></h4>
            <span  class="fs-subtitle1" id="Mensaje15"></span>
			</div>
		</form>
        <div class="frame">
  <button class="custom-btn btn-15" onclick="Mostrar_resultado()">Enviar</button>
</div>
</div>
<script>
   function Mostrar_resultado(){
         
             /**Solo agrego titulos para la respectiva revisión */
        var titulo1=document.getElementById('Revision1');
        titulo1.textContent="Aspectos a tener en cuenta"; 
        var titulo2=document.getElementById('Revision2');
        titulo2.textContent="Aspectos a tener en cuenta";
        var titulo15=document.getElementById('Revision15');
        titulo15.textContent="Aspectos a tener en cuenta";
        var titulo3=document.getElementById('Revision3');
        titulo3.textContent="Aspectos a tener en cuenta";
        var titulo4=document.getElementById('Revision4');
        titulo4.textContent="Aspectos a tener en cuenta";
        var titulo5=document.getElementById('Revision5');
        titulo5.textContent="Aspectos a tener en cuenta";
        var titulo6=document.getElementById('Revision6');
        titulo6.textContent="Aspectos a tener en cuenta";
        var titulo7=document.getElementById('Revision7');
        titulo7.textContent="Aspectos a tener en cuenta";
        var titulo8=document.getElementById('Revision8');
        titulo8.textContent="Aspectos a tener en cuenta";
        var titulo9=document.getElementById('Revision9');
        titulo9.textContent="Aspectos a tener en cuenta";
        var titulo10=document.getElementById('Revision10');
        titulo10.textContent="Aspectos a tener en cuenta";
        var titulo11=document.getElementById('Revision11');
        titulo11.textContent="Aspectos a tener en cuenta";
        var titulo12=document.getElementById('Revision12');
        titulo12.textContent="Aspectos a tener en cuenta";
        var titulo13=document.getElementById('Revision13');
        titulo13.textContent="Aspectos a tener en cuenta";
        var titulo14=document.getElementById('Revision14');
        titulo14.textContent="Aspectos a tener en cuenta";

       if(document.getElementById('Abrir').checked){
           var span=document.getElementById('Mensaje1');
        span.textContent="Debería de auditar su sistema";   
       }
      
       
       if(document.getElementById('Parar').checked){
           var span=document.getElementById('Mensaje1');
        span.textContent="Refuerce este campo";   
       }
       if(document.getElementById('Fechar').checked){
           var span=document.getElementById('Mensaje1');
        span.textContent="A pesar de que lo aplica, busque planes de mejora de auditoria";   
       }
       if(document.getElementById('Abrir1').checked){
           var span=document.getElementById('Mensaje2');
        span.textContent="Es NECESARIO aplicar este tipo de planes";   
       }
       if(document.getElementById('Parar1').checked){
           var span=document.getElementById('Mensaje2');
        span.textContent="Busque quien le genere una mejora de plan de acción";   
       }
       if(document.getElementById('Fechar1').checked){
           var span=document.getElementById('Mensaje2');
        span.textContent="Perfecto";   
       }
       if(document.getElementById('Abrir2').checked){
           var span=document.getElementById('Mensaje3');
        span.textContent="Es obligatorio aplicar el plan de parcheo";   
       }
       if(document.getElementById('Parar2').checked){
           var span=document.getElementById('Mensaje3');
        span.textContent="Busque como mejorar este plan de parcheo";   
       }
       if(document.getElementById('Fechar2').checked){
           var span=document.getElementById('Mensaje3');
        span.textContent="Plan de parcheo ok";   
       }
       if(document.getElementById('Abrir3').checked){
           var span=document.getElementById('Mensaje4');
        span.textContent="Firewall NO";   
       }
       if(document.getElementById('Parar3').checked){
           var span=document.getElementById('Mensaje4');
        span.textContent="Firewall Tal vez";   
       }
       if(document.getElementById('Fechar3').checked){
           var span=document.getElementById('Mensaje4');
        span.textContent="Firewall Ok";   
       }
       if(document.getElementById('Abrir4').checked){
           var span=document.getElementById('Mensaje5');
        span.textContent="Puntos de acceso no";   
       }
       if(document.getElementById('Parar4').checked){
           var span=document.getElementById('Mensaje5');
        span.textContent="Puntos de acceso tal vez";   
       }
       if(document.getElementById('Fechar4').checked){
           var span=document.getElementById('Mensaje5');
        span.textContent="Puntos de acceso ok";   
       }
       if(document.getElementById('Abrir5').checked){
           var span=document.getElementById('Mensaje6');
        span.textContent="Servidor no";   
       }
       if(document.getElementById('Parar5').checked){
           var span=document.getElementById('Mensaje6');
        span.textContent="Servidor tal vez";   
       }
       if(document.getElementById('Fechar5').checked){
           var span=document.getElementById('Mensaje6');
        span.textContent="Servidor ok";   
       }
       if(document.getElementById('Abrir6').checked){
           var span=document.getElementById('Mensaje7');
        span.textContent="Software no";   
       }
       if(document.getElementById('Parar6').checked){
           var span=document.getElementById('Mensaje7');
        span.textContent="Software a veces";   
       }
       if(document.getElementById('Fechar6').checked){
           var span=document.getElementById('Mensaje7');
        span.textContent="Software ok";   
       }
       if(document.getElementById('Abrir7').checked){
           var span=document.getElementById('Mensaje8');
        span.textContent="Recursos no";   
       }
       if(document.getElementById('Parar7').checked){
           var span=document.getElementById('Mensaje8');
        span.textContent="Recursos tal vez";   
       }
       if(document.getElementById('Fechar7').checked){
           var span=document.getElementById('Mensaje8');
        span.textContent="Recursos ok";   
       }
       if(document.getElementById('Abrir8').checked){
           var span=document.getElementById('Mensaje9');
        span.textContent="Archivos no";   
       }
       if(document.getElementById('Parar8').checked){
           var span=document.getElementById('Mensaje9');
        span.textContent="Archivos tal vez";   
       }
       if(document.getElementById('Fechar8').checked){
           var span=document.getElementById('Mensaje9');
        span.textContent="Archivos ok";   
       }
       if(document.getElementById('Abrir9').checked){
           var span=document.getElementById('Mensaje10');
        span.textContent="BD NO";   
       }
       if(document.getElementById('Parar9').checked){
           var span=document.getElementById('Mensaje10');
        span.textContent="BD tal vez";   
       }
       if(document.getElementById('Fechar9').checked){
           var span=document.getElementById('Mensaje10');
        span.textContent="BD sí";   
       }
       if(document.getElementById('Abrir10').checked){
           var span=document.getElementById('Mensaje11');
        span.textContent="Cifrado no";   
       }
       if(document.getElementById('Parar10').checked){
           var span=document.getElementById('Mensaje11');
        span.textContent="Cifrado tal vez";   
       }
       if(document.getElementById('Fechar10').checked){
           var span=document.getElementById('Mensaje11');
        span.textContent="Cifrado sí";   
       }
       if(document.getElementById('Abrir11').checked){
           var span=document.getElementById('Mensaje12');
        span.textContent="Cuentas no";   
       }
       if(document.getElementById('Parar11').checked){
           var span=document.getElementById('Mensaje12');
        span.textContent="Cuentas tal vez";   
       }
       if(document.getElementById('Fechar11').checked){
           var span=document.getElementById('Mensaje12');
        span.textContent="Cuentas sí";   
       }
       if(document.getElementById('Abrir12').checked){
           var span=document.getElementById('Mensaje13');
        span.textContent="Actualizacion no";   
       }
       if(document.getElementById('Parar12').checked){
           var span=document.getElementById('Mensaje13');
        span.textContent="Actualizacion tal vez";   
       }
       if(document.getElementById('Fechar12').checked){
           var span=document.getElementById('Mensaje13');
        span.textContent="Actualizacion si";   
       }
       if(document.getElementById('Abrir13').checked){
           var span=document.getElementById('Mensaje14');
        span.textContent="Local no";   
       }
       if(document.getElementById('Parar13').checked){
           var span=document.getElementById('Mensaje14');
        span.textContent="Local tal vez";   
       }
       if(document.getElementById('Fechar13').checked){
           var span=document.getElementById('Mensaje14');
        span.textContent="Local si";   
       }
       if(document.getElementById('Abrir14').checked){
           var span=document.getElementById('Mensaje15');
        span.textContent="Limpieza no";   
       }
       if(document.getElementById('Parar14').checked){
           var span=document.getElementById('Mensaje15');
        span.textContent="Limpieza tal vez";   
       }
       if(document.getElementById('Fechar14').checked){
           var span=document.getElementById('Mensaje15');
        span.textContent="Limpieza si";   
       }
   
            
            
        }
       

        
    </script>
</body>
</html>