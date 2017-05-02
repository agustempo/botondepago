<?php

	$codigoDM = 4083795;
	$show = true;
  $tipo = $_GET['tipo'];
  $numero =$_GET['numero'];
  $sede = $_GET['sede'];
  $orden = $_GET['orden'];
  $mes = $_GET['mes'];
  $anio = $_GET['anio'];
  $codigoFamilia = $tipo.' '.$numero.' '.$sede.' '.$orden.' '.$mes.' '.$anio;

  	$descripcionSede['BA'] = 'Buenos Aires';
	$descripcionSede['MIS-OBE'] = 'Obera';
	$descripcionSede['MIS-POS'] = 'Posadas';
	$descripcionSede['NQN-RN'] = 'Neuquen - Rio Negro';
	$descripcionSede['COCHA'] = 'Corrientes - Chaco';
	$descripcionSede['TUC'] = 'Tucumán';
	$descripcionSede['CBA'] = 'Cordoba';
	$descripcionSede['SAL'] = 'Salta';
	$descripcionSede['ROS'] = 'Rosario';

  $descripcionOrden['Mix'] = 'MIXTA';
	$descripcionOrden['Jov'] = 'Jovenes';
	$descripcionOrden['tdi'] = 'Invierno';
	$descripcionOrden['tdv'] = 'Verano';

	if ($orden == 'Mix' || $orden=='Jov'){
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
  } else if ($orden == 'tdi' || $orden == 'tdv'){
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
		<title>Bot&oacute;n de pago</title>

		<style>
			@font-face {

			}
		</style>
		<link rel="icon" type="image/png" href="favicon.ico">
	</head>
	<body style="background-color:white;font-family:Din Light;">

		<?php	if ($orden == 'tdi' || $orden == 'tdv'){

			echo "
			<div style='float:left;width:45%;text-align:center;margin-top:20px;color:rgb(47,149,173);'>
			<img style='width: 85%;  border: rgb(47,149,173) solid 3px;  border-radius: 30px;' src='flyerTDV.jpg' alt='Construcci&oacute;n'/>";
		} else {
			echo "<div style='float:left;width:50%;text-align:center;margin-top:120px;color:rgb(47,149,173);'>
			<img style='width: 85%;  border: rgb(47,149,173) solid 3px;  border-radius: 10px;' src='flyer.png' alt='Construcci&oacute;n'/>";
		}
		?>

		</div>
		<div style="float:left;width:50%;">
			<div style="  margin-top: 35px;
  color: rgb(47,149,173);
  font-weight: bold;font-size:17px;text-align:center;">

      <H1>  ¡Último Paso! </H1>


		<?php	if ($orden == 'tdi' || $orden == 'tdv'){
			echo "<H2>Confirmá tu participación en los <br> Trabajos de ";
			echo $descripcionOrden[$orden];
			echo " de	</u>TECHO <br>";
		} else {
			echo "<H2>Confirmá tu participación en la CONSTRUCCI&Oacute;N ";
		  echo $descripcionOrden[$orden];
			echo " de		    </u>TECHO en <br>";
			echo $descripcionSede[$sede];

		}   ?>
			</H2>
        <H3>  ¿CÓMO? Tenés 2 opciones:</H3>
			</div>
			<div style="  margin-top: 10px; color: rgb(47,149,173);font-size:17px;text-align:left;">
					<ul>
					<?php	if ($orden == 'tdi' || $orden == 'tdv'){




			echo "
			<li style='padding-bottom: 2ex; '>Abonando segun tu sede: <br>
				- $1000 a $1500: Córdoba o Río Cuarto				<br>
				- $1200 a $1700: Buenos Aires, Rosario, Neuquén - Río Negro o Tucumán<br>
				- $1500 a $2000: Salta, Corrientes - Chaco o Misiones   <br>";
		} else {
			echo "<li style='padding-bottom: 2ex;'>Asociándote o asociando a un conocido en el siguiente <a href='http://www.techo.org.ar/socios/formulario'>LINK</a> </li>
			<li style='padding-bottom: 2ex;'>Abonando ";
			echo $montos[$sede];
		}?>

		a trav&eacute;s de "dinero mail",
							la usaremos para tu seguro médico, comida y transportes.
              (por las dudas, acá tenes un
              <a href="https://sites.google.com/a/techo.org/veni-a-construir/techo---instructivo-pago" target="_blank">Instructivo</a>)
          </ul>
			</div>


					<div style="float:left;color: rgb(47,149,173); font-weight: bold;font-size:17px; width:70%;padding-top:10px;padding-left:15px;">
						<div style="width:40%;float:left;text-align:right;margin-right:10px;">Monto a Donar:</div>
						<input type="text" id="item_ammount_1" name="item_ammount_1" value="" onKeyPress="return SoloNumerico(event, this);" Onblur="AplicoFormato(this)"/>
						</br>
						</br>
						<div style="text-align:right;width:30%;float:left;margin-right:48px;">DNI:</div>
						<input type="text" id="payerDocument" name="payerDocument"/>
					</div>

					<form id="formulario" action="https://gateway.payulatam.com/ppp-web-gateway" method="post">
						<input type="hidden" name="amount"  id="amount" value="">
						<input type="hidden" id="merchantId" name="merchantId" value="536715">
						<input type="hidden" id="referenceCode" name="referenceCode" value="CC-Voluntario">
						<input type="hidden" id="accountId" name="accountId" value="538721">
						<input type="hidden" id="description" name="description" value="<?php echo $codigoFamilia; ?>">
						<input type="hidden" id="tax" name="tax" value="0">
						<input type="hidden" id="taxReturnBase" name="taxReturnBase" value="0">
						<input type="hidden" id="signature" name="signature" value="">
						<input type="hidden" id="currency" name="currency" value="ARS">
					</form>

					<div style="float:right;">
						<button type="button" onclick="enviar()" id="boton-donar" value="Pagar" style="    font-size: 33px;
    font-weight: bold;
    color: white;
    background-color: rgb(47,149,173);
    margin-left: 30px;
    margin-top: 15px;
    font-family: Din Light;
    text-align: center;
    margin-right: 10px;
    width: 104px;
">
Pagar </buttom>
					</div>

        <div style="margin-top:10px;color:rgb(47,149,173);font-size:17px;text-align:left;">
          <br><br><br><br><br><p style="text-align:center;font-weight: bold;padding-bottom: 2ex;">Si quer&eacute;s participar y ten&eacute;s problemas para cubrir el pago (total o parcial), no lo dudes, solicitanos una BECA o PRORROGA enviando un mail a <?php echo $mail[$sede]; ?></p>
	       </div>
		</div>

		<script src="md5.js"></script>
		<script src="index.js"></script>


	</body>
</html>
