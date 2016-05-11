<?php include("_head.inc.php") ?>

    <?php 

        $meses = array(1 => 'JAN',
                       2 => 'FEV',
                       3 => 'MAR',
                       4 => 'ABR',
                       5 => 'MAI',
                       6 => 'JUN',
                       7 => 'JUL',
                       8 => 'AGO',
                       9 => 'SET',
                       10 => 'OUT',
                       11 => 'NOV',
                       12 => 'DEZ');

     ?>

    <div class="interna acompanhe">     

        <?php include("_header.inc.php") ?>        

            <div class="txt-header">
                <h1 class="tit-header">Acompanhe</h1>
                <p>Mantenha-se informado<br> sobre nossas atualizações.</p>
            </div>
        
        </div><!-- header -->

        <section class="chamada-banner">
            <div id="slides">
                <div class="banner1"></div>
            </div>
        </section>
        
        <?php include("_bt-filiarse.inc.php") ?>

        <?php $eventos = simplexml_load_file("http://novo.org.br/admin/gera_xml_evento.php"); ?>

        <section class="sec-a agenda">
            <div class="fix">
                <h1 class="titulo l-40-helvetica-b-cn">Agenda</h1>
                <?php if(!empty($eventos)) : ?>
                <div class="lista">
                    <?php foreach($eventos as $evento) : ?>
                    <div class="cada">
                        <div class="data">
                            <span class="dia"><?php echo date("d", strtotime($evento->data)); ?></span>
                            <span class="mes"><?php echo $meses[date("n", strtotime($evento->data))]; ?></span>
                        </div>
                        <div class="local">
                            <h2 class="cidade-estado">
                                <?php echo utf8_decode($evento->nome); ?>
                            </h2>
                            <div class="coluna-1">
                                <span>LOCAL:</span><span>HORÁRIO:</span>
                                <span>+INFO:</span>
                            </div>
                            <div class="coluna-2">
                                <span><?php echo utf8_decode($evento->local); ?></span>                                                                              
                                <span><?php echo utf8_decode($evento->hora); ?></span>
                                <span><a href="<?php echo utf8_decode($evento->url); ?>" target="_blank">Saiba Mais</a></span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php else : ?>
                <div class="p-15">
                  Nenhum evento programado para os próximos dias

                </div>
                <?php endif; ?>
                <div class="seta"></div>
            </div>
        </section>

        <section class="menu-int">
            <div class="fix">
                <h1 class="titulo l-40-helvetica-b-cn">Acompanhe</h1>
                <nav class="lista">
                    <a href="midias-sociais.php" class="cada laranja first ">
                        <span class="tit b-18">Mídias sociais do NOVO</span>
                        <img src="images/menu-int-midias-sociais.png" class="img" alt="icone Quem somos">
                    </a>
                    <a href="eventos.php" class="cada azul">
                        <span class="tit b-18"> NOVO pelo Brasil</span>
                        <img src="images/menu-int-eventos.png" class="img" alt="icone diretórios">
                    </a>
                     <a href="novo-na-midia.php" class="cada laranja ">
                        <span class="tit b-18"> novo na mídia</span>
                        <img src="images/menu-int-novo-na-midia.png" class="img" alt="icone diretórios">
                    </a>
                    <a href="agenda.php" class="cada azul active last">
                        <span class="tit b-18"> Agenda <br>de eventos</span>
                        <img src="images/menu-int-agenda.png" class="img" alt="icone prestação de contas">
                    </a>
                </nav>
            </div>
        </section>

<?php include("_footer.inc.php") ?>


</body>
</html>