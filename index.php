<?php include("_head.inc.php") ?>

    <div class="home">
        
        <?php include("_header.inc.php") ?>        
        </div><!-- header -->
        
        <?php 

            $banners = array('1', '2', '3', '4', '6', '9', '10', '11', '12', '13', '14', '16', '17', '18', '19', '20', '21', '22');
            shuffle($banners);
         
        ?>

        <section class="chamada-banner">
            <div id="slides">
                <?php foreach($banners as $banner) : ?>
                <div class="banner<?php echo $banner; ?>"></div>
                <?php endforeach; ?>
            </div>
        </section>

        <a href="doacao.php" class="click-afiliarse">
            <img src="images/click-doar.png" alt="Clique aqui para doar">
        </a>

        <section class="valores">
            <div class="fix">
                <h4 class="titulo verde-25" style="padding-bottom: 24px;">Assista ao vídeo e saiba mais sobre a nossa proposta:</h4>

                <div style="border: #d5d5d5 solid 9px; width: 800px; height: 450px; margin: 0 auto;">
                    <iframe src="http://player.vimeo.com/video/65073569?title=0&amp;byline=0&amp;portrait=0&amp;color=f68428" width="800" height="450" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                </div>
            </div>
        </section>

        <section class="valores">
            <div class="fix">
                <?php include('_valores.inc.php') ?>
            </div>
        </section>

        <section class="desafios">
            <div class="fix">
                <h1 class="titulo l-40-helvetica-b-cn">desafios do novo</h1>
                <div class="lista">
                    <div class="cada laranja first">
                        <div class="img"><img src="images/desafios-icone-1.png" alt="icone Liberdade"></div>
                        <h2 class="tit b-23">INOVAR</h2>
                        <p class="b-16">Criar um espaço<br> diferenciado no cenário<br> político nacional através do<br> NOVO.</p>
                    </div>
                    <div class="cada laranja">
                        <div class="img"><img src="images/desafios-icone-2.png" alt="icone Liberdade"></div>
                        <h2 class="tit b-23">CONSCIENTIZAR</h2>
                        <p class="b-16"> Conscientizar o indivíduo da<br> sua responsabilidade como<br> cidadão e torná-lo sócio do<br> projeto.</p>
                    </div>
                    <div class="cada laranja last">
                        <div class="img"><img src="images/desafios-icone-3.png" alt="icone Liberdade"></div>
                        <h2 class="tit b-23">ATRAIR E ENGAJAR</h2>
                        <p class="b-16"> Motivar o cidadão a atuar na<br> política com honestidade e<br> visão de longo prazo.</p>
                    </div>

                     <div class="cada laranja first">
                        <div class="img"><img src="images/desafios-icone-4.png" alt="icone Liberdade"></div>
                        <h2 class="tit b-23">DEFENDER</h2>
                        <p class="b-16"> Preservar as liberdades<br> individuais e a propriedade<br> privada em oposição a<br> conceitos coletivistas e ao<br> Estado paternalista.</p>
                    </div>
                    <div class="cada laranja">
                        <div class="img"><img src="images/desafios-icone-5.png" alt="icone Liberdade"></div>
                        <h2 class="tit b-23">EDUCAR</h2>
                        <p class="b-16"> Garantir o acesso à<br> educação básica de<br> qualidade, criando um<br> ambiente baseado no<br> mérito.</p>
                    </div>
                    <div class="cada laranja last">
                        <div class="img"><img src="images/desafios-icone-6.png" alt="icone Liberdade"></div>
                        <h2 class="tit b-23">REDUZIR</h2>
                        <p class="b-16"> Rever o papel do Estado,<br> reduzindo o escopo da sua<br> atuação e a carga tributária.</p>
                    </div>

                     <div class="cada laranja first">
                        <div class="img"><img src="images/desafios-icone-7.png" alt="icone Liberdade"></div>
                        <h2 class="tit b-23">DESBUROCRATIZAR</h2>
                        <p class="b-16"> Simplificar a complexa<br> legislação e regulamentação,<br> desonerando o pagador de<br> impostos, estimulando a<br> economia e combatendo a<br> corrupção.</p>
                    </div>
                    <div class="cada laranja">
                        <div class="img"><img src="images/desafios-icone-8.png" alt="icone Liberdade"></div>
                        <h2 class="tit b-23">ADMINISTRAR</h2>
                        <p class="b-16"> Implantar uma gestão<br> pública eficiente,<br> promovendo a boa<br> governança e a<br> transparência dos gastos,<br> ciente de que os recursos<br> públicos são escassos.</p>
                    </div>
                    <div class="cada laranja last">
                        <div class="img"><img src="images/desafios-icone-9.png" alt="icone Liberdade"></div>
                        <h2 class="tit b-23">PROMOVER</h2>
                        <p class="b-16"> Promover a livre iniciativa<br> com o estímulo a um<br> ambiente empreendedor,<br> estabelecendo regras<br> transparentes, adequando a<br> legislação trabalhista,<br> simplificando a estrutura<br> tributária e priorizando o<br> interesse do consumidor.</p>
                    </div>
                </div>
                <div class="seta"></div>
            </div>
        </section>


        <section class="diferenciais">
            <div class="fix">
                <h1 class="titulo l-40-helvetica-b-cn">Nossos Diferenciais</h1>
                <div class="lista">
                    <div class="cada">
                        <div class="img"><img src="images/diferenciais-icone-1.png" alt="icone Ficha Limpa"></div>
                        <div class="col-2">
                            <h2 class="tit b-23">Ficha Limpa</h2>
                            <p class="b-16"><strong>Ficha Limpa:</strong> Filiados e candidatos devem preencher os requisitos da lei Ficha Limpa;</p>
                        </div>
                    </div>
                    <div class="cada">
                        <div class="img"><img src="images/diferenciais-icone-2.png" alt="icone Limites"></div>
                        <div class="col-2">
                            <h2 class="tit b-23">Limite</h2>
                            <p class="b-16"><strong>Limitação ao “carreirismo político”:</strong> é vetado ao filiado eleito para cargo no Poder Legislativo que se candidate a mais de uma reeleição consecutiva para o mesmo cargo;</p>
                        </div>
                    </div>
                    <div class="cada">
                        <div class="img"><img src="images/diferenciais-icone-3.png" alt="icone Vinculação"></div>
                        <div class="col-2">
                            <h2 class="tit b-23">Vinculação</h2>
                            <p class="b-16"><strong>Vinculação do candidato às suas propostas:</strong> definição prévia do Compromisso de Gestão e do Compromisso de Atuação Legislativa prevendo metas a serem cumpridas;</p>
                        </div>
                    </div>
                    <div class="cada">
                        <div class="img"><img src="images/diferenciais-icone-4.png" alt="icone Gestão"></div>
                        <div class="col-2">
                            <h2 class="tit b-23">Gestão</h2>
                            <p class="b-16"><strong>Gestão independente:</strong> a gestão partidária não pode ser feita por candidato ou por ocupante de cargo eletivo;</p>
                        </div>
                    </div>
                    <div class="cada">
                        <div class="img"><img src="images/diferenciais-icone-5.png" alt="icone Cobranças"></div>
                        <div class="col-2">
                            <h2 class="tit b-23">Cobrança</h2>
                            <p class="b-16"><strong>Não há cobrança de percentual do salário do mandatário:</strong> a contribuição partidária mínima é igual para filiados e candidatos eleitos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php include("_footer.inc.php") ?>

<script>
    $(function() {
      $('#slides').slidesjs({
        width: 940,
        height: 579,
        navigation: {
          effect: "fade"
        },
         play: {
          effect: "fade",
          interval: 15000,
          auto: true
        },
        pagination: {
          active: true
        },
        navigation: {
            active: true
        },
        effect: {
          fade: {
            speed: 400
          }
        }
      });
    });
    
</script>

</body>
</html>