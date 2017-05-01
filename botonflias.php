<!DOCTYPE HTML>

<?php
	$codigoDM = 1352279;
	$show = true;
	$tipo = $_GET['tipo'];	
	$sede = $_GET['sede'];
	$mes = $_GET['mes'];
	$anio = $_GET['anio'];
	$nombre =$_GET['nombre'];
	$codigoCC = $sede.' '.$mes.' '.$anio.' '.$tipo.' '.$nombre;

	$descripcionTipo['Fam'] = 'Familia';
	$descripcionTipo['Gru'] = 'Grupo';
	$descripcionTipo['Sta'] = 'Staff';
	
  	$descripcionSede['BA'] = 'Buenos Aires';
	$descripcionSede['BAN'] = 'BA Sede Norte';
	$descripcionSede['BAO'] = 'BA Sede Oeste';
	$descripcionSede['BAS'] = 'BA Sede Sur';
	$descripcionSede['LP'] = 'La Plata';
	$descripcionSede['ON'] = 'Oficina Nacional';
	
	if ($tipo == 'Fam' || $tipo=='Gru' || $tipo=='Sta')
	{
		$montos['BA'] = "24000";
		$montos['BAN'] = "24000";
		$montos['BAO'] = "24000";
		$montos['BAS'] = "24000";
		$montos['LP'] = "24000";
		$montos['ON'] = "24000";
		
		$mail['BA'] = 'familias.buenosaires@techo.org';
		$mail['BAN'] = 'familias.buenosaires@techo.org';
		$mail['BAO'] = 'familias.buenosaires@techo.org';
		$mail['BAS'] = 'familias.buenosaires@techo.org';
		$mail['LP'] = 'familias.buenosaires@techo.org';
		$mail['ON'] = 'familias.buenosaires@techo.org';
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
					<h2>Bienvenido al Botón de Pago<br/> <?php echo $descripcionTipo[$tipo]?> <?php echo $nombre?> de TECHO</h2>
					<ul class="actions">
						<li><a href="#one" class="button icon fa-chevron-down scrolly">Más Información</a></li>
						<li><a href="#two" class="button icon fa-chevron-down scrolly">Ir a Pagar</a></li>					
					</ul>
				</div>
				<div class="image phone"><div class="inner"><img src="images/foto1.jpg" alt=""/></div></div>
			</header>

		<!-- One -->
			<section id="one" class="wrapper style2 special">
				<header class="major">
					<h4><ul>La Construcción con tu <?php echo $descripcionTipo[$tipo]?> es una oportunidad de voluntariado donde se participa de<br/> la construcción de una vivienda de emergencia junto a una familia que hoy vive en situación de extrema pobreza.</ul>
					<ul>La actividad, que transcurre durante un fin de semana completo, no está limitada a la edad ni a las habilidades<br/> en construcción de sus voluntarios, sino a sus ganas y compromiso con el trabajo comunitario.</ul>
					<ul>Desde TECHO proveemos las herramientas, además de asegurarnos de que en todo momento se sientan acompañados<br/> por voluntarios que guiarán la construcción. Desde su lado, deberán financiar los materiales de la vivienda<br/> 
					transfiriendo o depositando ARS$ <?php echo $montos[$sede]?>, como así también llevar la comida para compartir<br/> el fin de semana con la familia a la que le construirán la vivienda.</ul></h4>										
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
						<h4>Monto a Pagar:</h4>
						<input type="text" id="item_ammount_1" name="item_ammount_1" value="" onKeyPress="return SoloNumerico(event, this);" Onblur="AplicoFormato(this)" required/>						
						<br/>						
						<input type="hidden" name="merchant" value="1352279"/>
						<input type="hidden" name="payment_method_available" value="all"/>
						<input type="hidden" id="item_name_1" name="item_name_1" value="<? echo $codigoCC; ?>"/>
						<input type="hidden" name="item_quantity_1" value="1"/>
						<input type="hidden" name="country_id" value="1"/>
						<input type="hidden" name="seller_name" value="Un Techo"/>
						<input type='submit' name=submit id="boton-donar" class="button special" value="Pagar" onclick="this.disabled=true; this.value=’Redirigiendo...’; this.form.submit()"/>
						</ul>
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
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script language="javascript">
				function SoloNumerico(e, obj)
				{
					var sKey = -1;
					var bResult = true;
					var bPunto = (obj.value.indexOf(".") != -1);
					var lCantChars = obj.value.length;
					if (window.event)
					{
						sKey = e.keyCode;
					}
					else if (e.which)
					{
						sKey = e.which;
					}
					if (sKey > 10)
					{
						if (((sKey < 48 || sKey > 57) && (sKey != 46 || bPunto)) || (!bPunto &&	lCantChars > 6 && sKey != 46))
						{
							bResult = false;
						}
					}
					return bResult;
				}
				function AplicoFormato(oText)
				{
					var aDec = oText.value.split('.');
					if(aDec.length > 1) 
					{
						if(aDec[1].length == 1) 
						{
							oText.value = aDec[0] + '.' + aDec[1].split('.')[0] + '0';
						}
						if(aDec[1].length == 0) 
						{
							oText.value = aDec[0] + '.00';
						}
						if(aDec[1].length >= 2) 
						{
							oText.value = aDec[0] + '.' + aDec[1].substr(0,2);
						}
					}
					else
					{
						oText.value = aDec + '.00';
					}
				}
			</script>
	</body>
</html>
