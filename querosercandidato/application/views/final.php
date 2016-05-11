<?php include("_head2.inc.php") ?>  

<?php include("_header.inc.php")?>
 <div class="text-center" style="font-size: 15px; font-weight: bold;"> <span style="color:#25BCB1">FASES SALVAS:</span> 
 <span style="color:#25BCB1;">Fase 1: Cadastro</span>  |    
 <span style="color:#25BCB1;">Fase 2: Pagamento</span>  |    
 <span style="color:#25BCB1;"> Fase 3: Avaliação</span>  |    
 <span style="color:#25BCB1;">Fase 4: Vídeo </div> 

<div class="container" id="questionario">


	<div class="row">
		<div class="col-md-12"> </div>
	</div>

	<form method="post" data-toggle="validator"
		action="{base_url}upload/recebe" method="post" enctype="multipart/form-data" >

		<input type="hidden" id="doc" name="doc" value="{tb_tipo_cargo_id}"> 
		<input type="hidden" id="doc1" name="doc1" value="{id}">

		<div class="row fix">
			<h1>{msg}</h1>
			<p>
			Agradecemos a sua participação na primeira etapa do processo de seleção de futuros pré-candidatos do NOVO. Lembramos que o resultado dessa fase será enviado por e-mail até o dia 08 de abril de 2016.
			</p>
			</div>

	</form>
</div>

<?php include("_footer.inc.php") ?>		
		
		

