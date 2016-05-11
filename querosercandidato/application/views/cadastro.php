<?php include("_head.inc.php") ?>  

<?php include("_header.inc.php") ?>

 <div class="text-center" style="font-size: 15px; font-weight: bold;"> <span style="color:#25BCB1">FASES SALVAS:</span> 
 <span style="color:rgb(212, 201, 201);">Fase 1: Cadastro</span>  |    
 <span style="color:rgb(212, 201, 201);">Fase 2: Pagamento</span>  |    
 <span style="color:rgb(212, 201, 201);"> Fase 3: Avaliação</span>  |    
 <span style="color:rgb(212, 201, 201);">Fase 4: Vídeo </div>     

<div class="container" id="cadastro">
    <div class="bootstrap-iso">
        <div class="container-fluid">
        
        
            <h1>Cadastro</h1>
            <form method="post" data-toggle="validator" action="{base_url}cadastro/recebe" method="post" id="form1" name="form1">
                
                <input type="hidden" id="doc" name="doc" value="{FiliadoId}" >
                <input type="hidden" id="doc2" name="doc2" value="{tb_tipo_cargo}" >
            <div class="row fix">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    
                    <div class="form-group ">
                        <label class="control-label requiredField" for="nome">
                            Nome <span class="asteriskField">*</span>
                        </label>
                        <input class="form-control" id="nome" name="nome" type="text"  value="{Nome}"  readonly/>
                    </div>
     
                     <div class="form-group ">
                          <label class="control-label " for="data_nascimento">
                            Data de Nascimento <span class="asteriskField">*</span>
                          </label>
                        <input class="form-control" id="data_nascimento" name="data_nascimento" type="text" value="{DataNascimento}" readonly="readonly"/>
                     </div>    
     
                    <div class="form-group ">
                          <label class="control-label requiredField" for="cpf">
                            CPF <span class="asteriskField">*</span>
                          </label>
                          <input class="form-control" id="cpf" name="cpf" type="text" value="{CPF}" readonly="readonly"/>
                     </div>
                     
                     <div class="form-group ">
                          <label class="control-label requiredField" for="cpf">
                            Titulo de Eleitor <span class="asteriskField">*</span>
                          </label>
                          <input class="form-control" id="titulo" name="titul" type="text" value="{TituloEleitoral}" readonly="readonly"/>
                     </div>
     
                     <div class="form-group ">
                          <label class="control-label requiredField" for="telefone">
                           Telefone<span class="asteriskField">*</span>
                          </label>
                          <input class="form-control" id="telefone_numero" name="telefone_numero" type="text" value="{Celular}" />
                     </div>
     
                     <div class="form-group ">
                          <label class="control-label requiredField" for="email">
                           Email<span class="asteriskField">*</span>
                          </label>
                          <input class="form-control" id="email" name="email" type="email" value="{Email}" readonly="readonly" />     
                     </div>
                </div>
       
                <div class="col-md-6 col-sm-6 col-xs-12">
     
                     <div class="form-group ">
                          <label class="control-label requiredField" for="cidade_titulo_de_eleitor">
                           Cidade do t&iacute;tulo de eleitor
                           <span class="asteriskField">*</span>
                          </label>
                          
                          <select class="select form-control" id="cidade_concorrer" name="cidade_concorrer">
                       <option value="0">
                        Selecione a cidade do titulo de eleitor
                       </option>
                       
                       <option value="Belo Horizonte">
                        Belo Horizonte
                       </option>
                       <option value="Curitiba">
                        Curitiba
                       </option>
                       <option value="Porto Alegre">
                        Porto Alegre
                       </option>
                       <option value="Rio de Janeiro">
                        Rio de Janeiro
                       </option>
                       <option value="S&atilde;o Paulo">
                        S&atilde;o Paulo
                       </option>
                         <option value="-1">Outras Cidades</option>
                      </select>
                          
                          <input class="form-control" id="cidade_titulo_eleitor" name="cidade_titulo_eleitor" type="hidden" />
                     </div>
     
                     <div class="form-group " style="display:none" >
                          <label class="control-label requiredField" for="cep">
                           CEP<span class="asteriskField">*</span>
                          </label>
                          <input class="form-control" id="cep" name="cep" type="text" required  value="{Cep}"  readonly="readonly"/>
                          <div class="help-block with-errors"></div>
                     </div>
     
                     <div class="form-group ">
                          <label class="control-label requiredField" for="escolaridade">
                           Escolaridade<span class="asteriskField">*</span>
                          </label>
                          <input class="form-control" id="escolaridade" name="escolaridade" type="text" value="{Escolaridade}" />
                     </div>

                     <div class="form-group ">
                          <label class="control-label requiredField" for="profissao">
                           Profiss&atilde;o<span class="asteriskField">*</span>
                          </label>
                          <input class="form-control" id="profissao" name="profissao" type="text" value="{Profissao}" />
                     </div>

                     <div class="form-group ">
                          <label class="control-label requiredField" for="text6">
                           Ocupa&ccedil;&atilde;o atual<span class="asteriskField">*</span>
                          </label>
                          <input class="form-control" id="ocupacao" name="ocupacao" type="text" required=""/>
                     </div>
                     
                      <div class="form-group ">
                      <label class="control-label requiredField" for="select" required>
                       Cidade que pretende concorrer:                      
                      </label>
                      <b><span id="cid" ></span></b>
                     </div>
                     
                </div>
            </div>
            <div class="row fix">
                <div class="linha"></div>
                <div class="col-md-6 col-sm-6 col-xs-12">
     
                 <div class="form-group" id="div_radio2">
                  <label class="control-label requiredField" for="radio2">
                   J&aacute; foi filiado a algum partido ?
                   <span class="asteriskField">*</span>
                  </label>
                  <div class="">
                   <label class="radio-inline">
                    <input name="filiado_partido" type="radio" value="1" required/>
                    Sim
                   </label>
                   <label class="radio-inline">
                    <input name="filiado_partido" type="radio" value="0" required/>
                    N&atilde;o
                   </label>
                  </div>
                 </div>
     
                 <div class="form-group" style="display:none" id="filiado_partido_quais_form"  >
                  <label class="control-label requiredField" for="textarea">
                   Qual(is) partido(s) ?<span class="asteriskField">*</span>
                  </label>
                  <textarea class="form-control" cols="40" id="filiado_partido_quais" name="filiado_partido_quais" rows="5"></textarea>
                 </div>
     
                 <div class="form-group" id="div_radio1">
                  <label class="control-label requiredField" for="radio1">
                   J&aacute; exerceu mandato pol&iacute;tico ?
                   <span class="asteriskField">*</span>
                  </label>
                  <div class="">
                   <label class="radio-inline">
                    <input name="exerceu_mandato" type="radio" value="1" required/>
                    Sim
                   </label>
                   <label class="radio-inline">
                    <input name="exerceu_mandato" type="radio" value="0" required/>
                    N&atilde;o
                   </label>
                  </div>
                 </div>
     
                 <div class="form-group " style="display:none" id="exerceu_mandato_cargos_periodos_form">
                  <label class="control-label requiredField" for="qual_periodo">
                   Se sim , qual(is) cargos e em que per&iacute;odo(s)?<span class="asteriskField">*</span>
                  </label>
                  <textarea class="form-control" cols="40" id="exerceu_mandato_cargos_periodos" name="exerceu_mandato_cargos_periodos" rows="5"></textarea>
                 </div>
            </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
     
                    <div class="form-group" id="div_radio4">
                      <label class="control-label requiredField" for="radio4">
                       J&aacute; foi candidato em outras elei&ccedil;&otilde;es ?
                       <span class="asteriskField">
                        *
                       </span>
                      </label>
                      <div class="">
                       <label class="radio-inline">
                        <input name="foi_candidato" type="radio" value="1" required/>
                        Sim
                       </label>
                       <label class="radio-inline">
                        <input name="foi_candidato" type="radio" value="0" required/>
                        N&atilde;o
                       </label>
                      </div>
                    </div>
     
                    <div class="form-group " style="display: none" id="foi_candidato_cargos_partidos_form">
                      <label class="control-label requiredField" for="quais_partidos">
                       Se sim, quando e quail(is) cargo(s) e por qual(is) partidos?<span class="asteriskField">*</span>
                      </label>
                      <textarea class="form-control" cols="40" id="foi_candidato_cargos_partidos" name="foi_candidato_cargos_partidos" rows="5"></textarea>
                     </div>
     
                     <div class="form-group" id="div_radio3">
                      <label class="control-label requiredField" for="radio3">
                       &Eacute; voluntario do NOVO<span class="asteriskField">*</span>
                      </label>
                      <div class="">
                       <label class="radio-inline">
                        <input name="vontuntario" type="radio" value="1" required/>
                        Sim
                       </label>
                       <label class="radio-inline">
                        <input name="vontuntario" type="radio" value="0" required/>
                        N&atilde;o
                       </label>
                      </div>
                     </div>
                </div>
            </div>
       
            <div class="row fix">
                <div class="col-xs-12">
                    
                     <div class="form-group">
                      <div>
                       <button class="btn btn-primary enviar" id="submit" name="submit" type="submit">
                        Enviar
                       </button>
                      </div>
                     </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>		


<script>
	$("#cep").mask("99999-999");
	$("#data_nascimento").mask("99-99-9999");
	$("#telefone_numero").mask("(99) 99999999*");

	$("#cpf").mask("999.999.999-99");

	 //Inicio Mascara Telefone
	$('#telefone_numero').focusout(function(){
		var phone, element;
		element = $(this);
	    element.unmask();
	    phone = element.val().replace(/\D/g, '');
		if(phone.length > 10) {
	        element.mask("(99) 99999-999?9");
	    } else {
	        element.mask("(99) 9999-9999?9");
	    }
	}).trigger('focusout');
	//Fim Mascara Telefone

	
	$("input[name='filiado_partido']").click(function(){	
		   opaco( this.value  , "filiado_partido_quais" )  ; 
		   $("#filiado_partido_quais").prop('required',true);
		   	  			 
	});

	$("input[name='exerceu_mandato']").click(function(){	
		   opaco( this.value  , "exerceu_mandato_cargos_periodos" )  ; 
		   $("#exerceu_mandato_cargos_periodos").prop('required',true);			 
	});

	$("input[name='foi_candidato']").click(function(){	
		   opaco( this.value  , "foi_candidato_cargos_partidos" )  ;
		   $("#foi_candidato_cargos_partidos").prop('required',true);		 			 
	});

	$("#submit").click(function(){	

		if ( $( "#cidade_concorrer").val() == 0 ){
			alert("Selecione a cidade do titulo de eleitor");
			return false;
		}
					 
	});

	$( "#cidade_concorrer" ).change(function() {
		if($( this ).val() == -1 ){
			alert("Para o pleito de 2016 o NOVO poderá lançar candidatos apenas nas \ncidades de Belo Horizonte, Curitiba, Porto Alegre, São Paulo e Rio de Janeiro.  ");
			$(this).val($('option:first', this).val());
		}else {	
			$("#cidade_titulo_eleitor").val( $( this ).val()  );
			$("#cid").html( $( this ).val()  );
		} 		  
	});
	
	function opaco( valor , string ){
		 if( valor == 1 ) {
			   $("#" + string +"_form").fadeIn( "slow");
		   }else{
			   $("#" + string ).val("");
			   $("#" + string +"_form").fadeOut("slow");
		   }
	}
	
</script>

<<script type="text/javascript">


</script>


<?php include("_footer.inc.php") ?>