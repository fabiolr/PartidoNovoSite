<?php include("_head2.inc.php") ?>  

<?php include("_header.inc.php")?>
 <div class="text-center" style="font-size: 15px; font-weight: bold;"> <span style="color:#25BCB1">FASES SALVAS:</span> 
 <span style="color:#25BCB1;">Fase 1: Cadastro</span>  |    
 <span style="color:#25BCB1;">Fase 2: Pagamento</span>  |    
 <span style="color:rgb(212, 201, 201);"> Fase 3: Avaliação</span>  |    
 <span style="color:rgb(212, 201, 201);">Fase 4: Vídeo </div> 
<div class="container" id="questionario">

	<form method="post" data-toggle="validator"	action="{base_url}questionario/recebe" method="post" class="form-horizontal">

		<input type="hidden" id="doc"	name="doc" 	value="{tb_tipo_cargo_id}"> 
		<input type="hidden" id="doc1"	name="doc1"	value="{id}">

		<div class="row fix">
			<h1 style="line-height:35px;padding-botton:20px" >Avaliação de Alinhamento e Conhecimento do Estatuto</h1>
		</div>

		<div class="row fix" style="padding-top: 35px">
			<h2>1) Assinale sua opinião sobre cada um dos assuntos abaixo:</h2>
			<table class="table">
				<thead class="alternativa">
					<tr>
						<th></th>
						<th>Concordo</th>
						<th>Discordo</th>
						<th class="maior">
							<div>Não tenho opinião formada /</div>
							<div>Não é relevante</div>
						</th>
					</tr>
				</thead>

				<tbody>
					{bloco_um}					
					<tr>
						<td>{questao} <div class="help-block with-errors"></div> </td>
						<td class="concordo ">    <input name="blocoA_{id}"  type="radio" value="{valor_1}" required /></td>
						<td class="discordo ">    <input name="blocoA_{id}"  type="radio" value="{valor_2}" required /></td>
						<td class="naoRelevante"> <input name="blocoA_{id}"  type="radio" value="{valor_3}" required /></td> 
					</tr>				
					{/bloco_um} 
				</tbody> 
			</table>
		</div>

		<div class="row fix" style="padding-top: 35px">
			<h2>2) Coloque em ordem de importância os conceitos abaixo, sendo 1 o mais importante e 5 o menos importante: Estado, Igualdade, Indivíduo, Leis, Liberdade</h2>
			<p>
				
			</p>
			<div class="row">
				<div class="col-md-4">
                <?php for ($i = 1; $i <= 5; $i++) { ?>
                    <div class="form-group importancia">
						<label class="col-md-4 control-label" for="selectbasic"><?php echo $i ?>º</label>
						<div class="col-md-4">
							<select id="resp<?php echo $i ?>" name="resp<?php echo $i ?>"
								class="form-control">
								<option value="-1">Escolha</option>
								<option value="Estado">Estado</option>
								<option value="Igualdade">Igualdade</option>
								<option value="Indivíduo">Indivíduo</option>
								<option value="Leis">Leis</option>
								<option value="Liberdade">Liberdade</option>
							</select>
						</div>
					</div>
                <?php } ?>		
                </div>
			</div>
		</div>

		<div class="row fix" style="padding-top: 35px">
			<h2>3) De acordo com o estatuto do NOVO, responda:</h2>
			{bloco_tres}
			<div class="row">
				<div class="col-md-12">
					<p>
						<h3>{questao}</h3>
					</p>
					<ul class="legenda">
						<li><input name="blocoC_{id}" type="radio" value="{valor_1}" required /><span>{legenda_1}</span></li>
						<li><input name="blocoC_{id}" type="radio" value="{valor_2}" required /><span>{legenda_2}</span></li>
						<li><input name="blocoC_{id}" type="radio" value="{valor_3}" required /><span>{legenda_3}</span></li>
						<li><input name="blocoC_{id}" type="radio" value="{valor_4}" required /><span>{legenda_4}</span></li>
					</ul>
				</div>
			</div>
			{/bloco_tres}
		</div>

		<div class="row fix">
			<div class="form-group enviarQuest">
				<div>
				<a href="javascript:void(0)" class="btn btn-primary enviar" id="btenviar" name="btenviar" >Enviar</a>				
				<div style="padding-top:10px;display:none" id="painel" name="painel">
				<p>Após enviar as respostas não será mais possível alterá-las. Confirme para seguir adiante.</p>
				
					<button class="btn btn-primary enviar" id="submit" name="submit" type="submit">Confirma</button>
					
				</div>
			</div>
		</div>
		
		 
		
		
	</form>
</div>


<script>


$("#btenviar").click(function(){	
	

	erro = 0;
	
	for (o = 1; o < 6; o++) { 
		console.log (o+"-------------------------------------------------------------");
		for (i = 1; i < 6; i++) { 
				
			if ( o != i ) {
				if ( $("#resp"+i).val() == $("#resp"+o).val() ){ 				
					erro = 1 ;

					console.log ("#resp"+i+ "    " +   $("#resp"+i).val() + "    " +"#resp"+o+"  "+  $("#resp"+o).val()      );
				}
				
					
			}	
		}
		
	}
	
	if ( erro == 1) {
		alert("Cada conceito pode aparecer uma única vez. Sem repetições");
		return false ;
	}else{
		$("#painel").show();
	}				 
});

$("#submit").click(function(){	
	
	erro = 0;
	
	for (o = 1; o < 6; o++) { 
		console.log (o+"-------------------------------------------------------------");
		for (i = 1; i < 6; i++) { 
				
			if ( o != i ) {
				if ( $("#resp"+i).val() == $("#resp"+o).val() ){ 				
					erro = 1 ;

					console.log ("#resp"+i+ "    " +   $("#resp"+i).val() + "    " +"#resp"+o+"  "+  $("#resp"+o).val()      );
				}					
			}	
		}		
	}
	
	if ( erro == 1) {
		alert("Cada conceito pode aparecer uma única vez. Sem repetições");
		return false ;
	}	 
	
});

</script>

<?php include("_footer.inc.php") ?>