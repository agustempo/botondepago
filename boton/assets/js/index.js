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

function enviar()
{
  var referenceCode = document.getElementById("referenceCode").value.concat(Date.now());
  var amount = document.getElementById("item_ammount_1").value;
  var apiKey = "1Kxu0c6VkwsZThP8hMyzjOFD70~536715~";
  var value = apiKey.concat(referenceCode, "~", amount, "~ARS");
  var signature = md5(value);


  document.getElementById("amount").value = amount;
  document.getElementById("signature").value = signature;
  document.getElementById("referenceCode").value = referenceCode;
  document.getElementById("formulario").submit();
}