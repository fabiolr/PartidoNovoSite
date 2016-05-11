<?php include("_head.inc.php") ?>

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

        <section class="sec-a midias-sociais">
            <div class="fix">
                <h1 class="titulo l-40-helvetica-b-cn">Acompanhe o NOVO nas mídias socias.</h1>
                <div class="lista p-15">
                    <a href="https://www.facebook.com/partidonovo" class="cada facebook">
                        <span class="logo"><img src="images/acompanhe-facebook.png"></span>
                        <span class="txt">
                            acesse nosso 
                            <h2>facebook</h2>
                        </span>
                    </a>
                    <a href="https://twitter.com/desafionovo500" class="cada twitter">
                        <span class="logo"><img src="images/acompanhe-twitter.png"></span>
                        <span class="txt">
                            acesse nosso 
                            <h2>twitter</h2>
                        </span>
                    </a>
                    <a href="http://instagram.com/partidonovo" class="cada instagram">
                        <span class="logo"><img src="images/acompanhe-instagram.png"></span>
                        <span class="txt">
                            acesse nosso 
                            <h2>instagram</h2>
                        </span>
                    </a>
                    <a href="https://www.youtube.com/user/partidonovo500" class="cada youtube">
                        <span class="logo"><img src="images/acompanhe-youtube.png"></span>
                        <span class="txt">
                            acesse nosso 
                            <h2>Youtube</h2>
                        </span>
                    </a>
                </div>
                <div class="seta"></div>
            </div>
        </section>

        <section class="menu-int">
            <div class="fix">
                <h1 class="titulo l-40-helvetica-b-cn">Acompanhe</h1>
                <nav class="lista">
                    <a href="midias-sociais.php" class="cada laranja first active ">
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
                    <a href="agenda.php" class="cada azul last">
                        <span class="tit b-18"> Agenda <br>de eventos</span>
                        <img src="images/menu-int-agenda.png" class="img" alt="icone prestação de contas">
                    </a>
                </nav>
            </div>
        </section>

<?php include("_footer.inc.php") ?>
 
        <script>
            $('.novo-na-midia .cada').hover(function(){
                $(this).addClass('active')
            },function(){
                $(this).removeClass('active')
            })
        </script>

</body>
</html>