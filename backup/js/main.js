function envia_cadastro_home(form) {


	if($("#nome").val() == "") {

		alert("Preencha seu nome!");

		return false;

	}


	var x = $("#email").val();	
	var atpos = x.indexOf("@");
	var dotpos = x.lastIndexOf(".");
	
	if(atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {

		alert("E-Mail Inválido!");

		return false;

	}
 if($("#profissao").val() == "") {

	//	alert("Preencha sua profissão!");

	//	return false;

	}

	if($("#telefone").val() == "") {

		alert("Preencha seu número de telefone!");

		return false;

	}

	if($("#endereco").val() == "") {

	//	alert("Preencha seu endereço!");

	//	return false;

	}

	if($("#numero").val() == "") {

		// alert("Preencha o número de sua residência!");

		// return false;

	}

	if($("#cep").val() == "") {

		alert("Preencha o cep de seu endereço!");

		return false;

	}

	if($("#cidade").val() == "") {

		// alert("Preencha sua cidade!");

		// return false;

	}

	if($("#estado").val() == "") {

		 alert("Preencha seu estado!");

		 return false;

	}

	form.submit();

}

function envia_cadastro_acompanhe(form) {
	
	if($("#nome").val() == "") {

		alert("Preencha seu nome!");

		return false;

	}

	if($("#nascimento").val() == "") {

		alert("Preencha a data de seu nascimento!");

		return false;

	}

	if($("#profissao").val() == "") {

		// alert("Preencha sua profissão!");

		// return false;

	}

	if($("#telefone").val() == "") {

		alert("Preencha seu número de telefone!");

		return false;

	}

	if($("#endereco").val() == "") {

		// alert("Preencha seu endereço!");

		// return false;

	}

	if($("#numero").val() == "") {

		// alert("Preencha o número de sua residência!");

		// return false;

	}

	if($("#cep").val() == "") {

		alert("Preencha o cep de seu endereço!");

		return false;

	}

	if($("#cidade").val() == "") {

		// alert("Preencha sua cidade!");

		// return false;

	}

	if($("#estado").val() == "") {

		alert("Preencha seu estado!");

		return false;

	}

	form.submit();

}

function envia_contato(form) {
	
	if($("#nome").val() == "") {

		alert("Preencha seu nome!");

		return false;

	}

	if($("#email").val() == "") {

		alert("Preencha seu e-mail!");

		return false;

	}

	if($("#mensagem").val() == "") {

		alert("Digite sua mensagem!");

		return false;

	}

	form.submit();
	
}

(function() {
    

}());