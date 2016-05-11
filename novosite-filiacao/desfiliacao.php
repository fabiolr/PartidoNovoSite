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

        <section class="sec-a desfiliacao">
            <div class="fix">
                <h1 class="titulo l-40-helvetica-b-cn">Desfiliação</h1>
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
                                <p><span class="name">Endereço<span class="asterisco">*</span>:</span><input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome"></p>
                                <div class="clear"></div>
                            </div>
                            <div class="item text right">
                                <p class="left numero"><span class="name">numero<span class="asterisco">*</span>:</span><input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome"></p>
                                <p class="left complemento"><span class="name">complemento<span class="asterisco">*</span>:</span><input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome"></p>
                                <p class="right cep"><span class="name">Cep<span class="asterisco">*</span>:</span><input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome"></p>
                                <div class="clear"></div>
                            </div>

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
                                    <p class="left ddd"><span class="name">Telefone<span class="asterisco">*</span>:</span><input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome"></p>
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
                                    <span class="name">Título Eleitoral<span class="asterisco">*</span>:</span><input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome">
                                    <span class="mini-txt"><a href="#">Clique aqui</a> para consultar o site dto TSD caso não saiba</a></span>
                                </p>
                                <p class="left zona"><span class="name">Zona<span class="asterisco">*</span>:</span><input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome"></p>
                                <p class="left secao"><span class="name">Seção<span class="asterisco">*</span>:</span><input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome"></p>
                                <p class="right municipio">
                                    <span class="name">Município<span class="asterisco">*</span>:</span>
                                    <select name="drpUF" id="drpUF" class="uf"> 
                                        <option selected="selected" value="Selecione">Selecione</option>
                                        <option value="AC">Acre</option>
                                    </select>
                                </p>
                                <div class="clear"></div>
                            </div>

                             <div class="item text right">
                                <p class="left titulo-eleitoral">
                                    <span class="name">UF<span class="asterisco">*</span>:</span>
                                    <select name="drpUF" id="drpUF" class="uf"> 
                                        <option selected="selected" value="Selecione">Selecione</option>
                                        <option value="AC">Acre</option>
                                    </select>
                                </p>
                            </div>

                            <div class="clear"></div>
                            
                            <br><br><br>

                            <div class="left-list-checkbox">
                                
                                <div class="tit-checkbox">I - Motivo do desligamento</div>

                                <div class="item checkbox horizontal inline full">
                                    <p>
                                        <input type="radio">
                                        <span class="name">Perdi interesse pela política geral </span>
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <div class="item checkbox horizontal inline full">
                                     <p>
                                        <input type="radio">
                                        <span class="name">Discordo de alguns posicionamentos do NOVO</span>
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <div class="item checkbox horizontal inline full">
                                    <p>
                                        <input type="radio">
                                        <span class="name">Vou me filiar a outro partido</span>
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <div class="item checkbox horizontal inline full">
                                    <p>
                                        <input type="radio">
                                        <span class="name">Não posso mais ser filiado ao partido por motivos profissionais </span>
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <div class="item checkbox horizontal inline full">
                                    <p>
                                        <input type="radio">
                                        <span class="name">Estou fazendo contenção de despesas</span>
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <div class="item checkbox-text horizontal inline full">
                                    <p>
                                        <span class="name">Outro:</span>
                                        <input type="text">
                                    </p>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            
                            <div class="right-list-checkbox">
                                
                                <div class="tit-checkbox">II - Cargoso exercidos do NOVO</div>

                                <div class="item checkbox horizontal inline full">
                                    <p>
                                        <input type="radio">
                                        <span class="name">Membro de convenção</span>
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <div class="item checkbox horizontal inline full">
                                     <p>
                                        <input type="radio">
                                        <span class="name">Membro de diretório</span>
                                    </p>
                                    <div class="clear"></div>
                                </div>

                            </div>

                            <br>

                            <div class="clear"></div>
                            
                            <br><br><br>

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
                    <a href="filie-se.php" class="cada laranja first active">
                        <span class="tit b-18"> filie-se</span>
                        <img src="images/menu-int-filiese.png" class="img" alt="icone filie-se">
                    </a>
                    <a href="passo-a-passo.php" class="cada azul ">
                        <span class="tit b-18"> passo a passo sobre a filiação <br>e doção </span>
                        <img src="images/menu-int-passaapasso.png" class="img" alt="icone passo a passo sobre a filiação e doção">
                    </a>
                    <a href="sobre-doacao.php" class="cada laranja ">
                        <span class="tit b-18"> doação</span>
                        <img src="images/menu-int-doacao.png" class="img" alt="icone doação">
                    </a>
                    <a href="duvidas.php" class="cada azul ">
                        <span class="tit b-18"> dúvidas sobre a filiação e doação</span>
                        <img src="images/menu-int-duvidas.png" class="img" alt="icone dúvidas sobre a filiação e doação">
                    </a>
                    <a href="prestacao-de-contas.php" class="cada laranja ">
                        <span class="tit b-18"> prestação de contas</span>
                        <img src="images/menu-int-prestacao.png" class="img" alt="icone prestação de contas">
                    </a>
                    <a href="agenda.php" class="cada azul last">
                        <span class="tit b-18"> Agenda <br>de eventos</span>
                        <img src="images/menu-int-agenda.png" class="img" alt="icone prestação de contas">
                    </a>
                </nav>
            </div>
        </section>

<?php include("_footer.inc.php") ?>


</body>
</html>