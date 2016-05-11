<?php include("_head.inc.php") ?>  

<?php include("_header.inc.php") ?>

 <div class="text-center" style="font-size: 15px; font-weight: bold;"> <span style="color:#25BCB1">FASES SALVAS:</span> 
 <span style="color:#25BCB1;">Fase 1: Cadastro</span>  |    
 <span style="color:rgb(212, 201, 201);">Fase 2: Pagamento</span>  |    
 <span style="color:rgb(212, 201, 201);"> Fase 3: Avaliação</span>  |    
 <span style="color:rgb(212, 201, 201);">Fase 4: Vídeo </div>     

<div class="container" id="pagamento">

    <h1>Pagamento</h1>
  
    <!---->
    <div id="content">
    
      <h3 style="text-align: center;" >{msg_valor}</h3>
    
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a href="#cartao" data-toggle="tab">Cartão</a></li>
            <li><a href="#boleto" data-toggle="tab">Boleto</a></li>
        </ul>
        <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="cartao">
                <h2 class="text-center">No Cartão de crédito a liberação é imediata.</h2>
                
                <h4 class="text-center">ATENÇÃO, ao utilizar o cartão de crédito, o titular deverá ser a pessoa que participa do processo seletivo<br> 
				Caso não seja possível, utilize a opção BOLETO</h4><br><br>
              
                <form action="{base_url}pagamento/cartao" class="text-center form-inline" method="post" id="payment-form">
                    <input type="hidden" name="doc" value="{code}">
                    <div class="container">
                        <div class="row">
                            <div class="span12">
                                <div class="span6 form-field">
                                    <label for="number">Número do cartão</label><br>
                                    <input type="text" data-iugu="number" class="span8" name="number" id="number" placeholder="Número do cartão" required>
                                </div>
                                <div class="span6 form-field">
                                    <label for="number">Código de verificação</label><br>
                                    <input type="text" data-iugu="verification_value" class="span4" name="verification_value" id="verification_value" placeholder="CVV" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="form-group" class="span12">
                                <div class="span6 form-field">
                                    <label for="number">Nome</label><br>
                                    <input type="text" data-iugu="full_name" class="span8" name="full_name" id="full_name" value="{nome}" placeholder="Titular do cartão"  readonly="readonly">
                                </div>
                                <div class="span6 form-field">
                                    <label for="number">Data de expiração</label><br>
                                    <input type="text" data-iugu="expiration" class="span4" name="expiration" id="expiration" placeholder="MM/AA" required>
                                    <input type="hidden" name="token" id="token">
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn enviar" value="Enviar">
                </form>

            </div>
            <div class="tab-pane" id="boleto">
           		<h2 class="text-center">No Boleto você deverá aguardar a compensação bancária, que ocorre 3 dias após seu pagamento.</h2>
                <p class="text-center"><a id="gerar_boleto" href="{base_url}pagamento/boleto/{code}" class="btn enviar" target="_blank">Gerar Boleto</a></p>
            </div>
        </div>
    </div>
    <!---->
</div>
<script type="text/javascript" src="https://js.iugu.com/v2"></script>
<script>
    $('head').append('<link rel="stylesheet" href="{base_url}css/pagamento.css" type="text/css" />');
   // Iugu.setAccountID("ce66470b-6472-4328-86a6-db3d32c148cd");    
    Iugu.setAccountID("41abc7e7-8184-4784-8a0c-521c0d0c71df");
    Iugu.setTestMode(false);

    $(function() {
        $('#payment-form input[type=text]').blur(function() {
            var fieldVal = $(this).val();
            var validateField = null;

            switch ($(this).attr('id')) {
                case 'number':
                validateField = Iugu.utils.validateCreditCardNumber(fieldVal);
                break;
                case 'verification_value':
                flag = Iugu.utils.getBrandByCreditCardNumber($('#number').val());
                validateField = Iugu.utils.validateCVV(fieldVal, flag);
                break;
                case 'full_name':
                validateField = false;
                if ($(this).val().length > 5) {
                    validateField = true;
                }
                break;
                case 'expiration':
                validateField = Iugu.utils.validateExpirationString(fieldVal)
                break;
            }

            if (validateField) {
                $(this).addClass('input-success');
                if ($(this).hasClass('input-error')) {
                    $(this).removeClass('input-error');
                }
            } else {
                $(this).addClass('input-error');
                if ($(this).hasClass('input-success')) {
                    $(this).removeClass('input-success');
                }

            }
        });
    });

    jQuery(function($) {
        $('#payment-form').submit(function(evt) {
            var form = $(this);
            var tokenResponseHandler = function(data) {

                if (!data.errors) {
                    $("#token").val( data.id );
                    form.get(0).submit();
                }
            }

            Iugu.createPaymentToken(this, tokenResponseHandler);
            return false;
        });
    });
</script>
<script>
    $("#expiration").mask("99/99");
</script>
<script>
    $( "#gerar_boleto" ).click(function(e) {
        e.preventDefault();
        window.open($("#gerar_boleto").attr('href'), '_blank');
        //alert("Está pagina está sendo redirecionada para a tela de inicio");
        window.location.replace("{base_url}login/continuar");
    });
</script>

<?php include("_footer.inc.php") ?>