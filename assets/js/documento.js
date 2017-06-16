function valida(e)
			{
				tecla = (document.all) ? e.keyCode : e.which;
				if (tecla==8)
				{
					return true;
				}
				patron =/[0-9a-zA-Z]/;
				tecla_final = String.fromCharCode(tecla);
				return patron.test(tecla_final);
			}