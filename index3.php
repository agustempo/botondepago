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
  $descripcionOrden['Mix'] = 'MIXTA';
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
		<div style="float:left;width:50%;text-align:center;margin-top:125px;color:rgb(47,149,173);">
			<img style="  width: 85%;
  border: rgb(47,149,173) solid 3px;
  border-radius: 10px;" src="img/flyer.png" alt="Construcci&oacute;n"/>
		</div>

		<div style="float:left;width:40%;">
			<div style="  margin-top: 35px;
  color: rgb(47,149,173);
  font-weight: bold;font-size:17px;text-align:center;">

        Voluntario, Ahora necesitamos que confirmes tu asistencia a la
        <u>CONSTRUCCI&Oacute;N <?php echo $descripcionOrden[$orden]; ?> DE </u> de la
        Sede TECHO <?php echo $descripcionSede[$sede]; ?>, mediante el pago, <u>PRESTA ATENCI&Oacute;N!</u> Confirma cuanto antes! :)</br>

        &iquest;Qu&eacute; medios de pagos disponemos? Tenes 3 opciones:
			</div>
			<div style="  margin-top: 10px; color: rgb(47,149,173); font-weight: bold;font-size:17px;text-align:left;">
					<ol>
						<li>Asoci&aacute;ndote o asociando a un conocido en el siguiente LINK: <a href="http://www.techo.org.ar/socios/formulario">http://www.techo.org.ar/socios/formulario</a></li>
						<li>Abonando a trav&eacute;s de "dinero mail" entre $70 y $140. Llen&aacute; el monto a pagar en el casillero de abajo, clicke&aacute; en el bot&oacute;n y segu&iacute; los pasos. Podes pagar con:</li>
							<ul>
								<li>Tarjeta</li>
								<li>Efectivo</li>
							</ul>
						<li>Si quer&eacute;s participar y ten&eacute;s problemas para cubrir el pago (total o parcialmente), podes solicitar BECA o PRORROGA enviando un mail a <a href="mailto:problemasdepago.argentina@techo.org">problemasdepago.argentina@techo.org</a></li>
					</ol>
			</div>
			<div style="margin-top:10px;color:rgb(47,149,173);font-weight:bold;font-size:17px;text-align:left;">
					IMPORTANTE: No olvides ingresar tu DNI al pagar para que podamos validar el pago.
			</div>

				<form id="formulario" action="https://checkout.dineromail.com/CheckOut" method="post" target="_top">
					<div style="float:left; width:70%;padding-top:20px">
						<div style="width:30%;float:left;text-align:right;margin-right:10px;">Monto a pagar:</div>
						<input type="text" id="item_ammount_1" name="item_ammount_1" value="" onKeyPress="return SoloNumerico(event, this);" Onblur="AplicoFormato(this)"/>
						</br>
						</br>
						<div style="text-align:right;width:30%;float:left;margin-right:10px;">DNI:</div>
						<input type="text" id="buyer_document_number" name="buyer_document_number"/>
					</div>
					<input type="hidden" name="merchant" value="4083795" />
	<input type="hidden" name="payment_method_available" value="ar_dm;ar_visa;ar_master;ar_amex;ar_cencosud;ar_tnaranja;ar_tshopping;ar_argencard;ar_cabal;ar_bapropago;ar_cobroexpress;ar_rapipago;ar_pagofacil" />
					<input type="hidden" id="item_name_1" name="item_name_1" value="<? echo $codigoFamilia; ?>" />
					<input type="hidden" name="item_quantity_1" value="1" />
					<input type="hidden" name="country_id" value="1" />
					<input type="hidden" name="seller_name" value="Un Techo" />
					<input type="hidden" name="header_image" value="https://argentina.dineromail.com/imagenes/LogosVendedores/1466897.gif"/></td></tr>
					<div style="float:left;">
						<input type='submit' border=0 name=submit id="boton-donar" value="Pagar" style="font-size: 33px;
	  font-weight: bold;
	  color: white;
	  /* border: 2px solid white; */
	  background-color: rgb(47,149,173);
	  padding: 10px 10px;
	  margin-top: 20px;
	  font-family: Din Light;"/>
					</div>
				</form>


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
