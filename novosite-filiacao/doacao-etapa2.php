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

        <section class="sec-a">
            <div class="fix">
                <h1 class="titulo l-40-helvetica-b-cn">Doação</h1>
                <div class="lista">
                    <form name="form1" method="post" action="filiarse.aspx" onsubmit="javascript:return WebForm_OnSubmit();" id="form1">

                        <div class="etapas">
                            <div class="center">
                                <a href="#" class="bt-preto">1. Cadastro</a>
                                <a href="#" class="bt-laranja">2. Pagamento</a>
                                <a href="#" class="bt-preto">3. Finalização</a>
                            </div>
                        </div>

                        <div class="form">

                            <div class="txt-intro p-15">
                                <p><strong>Seu pagamento online será realizado por meio do PagSeguro, uma ferramenta segura, <br> seus dados serão protegidos e não ficarão gravados.</strong></p>
                            </div>       

                            <div class="img-pag-seguro"><img src="images/doacao-pagseguro.jpg"></div>

                            <div class="item text horizontal dinheiro">
                                <div class="txt"><strong>Formas de doação:</strong></div>
                                <p><span class="name">R$:</span><input name="txtnome" type="text" maxlength="250" id="txtnome" class="nome"></p>
                                <div class="clear"></div>
                            </div>                          

                            <div class="clear"></div>

                            <div class="item text horizontal cpf">
                                <p>
                                    <span class="name"></span><input type="submit" name="btnenviar" value="Enviar" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;btnenviar&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="btnenviar" class="bt-preto">
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
                    <a href="filie-se.php" class="cada laranja first ">
                        <span class="tit b-18"> filie-se</span>
                        <img src="images/menu-int-filiese.png" class="img" alt="icone filie-se">
                    </a>
                    <a href="passo-a-passo.php" class="cada azul ">
                        <span class="tit b-18"> passo a passo sobre a filiação <br>e doção </span>
                        <img src="images/menu-int-passaapasso.png" class="img" alt="icone passo a passo sobre a filiação e doção">
                    </a>
                    <a href="sobre-doacao.php" class="cada laranja active">
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