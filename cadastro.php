<?php include("_head.inc.php") ?>

    <div class="interna participe">     

        <?php include("_header.inc.php") ?>        

            <div class="txt-header">
                <h1 class="tit-header">Participe</h1>
                <p>O Brasil precisa do NOVO.<br>O NOVO precisa de você.</p>
            </div>
        
        </div><!-- header -->

        <section class="chamada-banner">
            <div id="slides">
                <div class="banner1"></div>
            </div>
        </section>
        
        <?php include("_bt-filiarse.inc.php") ?>

        <section class="sec-a cadastro">
            <div class="fix">
                <h1 class="titulo l-40-helvetica-b-cn">Cadastro</h1>
                <div class="lista p-15">

                        <form method="post" action="p/envia_cadastro_acompanhe.php" name="cadastro" enctype="multipart/form-data" onsubmit="envia_cadastro_acompanhe(this); return false;">
                            
                        <div class="txt-intro p-15">
                            <p><strong>Receba informativos do NOVO.</strong></p>
                            <p>Complete o formulário abaixo para receber notícias sobre o NOVO.</p>
                        </div>
                        <div class="form">

                            <div class="item text left">
                                <p><span class="name">Nome<span class="asterisco">*</span>:</span><input type="text" id="nome" name="nome"></p>
                            </div>
                            <div class="item text right">
                                <p><span class="name">Email<span class="asterisco">*</span>:</span><input type="text" id="email" name="email"></p>
                            </div>
                            <div class="linha"></div>

                            <div class="item text left">
                                <p><span class="name">Profissão<span class="asterisco">*</span>:</span><input type="text" id="profissao" name="profissao"></p>
                            </div>
                            <div class="item text right">
                                <p><span class="name">Telefone<span class="asterisco">*</span>:</span><input type="text" id="telefone" name="telefone"  onkeypress="MascaraTelefone(cadastro.telefone);"></p>
                            </div>

                            <div class="item text left">
                                <p><span class="name">CEP<span class="asterisco">*</span>:</span><input type="text" id="cep" name="cep" onkeypress="MascaraCep(cadastro.cep);" maength="10"></p>
                            </div>
                            <div class="item text right duplo">
                                <p class="left"><span class="name">Cidade<span class="asterisco">*</span>:</span><input type="text" id="cidade" name="cidade"></p>
                                <p class="right"><span class="name">Estado<span class="asterisco">*</span>:</span><input type="text" id="estado" name="estado" maxlength="2"></p>
                            </div>

                            <div class="item text left">
                                <p><span class="name">Endereço<span class="asterisco">*</span>:</span><input type="text" id="endereco" name="endereco"></p>
                            </div>
                            <div class="item text right">
                                <p><span class="name">Número<span class="asterisco">*</span>:</span><input type="text" id="numero" name="numero"></p>
                            </div>

                            
    
                            <div class="clear"></div>

                           <div class="item checkbox horizontal inline full">
                                <p>
                                    <input type="checkbox" id="sms" name="sms" value="1" checked="">
                                    <span class="name" style="text-transform:none">Autorizo o envio de SMS ou WhatsApp para meu telefone.</span>
                                </p>
                                <div class="clear"></div>
                            </div>
                            

                           

                            <div class="clear"></div>

                            <input type="submit" name="submit" value="Enviar" id="btnenviar" class="bt-laranja">

                            <input type="hidden" id="action" name="action" value="submitform" />
                            <input type="hidden" name="charset_check" value="ä™®">

                            <div class="clear"></div>

                        </div><!-- form -->
                        
                    </form>
                </div>
                <div class="seta"></div>
            </div>
        </section>

        <section class="menu-int">
            <div class="fix">
                <h1 class="titulo l-40-helvetica-b-cn">Participe</h1>
                <nav class="lista">
                    <a href="cadastro.php" class="cada laranja first active">
                        <span class="tit b-18"> Cadastro</span>
                        <img src="images/menu-int-cadastro.png" class="img" alt="icone estatuto">
                    </a>
                    <a href="filie-se.php" class="cada azul">
                        <span class="tit b-18"> Filiação</span>
                        <img src="images/menu-int-filiese.png" class="img" alt="icone filie-se">
                    </a>
                    <a href="sobre-doacao.php" class="cada laranja ">
                        <span class="tit b-18"> Doação</span>
                        <img src="images/menu-int-doacao.png" class="img" alt="icone passo a passo sobre a doação">
                    </a>
                    <a href="duvidas.php" class="cada azul last ">
                        <span class="tit b-18"> Dúvidas</span>
                        <img src="images/menu-int-duvidas.png" class="img" alt="icone doe">
                    </a>
                </nav>
            </div>
        </section>

        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
        </script>
        <script>
        $("#cep").blur(function(){
        var cep = this.value.replace(/[^0-9]/, "");
        if(cep.length!=8){
        return false;
        }
        var url = "http://viacep.com.br/ws/"+cep+"/json/";
        $.getJSON(url, function(dadosRetorno){
        try{
        // Insere os dados em cada campo
        $("#endereco").val(dadosRetorno.logradouro);
        $("#cidade").val(dadosRetorno.localidade);
        $("#estado").val(dadosRetorno.uf);
        }catch(ex){}
        });
        });
        </script>

        <script src="js/main.js"></script>

<?php include("_footer.inc.php") ?>


</body>
</html>