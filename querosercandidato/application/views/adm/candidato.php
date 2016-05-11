

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Candidato</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
	crossorigin="anonymous">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
	integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
	crossorigin="anonymous"></script>

</head>
<body>
	<div class="container">
		<div class="row">


			<div class="col-md-6">

				<h2>Candidato ( {tipo_cargo} )</h2>
				<p>
					<b>Status do Cadastro :</b> {status_cadastro}
				</p>
				<p>
					{nome} - <a href="mailto:{email}">{email}</a> - {data_criacao}
				</p>
				<p>
					<b>CPF:</b> {cpf}<br> <b>Data Nascimento:</b> {data_nascimento}<br>

					<b>Telefone:</b> {telefone_numero}<br> <b>CEP:</b> {cep}<br> <b>Escolaridade:</b>
					{escolaridade}<br> <b>Profissão:</b> {profissao}<br> <b>Ocupação:</b>
					{ocupacao}<br> <b>Titulo Eleitoral:</b>{TituloEleitoral} Seção
					{Secao} Zona {Zona}<br> <b>Cidade Titulo:</b>
					{cidade_titulo_eleitor}<br> <b>Endereço :</b> {Endereco} , {Numero}
					{Bairro} {Cidade} {Estado}
				
				
				<h3>Pontuação</h3>
				<b>Bloco A:</b> {blocoa} <br /> <b>Bloco B:</b> {blocob} <br /> <b>Bloco
					C:</b> {blococ} <br /> <b>Total : </b> {total_blocos} <br />


			</div>
			<div class="col-md-6">
				<video width="400" controls>
					<source src="{base_url}upload/{video_url}" type="video/mp4">
					<source src="{base_url}upload/{video_url}" type="video/ogg">
					Your browser does not support HTML5 video.
				</video>
				<hr>

				<b>Filiado a algum partido :</b> {filiado_partido}
				{filiado_partido_quais}<br> <b> Cargos e em que per&iacute;odo(s) :</b>{exerceu_mandato}
				{exerceu_mandato_cargos_periodos} :<br> <b>Foi candidato :</b>{foi_candidato}
				{foi_candidato_cargos_partidos} <br> <b>Voluntario NOVO :</b>{vontuntario}<br>
				<b>Cidade que pretende concorrer :</b> {cidade_concorrer}<b</p>
			
			</div>
		</div>

		<div class="row " style="margin-top: 10px">
			<div class="col-md-6">	
			   <div class="col-md-6"><button class="btn btn-success " name="aprovar" id="aprovar" >Aprovar</button></div>
			   <div class="col-md-6">			   
			   <a href="{base_url}admin/start/changeon/{code}" class="btn btn-success " style="display:none" 
			   id="confirma_aprovar" name="confirma_aprovar">Confirma Aprovar</a>
			   
			   </div>		
								
			</div>

			<div class="col-md-6">
			<div class="col-md-6"><button class="btn btn-danger " name="reprovar" id="reprovar" >Reprovar</button></div>
			<div class="col-md-6">
			
			<a href="{base_url}admin/start/changeoff/{code}" class="btn btn-danger "style="display:none" id="confirma_reprovar" name="confirma_reprovar" >Confirma Reprovar</a>
			
								
			</div>
		</div>

	</div>

</body>
<script type="text/javascript">

$("#aprovar").click(function(){	
				$("#confirma_reprovar").hide();
				$("#confirma_aprovar").show();
				
	     			 
});

$("#reprovar").click(function(){
			$("#confirma_aprovar").hide();
			$("#confirma_reprovar").show()	     			 
});

</script>
</html>