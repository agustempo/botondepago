<!DOCTYPE HTML>

<?php
	$codigoDM = 1352279;
	$show = true;
	$tipo = $_GET['tipo'];	
	$sede = $_GET['sede'];
	$mes = $_GET['mes'];
	$anio = $_GET['anio'];
	$nombre =$_GET['nombre'];
	$codigoEMP = $sede.' '.$mes.' '.$anio.' '.$tipo.' '.$nombre;
	
	$descripcionTipo['EMP'] = 'Empresa';
	$descripcionTipo['PRO'] = 'Proveedor';
	$descripcionTipo['PYM'] = 'Pyme';
	
  	$descripcionSede['BA'] = 'Buenos Aires';
	$descripcionSede['MIS-OBE'] = 'Oberá';
	$descripcionSede['MIS-POS'] = 'Posadas';
	$descripcionSede['NQN-RN'] = 'Neuquén - Río Negro';
	$descripcionSede['COCHA'] = 'Corrientes - Chaco';
	$descripcionSede['TUC'] = 'Tucumán';
	$descripcionSede['CBA'] = 'Córdoba';
	$descripcionSede['SAL'] = 'Salta';
	$descripcionSede['ROS'] = 'Rosario';
	
	if ($orden == 'EMP')
	{
		$montos['EMP'] = "$60.000";
	}
	else if ($orden == 'PRO' || $orden == 'PYM')
	{
		$montos['PRO'] = "$40.000";
		$montos['PYM'] = "$40.000";
	}
?>

<html>
	<head>
		<title>TECHO - Botón de Pago</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<link rel="shortcut icon" type="images/x-icon" href="/images/favicon.png" />
		<link rel="icon" href="images/favicon.png" type="images/x-icon">
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header">
				<div class="content">
					<h2>Bienvenido <?php echo $descripcionTipo[$tipo]?> <?php echo $nombre?><br/> al Botón de Pago de TECHO</h2>
					<ul class="actions">
						<li><a href="#one" class="button icon fa-chevron-down scrolly">Más Información</a></li>
						<li><a href="#two" class="button icon fa-chevron-down scrolly">Ir a Pagar</a></li>					
					</ul>
				</div>
				<!--<div class="image phone"><div class="inner"><img src="images/logo.jpg" alt=""/></div></div>-->
				<div class="image phone"><div class="inner"><img src="images/emp/<?php echo $nombre?>.jpg" alt=""/></div></div>
			</header>

		<!-- One -->
			<section id="one" class="wrapper style2 special">
				<header class="major">
					<h4><ul>La Construcción con tu <?php echo $descripcionTipo[$tipo]?> es una oportunidad de voluntariado donde se participa de<br/> la construcción de una vivienda de emergencia junto a una familia que hoy vive en situación de extrema pobreza.</ul>
					<ul>La actividad, que transcurre durante un fin de semana completo, no está limitada a la edad ni a las habilidades<br/> en construcción de sus voluntarios, sino a sus ganas y compromiso con el trabajo comunitario.</ul>
					<ul>Desde TECHO proveemos las herramientas, además de asegurarnos de que en todo momento se sientan acompañados<br/> por voluntarios que guiarán la construcción. Desde su lado, deberán financiar los materiales de la vivienda<br/> 
					transfiriendo o depositando ARS$ <?php echo $montos[$tipo]?> (<a href="https://sites.google.com/a/techo.org/veni-a-construir/techo-instructivo-pago-empresas" target='_blank'>Instructivo</a>), como así también llevar la comida para compartir<br/> el fin de semana con la familia a la que le construirán la vivienda.</ul></h4>										
				</header>			
			</section>

		<!-- Three -->
			<section id="two" class="wrapper style3 special">
				<header class="major">
					<h2>Abonar la Construcción</h2>
					<form id="formulario" action="https://checkout.payulatam.com/ppp-web-gateway-payu" method="post" target="_top">							
						<ul><h4>Nombre y Apellido:</h4>
						<input type="text" id="buyerFullName" name="buyerFullName" required/>
						<br/>
						<h4>Email:</h4>
						<input type="text" id="buyerEmail" name="buyerEmail" pattern="[a-z]{3}[0-9]{3}" required/>
						<br/>
						<h4>DNI / Pasaporte:</h4>
						<input type="text" id="payerDocument" name="payerDocument" onkeypress="return valida(event)" required/>
						<br/>
						<h4>Monto a Pagar:</h4>
						<input type="text" id="item_ammount_1" name="item_ammount_1" value="" onKeyPress="return SoloNumerico(event, this);" Onblur="AplicoFormato(this)" required/>												
						<br/>						
						<input type="hidden" id="amount" name="amount" value=""/>
						<input type="hidden" id="merchantId" name="merchantId" value="536715"/>
						<input type="hidden" id="referenceCode" name="referenceCode" value="CC-Empresas"/>
						<input type="hidden" id="accountId" name="accountId" value="538721"/>
						<input type="hidden" id="description" name="description" value="<?php echo $codigoEMP; ?>" />
						<input type="hidden" id="tax" name="tax" value="0"/>		
						<input type="hidden" id="taxReturnBase" name="taxReturnBase" value="0"/>
						<input type="hidden" id="signature" name="signature" value=""/>
						<input type="hidden" id="currency" name="currency" value="ARS"/>			
						<button type="button" onclick="enviar()" id="boton-donar" value="Pagar">Pagar</button></ul>									
					</form>
				</header>			
			</section>

			<footer id="footer">
				<ul class="icons">
					<li><a href="https://www.facebook.com/TECHOargentina" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
					<li><a href="https://twitter.com/TECHOarg" class="icon fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
					<li><a href="https://www.instagram.com/techo_argentina/" class="icon fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
				</ul>
				<p class="copyright">&copy; Techo Argentina. Credits: Santi Mello</p>
			</footer>

		<!-- Scripts -->
		<script src="assets/js/todo.js"></script>
		<script src="assets/js/md5.js"></script>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>	
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>
	</body>
</html>