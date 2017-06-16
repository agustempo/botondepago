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