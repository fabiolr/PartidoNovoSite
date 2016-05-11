        <div class="fix header-fix">
            <header class="header b-15-helvetica-cn">
                <nav>
                    <div class="detalhe detalhe-left"></div>
                    <div class="detalhe detalhe-right"></div>
                    <ul>
                        <li class="first">
                            <a href="partido.php">Partido</a>
                            <ul class="sub-item">
                                <li><a href="partido.php">Quem somos</a></li>
                                <li><a href="estatuto.php">Estatuto</a></li>
                                <li><a href="diretorios.php">Diretórios</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="conheca.php">Conheça</a>
                            <ul class="sub-item">
                                <li><a href="conheca.php">Valores</a></li>
                                <li><a href="desafios.php">Desafios</a></li>
                                <li><a href="nossos-diferenciais.php">Diferenciais</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="cadastro.php">participe</a> 
                             <ul class="sub-item">
                                <li><a href="cadastro.php">Cadastro</a></li>
                                <li><a href="filie-se.php">Filiação</a></li>
                                <li><a href="sobre-doacao.php">Doação</a></li>
                                <li><a href="duvidas.php">Dúvidas</a></li>
                            </ul>
                        </li>
                        <li><a href="divulgue.php">divulgue</a>
							<ul class="sub-item">
                                <li><a href="manual.php">Manual do Novo</a></li>
                                <li><a href="apresentacao.php">Apresenta&ccedil;&otilde;es</a></li>
                                <li><a href="videos.php">Vídeos</a></li>
                            </ul>
						</li>
                        <li>
                            <a href="midias-sociais.php">Acompanhe</a>
                             <ul class="sub-item">
								<li><a href="area-do-filiado.php">Area do Filiado</a></li>
	                            <li><a href="midias-sociais.php">Mídias sociais</a></li>
                                <li><a href="novo-na-midia.php">Novo na mídia</a></li>
                                <li><a href="agenda.php">Agenda de<br>Eventos</a></li>
                            </ul>
                        </li>
                        <li><a href="fale-com-a-gente.php">fale com a gente</a></li>
                        <li class="last"><a href="http://www.lojanovo.com.br" target="_blank">loja</a></li>
                        <div class="clear"></div>
                    </ul>
                </nav>
                <!-- <a href="filie-se.php" class="bt-filiese"><img src="images/bt-filiase.png" alt="Cliquei aqui e filie-se ao partido novo "></a> -->
                <a href="https://novo.org.br/filie-se.php" class="bt-filiese"><img src="images/bt-filiase.bkp.png" alt="Cliquei aqui e filie-se ao partido novo "></a>
            </header>
            <a href="index.php" class="logo"><img src="images/logo.png" alt="Logo do Partido Novo"></a>
            <?php $page = basename($_SERVER['PHP_SELF']); ?>

            <?php if($page == 'index.php') : ?>
            <aside style="top: 80px; right: 200px;">
                <div class="facebook">
                    <div class="fb-like" data-href="https://www.facebook.com/partidonovo" data-layout="standard" data-width="260" data-action="like" data-show-faces="false" data-share="false"></div>
                </div>
            </aside>
            <aside style="top: 510px; right: 665px;">
                <ul class="midias-sociais">
                    <li class="facebook"><a href="https://www.facebook.com/partidonovo"><img src="images/midias-facebook.png" alt="Facebook"></a></li>
                    <li class="twitter"><a href="http://www.twitter.com/partidonovo30"><img src="images/midias-twitter.png" alt="twitter"></a></li>
                    <li class="instagram"><a href="http://instagram.com/partidonovo"><img src="images/midias-instagram.png" alt="instagram"></a></li>
                </ul>
            </aside>
            <?php else : ?>
            <aside>
                <div class="vote-30"> <img src="images/header-vote30.png" alt="Vote 30"> </div>
                <div class="facebook">
                    <div class="fb-like" data-href="https://www.facebook.com/partidonovo" data-layout="standard" data-width="260" data-action="like" data-show-faces="false" data-share="false"></div>
                </div>
                <ul class="midias-sociais">
                    <li class="facebook"><a href="https://www.facebook.com/partidonovo"><img src="images/midias-facebook.png" alt="Facebook"></a></li>
                    <li class="twitter"><a href="http://www.twitter.com/partidonovo30"><img src="images/midias-twitter.png" alt="twitter"></a></li>
                    <li class="instagram"><a href="http://instagram.com/partidonovo"><img src="images/midias-instagram.png" alt="instagram"></a></li>
                </ul>
            </aside>
            <?php endif; ?>

       
     