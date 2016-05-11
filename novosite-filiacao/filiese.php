<?php include("_head.inc.php") ?>

    <div class="interna participe">     

        <?php include("_header.inc.php") ?>        

            <div class="txt-header">
                <h1 class="tit-header">Acompanhe</h1>
                <p>Mantenha-se informados<br> sobre nossas atualizações.</p>
            </div>
        
        </div><!-- header -->

        <section class="chamada-banner">
            <div id="slides">
                <div class="banner1"></div>
            </div>
        </section>
        
        <?php include("_bt-filiarse.inc.php") ?>

        <section class="sec-a filiese">
            <div class="fix">
                <h1 class="titulo l-40-helvetica-b-cn">Filie-se</h1>
                <div class="lista">
                    <form name="form1" method="post" action="filiarse.aspx" onsubmit="javascript:return WebForm_OnSubmit();" id="form1">

                        <div class="etapas">
                            <div class="center">
                                <a href="#" class="bt-laranja">1. Identificação</a>
                                <a href="#" class="bt-preto">2. Finalização</a>
                            </div>
                        </div>

                        <div class="form">
                           
                            <div class="item text full cpf-first">
                                <p>
                                    <span class="name">POR FAVOR, INFORME SEU CPF:<span class="asterisco">*</span>:</span>
                                    <span id="txtCPF_wrapper" class="riSingle RadInput RadInput_Default"><input id="txtCPF" name="txtCPF" type="text" class="riTextBox riEnabled" value="___.___.___-__"><input id="txtCPF_ClientState" name="txtCPF_ClientState" type="hidden" autocomplete="off" value="{&quot;enabled&quot;:true,&quot;emptyMessage&quot;:&quot;&quot;,&quot;validationText&quot;:&quot;&quot;,&quot;valueAsString&quot;:&quot;&quot;}"></span>
                                    <input type="submit" name="btnenviar" value="Enviar" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;btnenviar&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="btnenviar" class="bt-preto">
                                </p>
                                <div class="clear"></div>
                            </div>          

                            <div class="clear"></div>

                            <br><br>

                            <div class="txt-intro p-15">
                                <p><strong>POR FAVOR, preecha corretamente sua ficha de filiação:</strong></p>
                            </div> 

                            <div class="item text left">
                                <p><span class="name">Nome<span class="asterisco">*</span>:</span><input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome"></p>
                                <div class="clear"></div>
                            </div>
                            <div class="item text right">
                                <p><span class="name">Email<span class="asterisco">*</span>:</span><input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome"></p>
                                <div class="clear"></div>
                            </div>

                            <div class="linha"></div>

                            <div class="item text left">
                                <p class="left cep"><span class="name">Cep<span class="asterisco">*</span>:</span><input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome"></p>
                                <p class="left numero"><span class="name">numero<span class="asterisco">*</span>:</span><input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome"></p>
                                <p class="right complemento"><span class="name">complemento<span class="asterisco">*</span>:</span><input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome"></p>
                                <div class="clear"></div>
                            </div>

                            <div class="item text right">
                                <p><span class="name">Endereço<span class="asterisco">*</span>:</span><input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome"></p>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>

                            <div class="item text full">
                                <p class="left cidade"><span class="name">cidade<span class="asterisco">*</span>:</span>
                                    <select name="drpUF" id="drpUF" class="uf"> 
                                        <option selected="selected" value="Selecione">Selecione</option>
                                        <option value="AC">Acre</option>
                                    </select>
                                </p>
                                <p class="left estado"><span class="name">estado<span class="asterisco">*</span>:</span>
                                    <select name="drpUF" id="drpUF" class="uf"> 
                                        <option selected="selected" value="Selecione">Selecione</option>
                                        <option value="AC">Acre</option>
                                    </select>
                                </p>
                                <p class="left bairro"><span class="name">bairro<span class="asterisco">*</span>:</span><input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome"></p>
                                <div class="clear"></div>
                            </div>

                            <div class="linha"></div>
                            
                            <div class="item text left telefone">
                                <div class="left">
                                    <p class="left ddd"><span class="name">Telefone:</span><input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome"></p>
                                    <p class="left tel"><span class="name"></span><input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome"></p>
                                </div>

                                <div class="right">
                                    <p class="left ddd"><span class="name">Celular:</span><input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome"></p>
                                    <p class="left tel"><span class="name"></span><input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome"></p>
                                </div>
                                
                                <div class="clear"></div>
                            </div>

                            <div class="item text right">
                                <p class="left data-nascimento">
                                    <span class="name">Data de nascimento<span class="asterisco">*</span>:</span>
                                    <input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome">
                                    <span class="mini-txt">DD/MM/AAAA</span>
                                </p>
                                <p class="left sexo"><span class="name">Sexo<span class="asterisco">*</span>:</span>
                                    <select name="drpUF" id="drpUF" class="uf"> 
                                        <option selected="selected" value="Selecione">Selecione</option>
                                        <option value="AC">Acre</option>
                                    </select>
                                </p>
                                <p class="right estado-civil"><span class="name">Estado Civil<span class="asterisco">*</span>:</span>
                                    <select name="drpUF" id="drpUF" class="uf"> 
                                        <option selected="selected" value="Selecione">Selecione</option>
                                        <option value="AC">Acre</option>
                                    </select>
                                </p>

                                <div class="clear"></div>
                               
                            </div>
                          
                            <div class="linha"></div>

                            <div class="item text left">
                                <p class="left rg">
                                    <span class="name">RG<span class="asterisco">*</span>:</span>
                                    <input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome">
                                </p>
                                <p class="right orgao-emissor"><span class="name">Orgão Emissor<span class="asterisco">*</span>:</span>
                                    <select name="drpUF" id="drpUF" class="uf"> 
                                        <option selected="selected" value="Selecione">Selecione</option>
                                        <option value="AC">Acre</option>
                                    </select>
                                </p>
                                <div class="clear"></div>
                            </div>

                            <div class="item text right">
                                <p class="left data-nascimento">
                                    <span class="name">Data de emissão<span class="asterisco">*</span>:</span>
                                    <input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome">
                                    <span class="mini-txt">DD/MM/AAAA</span>
                                </p>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                            <br>
                            <div class="item text left">
                                <p><span class="name">Nome do pai<span class="asterisco">*</span>:</span><input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome"></p>
                                <div class="clear"></div>
                            </div>
                            <div class="item text right">
                                <p><span class="name">Nome da mãe<span class="asterisco">*</span>:</span><input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome"></p>
                                <div class="clear"></div>
                            </div>

                            <div class="linha"></div>

                            <div class="item text left">
                                <p class="left titulo-eleitoral">
                                    <span class="name">Título Eleitoral:<span class="asterisco">*</span>:</span><input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome">
                                    <span class="mini-txt"><a href="#">Clique aqui</a> para consultar o site dto TSD caso não saiba</a></span>
                                </p>
                                <p class="left zona"><span class="name">Zona:<span class="asterisco">*</span>:</span><input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome"></p>
                                <p class="left secao"><span class="name">Seção:<span class="asterisco">*</span>:</span><input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome"></p>
                                <p class="right municipio">
                                    <span class="name">Município:<span class="asterisco">*</span>:</span>
                                    <select name="drpUF" id="drpUF" class="uf"> 
                                        <option selected="selected" value="Selecione">Selecione</option>
                                        <option value="AC">Acre</option>
                                    </select>
                                </p>
                                <div class="clear"></div>
                            </div>

                             <div class="item text right">
                                <p class="left titulo-eleitoral">
                                    <span class="name">UF:<span class="asterisco">*</span>:</span>
                                    <select name="drpUF" id="drpUF" class="uf"> 
                                        <option selected="selected" value="Selecione">Selecione</option>
                                        <option value="AC">Acre</option>
                                    </select>
                                </p>
                            </div>

                            <div class="linha"></div>

                            <div class="item text left">
                                <p><span class="name">Profissão<span class="asterisco">*</span>:</span><input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome"></p>
                                <div class="clear"></div>
                            </div>
                            <div class="item text right">
                                <p>
                                    <span class="name">Escolaridade<span class="asterisco">*</span>:</span>
                                    <select name="drpUF" id="drpUF" class="uf"> 
                                        <option selected="selected" value="Selecione">Selecione</option>
                                        <option value="AC">Acre</option>
                                    </select>
                                </p>
                                <div class="clear"></div>
                            </div>

                            <div class="clear"></div>
                             

                            
                            <div class="item text horizontal inline full">
                                <p>
                                    <span class="name">Ocupa cargo público ou tem madado eletivo?<span class="asterisco">*</span></span>
                                    <select name="drpUF" id="drpUF" class="uf"> 
                                        <option selected="selected" value="Selecione">Selecione</option>
                                        <option value="AC">Acre</option>
                                    </select>
                                </p>
                                <div class="clear"></div>
                            </div>
                            <div class="item text horizontal inline full">
                                <p>
                                    <span class="name">Já foi filiado a algum partido político?<span class="asterisco">*</span></span>
                                    <select name="drpUF" id="drpUF" class="uf"> 
                                        <option selected="selected" value="Selecione">Selecione</option>
                                        <option value="AC">Acre</option>
                                    </select>
                                </p>
                                <div class="clear"></div>
                            </div>

                            <div class="texto">
                            </div>

                            <div class="item checkbox horizontal inline full">
                                <p>
                                    <input type="checkbox">
                                    <span class="name">
                                        Declaro que estou no pleno gozo dos meus direitos políticos e de total acordo com as disposições do estatuto do partido novo. Declaro ainda que não me enquadro em nenhuma das hipóteses do artigo 1 da lei complementar n 64, de 18 de maio de 1990(lei da Ficha Limpa)
                                    </span>
                                </p>
                                <div class="clear"></div>
                            </div>

                            <div class="item checkbox horizontal inline full">
                                <p>
                                    <input type="checkbox">
                                    <span class="name">
                                        Declaro que estou no pleno gozo dos meus direitos políticos e de total acordo com as disposições do estatuto do partido novo. Declaro ainda que não me enquadro em nenhuma das hipóteses do artigo 1 da lei complementar n 64, de 18 de maio de 1990(lei da Ficha Limpa)
                                    </span>
                                </p>
                                <div class="clear"></div>
                            </div>
                            <br>
                            <div class="clear"></div>

                            <div class="item text bt-avancar">
                                <p>
                                    <input type="submit" name="btnenviar" value="Avançar" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;btnenviar&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="btnenviar" class="bt-preto">
                                </p>
                                <div class="clear"></div>
                            </div>
                            
                        </div><!-- form -->
                        

                        <div class="clear"></div>
                        
                    </form>
                </div>
                <div class="seta"></div>
            </div>
        </section>

        <section class="menu-int">
            <div class="fix">
                <h1 class="titulo l-40-helvetica-b-cn">Participe</h1>
                <nav class="lista">
                    <!-- <a href="filie-se.php" class="cada laranja first active">
                        <span class="tit b-18"> filie-se</span>
                        <img src="images/menu-int-filiese.png" class="img" alt="icone filie-se">
                    </a> -->
                    <a href="passo-a-passo.php" class="cada azul ">
                        <span class="tit b-18"> passo a passo sobre a <!-- filiação <br>e --> doação</span>
                        <img src="images/menu-int-passaapasso.png" class="img" alt="icone passo a passo sobre a doação">
                    </a>
                    <a href="sobre-doacao.php" class="cada laranja ">
                        <span class="tit b-18"> doação</span>
                        <img src="images/menu-int-doacao.png" class="img" alt="icone doação">
                    </a>
                    <a href="duvidas.php" class="cada azul ">
                        <span class="tit b-18"> dúvidas sobre a filiação e doação</span>
                        <img src="images/menu-int-duvidas.png" class="img" alt="icone dúvidas sobre a filiação e doação">
                    </a>
                    <a href="prestacao-de-contas.php" class="cada laranja last ">
                        <span class="tit b-18"> prestação de contas</span>
                        <img src="images/menu-int-prestacao.png" class="img" alt="icone prestação de contas">
                    </a>
                </nav>
            </div>
        </section>

<?php include("_footer.inc.php") ?>


</body>
</html>