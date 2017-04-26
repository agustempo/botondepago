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
	$descripcionSede['NQN-RN'] = 'Neuquén - Rio Negro';
	$descripcionSede['COCHA'] = 'Corrientes - Chaco';
	$descripcionSede['TUC'] = 'Tucumán';
	$descripcionSede['CBA'] = 'Córdoba';
	$descripcionSede['SAL'] = 'Salta';
	$descripcionSede['ROS'] = 'Rosario';

	$descripcionOrden['Mix'] = 'MIXTA';
	$descripcionOrden['Jov'] = 'JÓVENES';
	$descripcionOrden['Mas'] = 'MASIVA';
	$descripcionOrden['tdi'] = 'INVIERNO';
	$descripcionOrden['tdv'] = 'VERANO';

	if ($orden == 'Mix' || $orden=='Jov' || $orden=='Mas')
	{
		$montos['BA'] = "entre $120 y $200";
		$montos['MIS-OBE'] = "entre $80 y $100";
		$montos['MIS-POS'] = "entre $80 y $100";
		$montos['NQN-RN'] = "entre $65 y $100";
		$montos['COCHA'] = "entre $100 y $140";
		$montos['TUC'] = "entre $50 y $80";
		$montos['CBA'] = "$100";
		$montos['SAL'] = "entre $100 a $120";
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
	else if ($orden == 'tdi' || $orden == 'tdv')
	{
		$montos['BA'] = "entre $1200 y $1700";
		$montos['MIS-OBE'] = "entre $1500 y $2000";
		$montos['MIS-POS'] = "entre $1500 y $2000";
		$montos['NQN-RN'] = "entre $1200 y $1700";
		$montos['COCHA'] = "entre $1500 y $2000";
		$montos['TUC'] = "entre $1200 y $1700";
		$montos['CBA'] = "entre $1000 y $1500";
		$montos['SAL'] = "entre $1500 y $2000";
		$montos['ROS'] = "entre $1200 y $1700";
		$montos['LOC'] = "entre $400 y $600";
		
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
					<h1>¡Último Paso!</h1>
					<h2><?php if ($orden == 'tdi' || $orden == 'tdv')
					{
						echo "Confirma tu participación en los<br/> TRABAJOS de $descripcionOrden[$orden] de TECHO";
					} 
						else 
						{
							echo "Confirma tu participación en la construcción<br/> $descripcionOrden[$orden] de TECHO en $descripcionSede[$sede]";
						}   
					?></h2>
					<h3><?php if ($orden == 'tdi' || $orden == 'tdv')
					{
						echo "¿CÓMO? Tenés 2 opciones:";
					} 
						else
						{
							echo "¿CÓMO? Tenés 3 opciones:";
						}
					?></h3>
					<ul class="actions">
						<li><a href="#one" class="button icon fa-chevron-down scrolly">Ver Opciones</a></li>
					</ul>
				</div>
				<div class="image phone"><div class="inner"><img src="images/foto1.jpg" alt=""/></div></div>
			</header>

		<!-- One -->
			<section id="one" class="wrapper style2 special">
				<header class="major">
					<?php if ($orden == 'tdi' || $orden == 'tdv')
					{								
						echo "<ul>Abonando según tu sede:<br/>
							- <b>$1000 a $1500</b>: Córdoba o Río Cuarto.<br/>
							- <b>$1200 a $1700</b>: Buenos Aires, Rosario, Neuquén - Río Negro o Tucumán.<br/>
							- <b>$1500 a $2000</b>: Salta, Corrientes - Chaco o Misiones.<br/>
							Llená el monto a pagar en el casillero de abajo, clickeá en el botón y seguí los pasos.<br/> Podes pagar en Efectivo o con Tarjeta y el monto lo usaremos para tu seguro médico, comida y transporte
							(por las dudas, acá tenes un <b><a href='https://sites.google.com/a/techo.org/veni-a-construir/techo-instructivo-pago' target='_blank'>Instructivo</a></b>).</ul>";
					} 
					else
					{
						echo "<ul>Asociándote o asociando a un conocido en el siguiente <b><a href='http://www.techo.org.ar/socios/formulario'>LINK</a></b>.</ul>
						<ul>Abonando a través de 'PayU' <b>$montos[$sede]</b>.
						Llená el monto a pagar en el casillero de abajo, clickeá en el botón y seguí los pasos.<br/> Podes pagar en Efectivo o con Tarjeta y el monto lo usaremos para tu seguro médico, comida y transporte
						(por las dudas, acá tenes un <b><a href='https://sites.google.com/a/techo.org/veni-a-construir/techo-instructivo-pago' target='_blank'>Instructivo</a></b>).</ul>";
					}?>
					<ul>Si querés participar y tenés problemas para cubrir el pago (total o parcial), no lo dudes, solicítanos una BECA o PRORROGA enviando un mail a <b><?php echo $mail[$sede] ?></b></ul>
				</header>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style3 special">
				<header class="major">
					<h2><?php if ($orden == 'tdi' || $orden == 'tdv')
					{
						echo "Abonar los Trabajos";
					} 
						else
						{
							echo "Abonar la construcción";
						}
					?></h2>
					<form id="formulario" action="https://checkout.payulatam.com/ppp-web-gateway-payu" method="post" target="_top">							
						<ul><h4>Monto a Donar:</h4>
						<input type="text" id="item_ammount_1" name="item_ammount_1" value="" onKeyPress="return SoloNumerico(event, this);" Onblur="AplicoFormato(this)" required/>						
						<br/>
						<h4>Nombre y Apellido:</h4>
						<input type="text" id="buyerFullName" name="buyerFullName" placeholder="Completo" required/>
						<br/>
						<h4>DNI / Pasaporte:</h4>
						<input type="text" id="buyer_document_number" name="buyer_document_number" placeholder="Como figura en Pilote" required/>
						<br/>
						<h4>Email:</h4>
						<input type="text" id="buyerEmail" name="buyerEmail" placeholder="Como figura en Pilote" required/>
						<br/>		
						<input type="hidden" name="merchant" value="4083795"/>
						<input type="hidden" name="payment_method_available" value="all"/>
						<input type="hidden" id="item_name_1" name="item_name_1" value="<? echo $codigoCC; ?>"/>
						<input type="hidden" name="item_quantity_1" value="1"/>
						<input type="hidden" name="country_id" value="1"/>
						<input type="hidden" name="seller_name" value="Un Techo"/>
						<input type='submit' name=submit id="boton-donar" class="button special" value="Pagar" onclick="this.disabled=true; this.value=’Redirigiendo...’; this.form.submit()"/>
					</ul></form>
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
	</body>
</html>
