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
		$montos['NQN-RN'] = "entre $65 y $90";
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


				<form id="formulario" action="https://gateway.payulatam.com/ppp-web-gateway" method="post" target="_top">
					<div style="float:left;color: rgb(47,149,173); font-weight: bold;font-size:17px; width:70%;padding-top:10px;padding-left:15px;">
						<div style="width:40%;float:left;text-align:right;margin-right:10px;">Monto a Donar:</div>
						<input type="text" id="item_ammount_1" name="item_ammount_1" value="" onKeyPress="return SoloNumerico(event, this);" Onblur="AplicoFormato(this)"/>
						</br>
						</br>
						<div style="text-align:right;width:30%;float:left;margin-right:48px;">DNI:</div>
						<input type="text" id="buyer_document_number" name="buyer_document_number"/>
					</div>
					<input type="hidden" name="merchant" value="4083795" />
	        <input type="hidden" name="payment_method_available" value="ar_dm;ar_visa;ar_master;ar_amex;ar_cencosud;ar_tnaranja;ar_tshopping;ar_argencard;ar_cabal;ar_bapropago;ar_cobroexpress;ar_rapipago;ar_pagofacil" />
					<input type="hidden" id="item_name_1" name="item_name_1" value="<? echo $codigoFamilia; ?>" />
					<input type="hidden" name="item_quantity_1" value="1" />
					<input type="hidden" name="country_id" value="1" />
					<input type="hidden" name="seller_name" value="Techo" />
					<input type="hidden" name="header_image" value="https://argentina.dineromail.com/imagenes/LogosVendedores/1466897.gif"/></td></tr>
					<div style="float:left;">


						<input type='submit' border=0 name=submit id="boton-donar" value="Pagar" style="font-size: 33px;
	  font-weight: bold;
	  color: white;
	  /* border: 2px solid white; */
	  background-color: rgb(47,149,173);
	  padding: 10px 10px;
	  margin-top: 10px;
	  font-family: Din Light;"/>
					</div>
				</form>

        <div style="margin-top:10px;color:rgb(47,149,173);font-size:17px;text-align:left;">
          <br><br><br><br><p style="text-align:center;font-weight: bold;padding-bottom: 2ex;">Si quer&eacute;s participar y ten&eacute;s problemas para cubrir el pago (total o parcial), no lo dudes, solicitanos una BECA o PRORROGA enviando un mail a <?php echo $mail[$sede]; ?></p>
	       </div>
		</div>
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
				if (((sKey < 48 || sKey > 57) && (sKey != 46 || bPunto)) || (!bPunto &&
					lCantChars > 6 && sKey != 46))
				{
					bResult = false;
				}
			}
			return bResult;
		}
		function AplicoFormato(oText)
		{
			var aDec = oText.value.split('.');
			if(aDec.length > 1) {
				if(aDec[1].length == 1) {
					oText.value = aDec[0] + '.' + aDec[1].split('.')[0] + '0';
				}
				if(aDec[1].length == 0) {
					oText.value = aDec[0] + '.00';
				}
				if(aDec[1].length >= 2) {
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
