<?php include("_head2.inc.php") ?>  

<?php include("_header.inc.php")?>

<div class="container" id="questionario">


	<div class="row">
		<div class="col-md-12">{rq}</div>
	</div>

	<form method="post" 
	    data-toggle="validator"
		action="{base_url}upload/recebe" 
		method="post" enctype="multipart/form-data" 
		>

		<input type="hidden" id="doc" name="doc" value="{tb_tipo_cargo_id}"> 
		<input type="hidden" id="doc1" name="doc1" value="{id}">

		<div class="row fix">
			<h1>Upload de Video</h1>
			<p>Você deve preparar e enviar um vídeo de até dois minutos, respondendo pelo menos duas das seguintes questões:</p>
		<p>
		<ul>
			<li>- Por que você quer se lançar candidato nessa eleições pelo NOVO?</li>
			<li>- Qual é a sua estratégia para conquistar votos?</li>
			<li>- O que você faria se fosse eleito?</li>
		</ul>
		</p>
		<p>Por favor, disponibilize aqui seu vídeo através da opção abaixo:</p>
	
		<p>Seu arquivo precisa ser estar no formato MP4, OGG ou WEBM e ter no maximo 2 minutos de duração. </p>
		</div>
		<div class="row">
		
		
		
		</div>

		<div class="row fix">


 				<div class="form-group importancia">
						<label class="col-md-4 control-label" for="selectbasic">Escolha seu arquivo</label>
						<div class="col-md-4">	
		
						<input type="file" name="userfile" id="userfile" size="40" required /> <br /> <br /> 
						<input type="submit" value="upload" id="enviar" name="enviar" />
						<span id="lo" name="lo" style="display:none">Loading..</span>
</div>
</div>

		</div>

	</form>
</div>
<script>


$.fn.hasExtension = function(exts) {
    return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test($(this).val());
}


$("#userfile").change(function(){	

	arquivo = $( "#userfile").val().toLowerCase();

	if (!$('#userfile').hasExtension(['.mp4', '.MP4', '.mP4', '.Mp4', '.ogg', '.webm'])) {
		alert("Favor escolher um arquivo no formato mp4, ogg ou webm" );
		$('#userfile').val(null);
	}		
				 
});

$("#enviar").click(function(){	
	$("#enviar").val("Upload..");
	$("#enviar").hide();
	$("#lo").show();
});

</script>



<?php include("_footer.inc.php") ?>		
		
		
