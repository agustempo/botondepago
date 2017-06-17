function enviar()
{
  var referenceCode = document.getElementById("referenceCode").value.concat(Date.now());
  var amount = document.getElementById("item_ammount_1").value;
  if (document.getElementById('cant_cubiertos')){
    amount = document.getElementById('cant_cubiertos').value*amount;
  }
  var apiKey = "1Kxu0c6VkwsZThP8hMyzjOFD70~536715~";
  var value = apiKey.concat(referenceCode, "~", amount, "~ARS");
  var signature = md5(value);

  if (document.getElementById("buyerFullName")){
    if (document.getElementById("buyerFullName").value == ""){
      alert ("Ingresa tu Nombre y Apellido");
      document.getElementById("extra1").value =  document.getElementById("buyerFullName").value;
    }
  }
  if (document.getElementById("buyerEmail")){
    if (document.getElementById("buyerEmail").value == ""){
      alert ("Ingresa tu Email");
      document.getElementById("extra1").value =  document.getElementById("buyerEmail").value;
    }
  }
  if (document.getElementById("payerDocument")){
    if (document.getElementById("payerDocument").value == ""){
      alert ("Ingrese su DNI");
      document.getElementById("extra1").value =  document.getElementById("payerDocument").value;
    }
  }
  if (document.getElementById("item_ammount_1")){
    if (document.getElementById("item_ammount_1").value == ""){
      alert ("Ingresa el Monto");
      document.getElementById("extra1").value =  document.getElementById("item_ammount_1").value;
    }
  }
  return;
  document.getElementById("amount").value = amount;
  document.getElementById("signature").value = signature;
  document.getElementById("referenceCode").value = referenceCode;
  document.getElementById("formulario").submit();
}