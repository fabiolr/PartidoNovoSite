<?php include("_head.inc.php") ?>  

<?php include("_header.inc.php") ?>

<div class="container" id="login">
    <form class="form-horizontal" action="{base_url}login/{go}" method="post">
        <div class="row fix">
            <div class="col-xs-12">
                <p>
                    Para fazer o login é necessario estar filiado ao partido caso não
                    esteja <a href="http://novo.org.br/filie" target="_blank" >filie-se</a> depois
                    retorne ao procedimento. O email deverá ser o mesmo usado em sua filiação.
                </p>
            </div>
        </div>
        
        
        <div class="row fix">
        
        
        
            <input type="hidden" value="{tb_tipo_cargo_id}" name="doc" id="doc" />
			<fieldset>
				<!-- Form Name -->
				<legend>
                    <h2>LOGIN</h2>
                </legend>
                
                		<div class="form-group">
					<label class="col-md-4 control-label" for="usuario">SOU FILIADO AO NOVO:</label>
					<div class="col-md-4">
						<input type="checkbox" id="escondido" name="escondido" >
					</div>
				</div>
                	
                	<div id="escondidopainel" >
                
				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="usuario">Email:</label>
					<div class="col-md-4">
						<input id="email" name="email" type="email" placeholder=""
							class="form-control input-md" value="" required readonly>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="usuario">CPF:</label>
					<div class="col-md-4">
						<input id="cpf" name="cpf" type="text" placeholder=""
							class="form-control input-md" value=""required readonly>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="usuario">Titulo De
						Eleitor:</label>
					<div class="col-md-4">
						<input id="titulo" name="titulo" type="text" placeholder=""
							class="form-control input-md" value="" required readonly>
					</div>
				</div>
                
				<!-- Button -->
				<div class="form-group">
					<label class="col-md-5 control-label" for="singlebutton"></label>
					<div class="col-md-4">
						<button id="singlebutton" name="singlebutton" style="display: none"
							class="btn btn-default enviar">Enviar</button>
					</div>
				</div>
				
			</div>	
				
            <?php if ($erro == 1) {?>			
                <div class="alert alert-warning" role="alert">
                    <strong>Erro!</strong> Utilize o e-mail, cpf e titulo de eleitor quando se filiou.
                </div>			
            <?php }?>				
				
        </fieldset>
        </div>
    </form>
</div>    
<?php include("_footer.inc.php") ?>
<script>
$("#cpf").mask("999.999.999-99");

$("#escondido").click(function(){	

	if ($(this).prop('checked')==false){ 		
		 $("#email").attr('readonly','readonly'); 
		 $("#cpf").attr('readonly','readonly');  
		 $("#titulo").attr('readonly','readonly');
		 $("#singlebutton").hide();  
    }else{
	   $("#email").removeAttr('readonly');
	   $("#cpf").removeAttr('readonly');
	   $("#titulo").removeAttr('readonly');
	   $("#singlebutton").show();
    }	
	   		 
});
</script>