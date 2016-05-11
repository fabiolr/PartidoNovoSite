<?php include("_head2.inc.php") ?>  

<?php include("_header.inc.php")?>

<script>
/* Script written by Adam Khoury @ DevelopPHP.com */
/* Video Tutorial: http://www.youtube.com/watch?v=EraNFJiY0Eg */
function _(el){
	return document.getElementById(el);
}
function uploadFile(){
	
	var file = _("userfile").files[0];
	// alert(file.name+" | "+file.size+" | "+file.type);

	if (  file.size <= 500000 ) {
		alert( "O arquivo para upload tem o limite de 500 megabytes")
	}else{

    document.getElementById("bt_upload").style.display = 'none';
		
	var formdata = new FormData();
	formdata.append("userfile", file);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.addEventListener("load", completeHandler, false);
	ajax.addEventListener("error", errorHandler, false);
	ajax.addEventListener("abort", abortHandler, false);
	ajax.open("POST", "{base_url}Upload/recebe2/{id}");
	ajax.send(formdata);
	}
}
function progressHandler(event){
	//_("loaded_n_total").innerHTML = " "+event.loaded+" bytes of "+event.total;
	var percent = (event.loaded / event.total) * 100;
	_("progressBar").value = Math.round(percent);
	_("status").innerHTML = Math.round(percent)+"%";
}
function completeHandler(event){
	//alert("Arquivo Carregado") 
	_("status").innerHTML = event.target.responseText;
	//_("progressBar").value = 0;
	window.location = "{base_url}finalprocesso";
}
function errorHandler(event){
	_("status").innerHTML = "Upload Failed";
}
function abortHandler(event){
	_("status").innerHTML = "Upload Aborted";
}
</script>
</head>
 <div class="text-center" style="font-size: 15px; font-weight: bold;"> <span style="color:#25BCB1">FASES SALVAS:</span> 
 <span style="color:#25BCB1;">Fase 1: Cadastro</span>  |    
 <span style="color:#25BCB1;">Fase 2: Pagamento</span>  |    
 <span style="color:#25BCB1;"> Fase 3:  Avaliação</span>  |     
 <span style="color:rgb(212, 201, 201);">Fase 4:  Vídeo </div> 
<div class="container" id="questionario">


	<div class="row">
		<div class="col-md-12">{rq}</div>
	</div>


		<div class="row fix">
			<h1>Upload de Video</h1>
			<p>Você deve preparar e enviar um vídeo de até dois minutos, respondendo pelo menos duas das seguintes questões:<p>
		<ul>
			<li>- Por que você quer se lançar candidato nestas eleições pelo NOVO?</li>
			<li>- Qual é a sua estratégia para conquistar votos?</li>
			<li>- O que você faria se fosse eleito?</li>
		</ul>
		</p>
		<p>Por favor, disponibilize aqui seu vídeo através da opção abaixo:</p>
	
		<p>Seu arquivo precisa ser estar no formato MP4, OGG ou WEBM e ter no maximo 2 minutos de duração não ultrapassando 500 MB. </p>
		</div>
		<div class="row">
		
		
		
		</div>

		<div class="row fix">
 				<div class="form-group importancia">
						<label class="col-md-3 control-label" for="selectbasic">Escolha seu arquivo</label>
						<div class="col-md-9">	
						
						<div class="form-group">
						
						
						<form id="upload_form" enctype="multipart/form-data" method="post"  data-toggle="validator">
							  <input type="hidden" id="doc" name="doc" value="{tb_tipo_cargo_id}"> 
							  <input type="hidden" id="doc1" name="doc1" value="{id}">
							  <input type="file" name="userfile" id="userfile" required><br>
							  <input type="button" value="Upload File" id="bt_upload" name="bt_upload" onclick="uploadFile()">
							  <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
							  <h3 id="status"></h3>
							  <p id="loaded_n_total"></p>
			</form>
			
			</div>
						
</div>
</div>

		</div>


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

</script>
			
<?php include("_footer.inc.php") ?>		