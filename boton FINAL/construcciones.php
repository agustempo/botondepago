<!DOCTYPE HTML>

<?php
	$codigoDM = 4083795;
	$show = true;
	$tipo = $_GET['tipo'];
	$numero =$_GET['numero'];
	$sede = $_GET['sede'];
	$orden = $_GET['orden'];
	$mes = $_GET['mes'];
	$anio = $_GET['anio'];
	$codigoCC = $tipo.' '.$numero.' '.$sede.' '.$orden.' '.$mes.' '.$anio;
	
  	$descripcionSede['BA'] = 'Buenos Aires';
	$descripcionSede['MIS-OBE'] = 'Oberá';
	$descripcionSede['MIS-POS'] = 'Posadas';
	$descripcionSede['NQN-RN'] = 'Neuquén - Río Negro';
	$descripcionSede['COCHA'] = 'Corrientes - Chaco';
	$descripcionSede['TUC'] = 'Tucumán';
	$descripcionSede['CBA'] = 'Córdoba';
	$descripcionSede['SAL'] = 'Salta';
	$descripcionSede['ROS'] = 'Rosario';
	$descripcionSede['LOC'] = 'Mar del Plata';
	
	$descripcionOrden['MIX'] = 'Mixta';
	$descripcionOrden['JOV'] = 'Jóvenes';
	$descripcionOrden['MAS'] = 'Masiva';
	$descripcionOrden['TDI'] = 'Invierno';
	$descripcionOrden['TDV'] = 'Verano';
	
	$descripcionMes['ENE'] = 'enero';
	$descripcionMes['FEB'] = 'febrero';
	$descripcionMes['MAR'] = 'marzo';
	$descripcionMes['ABR'] = 'abril';
	$descripcionMes['MAY'] = 'mayo';
	$descripcionMes['JUN'] = 'junio';
	$descripcionMes['JUL'] = 'julio';
	$descripcionMes['AGO'] = 'agosto';
	$descripcionMes['SEP'] = 'septiembre';
	$descripcionMes['OCT'] = 'octubre';
	$descripcionMes['NOV'] = 'noviembre';
	$descripcionMes['DIC'] = 'diciembre';
	
	if ($orden == 'MIX' || $orden == 'JOV' || $orden == 'MAS')
	{
		$montos['BA'] = "entre $150 y $200";
		$montos['MIS-OBE'] = "entre $80 y $100";
		$montos['MIS-POS'] = "entre $80 y $100";
		$montos['NQN-RN'] = "entre $65 y $100";
		$montos['COCHA'] = "entre $100 y $140";
		$montos['TUC'] = "entre $50 y $80";
		$montos['CBA'] = "entre $150 y $200";
		$montos['SAL'] = "entre $100 a $150";
		$montos['ROS'] = "entre $80 a $100";
		
		$mail['BA'] = 'problemasdepago.argentina@techo.org';
		$mail['MIS-OBE'] = 'obera.misiones@techo.org';
		$mail['MIS-POS'] = 'misiones.argentina@techo.org';
		$mail['NQN-RN'] = 'neuquen.argentina@techo.org';
		$mail['COCHA'] = 'voluntariado.corrienteschaco@techo.org';
		$mail['TUC'] = 'voluntariado.tucuman@techo.org';
		$mail['CBA'] = 'voluntariado.cordoba@techo.org';
		$mail['SAL'] = 'salta.argentina@techo.org';
		$mail['ROS'] = 'voluntariado.rosario@techo.org';
	} 
	else if ($orden == 'TDI' || $orden == 'TDV')
	{
		$montos['BA'] = "entre $800 y $1000";
		$montos['MIS-OBE'] = "entre $1500 y $1800";
		$montos['MIS-POS'] = "entre $1500 y $1800";
		$montos['NQN-RN'] = "entre $1500 y $1800";
		$montos['COCHA'] = "entre $1200 y $1500";
		$montos['TUC'] = "entre $1500 y $1800";
		$montos['CBA'] = "entre $1200 y $1500";
		$montos['SAL'] = "entre $1500 y $1800";
		$montos['ROS'] = "entre $1000 y $1200";
		$montos['LOC'] = "entre $500 y $700";
		
		$socios['BA'] = "10 socios de $80";
		$socios['MIS-OBE'] = "10 socios de $150";
		$socios['MIS-POS'] = "10 socios de $150";
		$socios['NQN-RN'] = "10 socios de $150";
		$socios['COCHA'] = "10 socios de $120";
		$socios['TUC'] = "10 socios de $150";
		$socios['CBA'] = "10 socios de $120";
		$socios['SAL'] = "10 socios de $150";
		$socios['ROS'] = "10 socios de $100";
		$socios['LOC'] = "10 socios de $50";
		
		$mail['BA'] = 'trabajos.argentina@techo.org';
		$mail['MIS-OBE'] = 'trabajos.argentina@techo.org';
		$mail['MIS-POS'] = 'trabajos.argentina@techo.org';
		$mail['NQN-RN'] = 'trabajos.argentina@techo.org';
		$mail['COCHA'] = 'trabajos.argentina@techo.org';
		$mail['TUC'] = 'trabajos.argentina@techo.org';
		$mail['CBA'] = 'trabajos.argentina@techo.org';
		$mail['SAL'] = 'trabajos.argentina@techo.org';
		$mail['ROS'] = 'trabajos.argentina@techo.org';
		$mail['LOC'] = 'trabajos.argentina@techo.org';
	}
?>

<html>
	<head>
		<title>TECHO - Botón de Pago</title>
		<link rel="shortcut icon" type="images/x-icon" href="/images/favicon.png"/>
		<link rel="icon" href="images/favicon.png" type="images/x-icon"/>
		<link rel="stylesheet" href="assets/css/main.css"/>
	</head>
	<body id="top">
		<header id="header">
			<div class="content">
				<h1>¡Último Paso!</h1>
				<h2><?php if ($orden == 'TDI' || $orden == 'TDV')
				{
					echo "Confirma tu participación en los <b>Trabajos</b><br/> de $descripcionOrden[$orden] de TECHO en Mar del Plata.<br/><br/> Vas a salir desde $descripcionSede[$sede]";
				} 
				else
				{
					echo "Confirma tu participación en la construcción<br/> $descripcionOrden[$orden] de $descripcionMes[$mes] de TECHO en $descripcionSede[$sede]";
				}?></h2>
				<h3>¿CÓMO?</h3>
				<ul class="actions">
					<li><a href="#one" class="button icon fa-chevron-down scrolly">Ver Opciones de pago</a></li>
				</ul>
			</div>
			<div class="image phone"><div class="inner"><img src="images/<?php echo $orden?>.jpg" alt=""/></div></div>
		</header>
		<section id="one" class="wrapper style2 special">
			<header class="major">
				<?php if ($orden == 'TDI' || $orden == 'TDV')
				{								
					echo "<h3>Opciones de confirmación:</h3><br/><br/>
						<ul>1) Haciendo <b>$socios[$sede]</b> cada uno, anotandolos en el siguiente <b><a href='http://www.techo.org.ar/socios/formulario'>LINK</a></b><br/><br/>
						2) Abonando a travez de PayU: <b>$montos[$sede]</b><br/>		
						Llená el monto a pagar en el casillero de abajo, clickeá en el botón y seguí los pasos.<br/> Podes pagar en efectivo o con tarjeta y el monto lo usaremos para tu seguro médico, comida y transporte
						(por las dudas, acá tenes un <b><a href='https://sites.google.com/a/techo.org/veni-a-construir/techo-instructivo-pago' target='_blank'>Instructivo</a></b>).</ul>";
				} 
				else
				{
					echo "<h3>Opciones de confirmación:</h3><br/><br/>
						<ul>1) Haciendote socio de techo o asociando un conocido.<br/>
						Completando tus datos en este link <b><a href='http://www.techo.org.ar/socios/formulario'>LINK</a></b>.</ul>
						<ul>2) Abonar la construcción a través de 'PayU' <b>$montos[$sede]</b>.
						Llená el monto a pagar en el casillero de abajo, clickeá en el botón y seguí los pasos.<br/> Podes pagar en efectivo o con tarjeta y el monto lo usaremos para cubrir los costos de la comida, el transporte y el seguro medico
						(por las dudas, acá tenes un <b><a href='https://sites.google.com/a/techo.org/veni-a-construir/techo-instructivo-pago' target='_blank'>Instructivo</a></b>).</ul>";
				}?>
				<ul>Si querés participar y tenés problemas para cubrir el pago (total o parcial), no lo dudes, solicítanos una <b>BECA</b> o <b>PRORROGA</b> <br/>enviando un mail a <b><?php echo $mail[$sede] ?></b></ul>
			</header>
		</section>
		<section id="three" class="wrapper style3 special">
			<header class="major">
				<h2><?php if ($orden == 'TDI' || $orden == 'TDV')
				{
					echo "Abonar los Trabajos";
				} 
				else
				{
					echo "Abonar la construcción";
				}?></h2>
				<form id="formulario" action="https://gateway.payulatam.com/ppp-web-gateway" method="post">							
					<ul><?php if ($orden == 'TDI' || $orden == 'TDV')
						{	
							echo "<h4>Nombre y Apellido:</h4>
								<input type='text' id='buyerFullName' name='buyerFullName' placeholder='Completo' required/>							
								<br/>
								<h4>Email:</h4>
								<input type='email' id='buyerEmail' name='buyerEmail' placeholder='Como figura en Pilote' required/>
								<br/>
								<h4>DNI / Pasaporte:</h4>
								<input type='text' id='payerDocument' name='payerDocument' onkeypress='return valida(event)' placeholder='Como figura en Pilote' required/>
								<br/>
								<h4>Monto a Donar:</h4>
								<input type='text' id='item_ammount_1' name='item_ammount_1' value='' onKeyPress='return SoloNumerico(event, this);' Onblur='AplicoFormato(this)' required/><br/>";
						}
						else {
							echo "<h4>Nombre y Apellido:</h4>
							<input type='text' id='buyerFullName' name='buyerFullName' placeholder='Completo' required/>							
							<br/>
							<h4>Email:</h4>
							<input type='email' id='buyerEmail' name='buyerEmail' placeholder='Como figura en Pilote' required/>
							<br/>
							<h4>DNI / Pasaporte:</h4>
							<input type='text' id='payerDocument' name='payerDocument' onkeypress='return valida(event)' placeholder='Como figura en Pilote' required/>
							<br/>
							<h4>Monto a Donar:</h4>
							<input type='text' id='item_ammount_1' name='item_ammount_1' value='' onKeyPress='return SoloNumerico(event, this);' Onblur='AplicoFormato(this)' required/>						
							<br/>";
						}?>
						<input type="hidden" id="amount" name="amount" value=""/>
						<input type="hidden" id="merchantId" name="merchantId" value="536715"/>
						<input type="hidden" id="referenceCode" name="referenceCode" value="CC-Voluntario"/>					
						<input type="hidden" id="accountId" name="accountId" value="538721"/>
						<input type="hidden" id="description" name="description" value="<?php echo $codigoCC; ?>" />						
						<input type="hidden" id="tax" name="tax" value="0"/>					
						<input type="hidden" id="taxReturnBase" name="taxReturnBase" value="0"/>
						<input type="hidden" id="signature" name="signature" value=""/>
						<input type="hidden" id="currency" name="currency" value="ARS"/>
						<button type="button" onclick="enviar()" id="boton-donar" value="Pagar">Pagar</button>
					</ul>
				</form>
				<p>Mantene tus datos actualizados, ingresa en <b><a href='http://pilote.techo.org/admin' target='_blank'>PILOTE</a></b> para actualizarlos!<br/>(Administración --> Modificar mis datos)</p>
			</header>			
		</section>
		<footer id="footer">
			<ul class="icons">
				<li><a href="https://www.facebook.com/TECHOargentina" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
				<li><a href="https://twitter.com/TECHOarg" class="icon fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
				<li><a href="https://www.instagram.com/techo_argentina/" class="icon fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
				<li><a href="https://www.linkedin.com/company/2634308?trk=tyah" class="icon fa-linkedin" target="_blank"><span class="label">Linkedin</span></a></li>
				<li><a href="https://www.youtube.com/user/techoargentina" class="icon fa-youtube" target="_blank"><span class="label">Youtube</span></a></li>
			</ul>
			<p class="copyright">&copy; Techo Argentina. Credits: <b>Santi Mello</b></p>
		</footer>	
		<script src="assets/js/md5.js"></script>
		<script src="assets/js/index.js"></script>
		<script src="assets/js/documento.js"></script>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>	
		<script src="assets/js/main.js"></script>
	</body>
</html>
