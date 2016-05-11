                <h1 class="titulo l-43-helvetica-b-cn">Valores</h1>
                <div class="lista">
                    <div class="cada laranja first">
                        <h2 class="tit b-25-helvetica"> LIBERDADES <br>INDIVIDUAIS COM<br>RESPONSABILIDADE</h2>
                        <img src="images/valores-icone-1.png" class="img" alt="icone Liberdade">
                    </div>
                    <div class="cada azul">
                        <h2 class="tit b-25-helvetica"> INDIVÍDUO COMO<br> ÚNICO GERADOR DE<br> RIQUEZAS</h2>
                        <img src="images/valores-icone-2.png" class="img" alt="icone Riquizas">
                    </div>
                    <div class="cada laranja last">
                        <h2 class="tit b-25-helvetica"> TODOS SÃO<br> IGUAIS PERANTE<br> A LEI</h2>
                        <img src="images/valores-icone-3.png" class="img" alt="icone Lei">
                    </div>

                    <div class="cada azul first">
                        <h2 class="tit b-25-helvetica"> LIVRE<br> MERCADO</h2>
                        <img src="images/valores-icone-4.png" class="img" alt="icone Livre">
                    </div>
                    <div class="cada laranja">
                        <h2 class="tit b-25-helvetica"> INDIVÍDUO<br> COMO AGENTE<br> DE MUDANÇAS</h2>
                        <img src="images/valores-icone-5.png" class="img" alt="icone Indivíduo">
                    </div>
                    <div class="cada azul last">
                        <h2 class="tit b-25-helvetica"> VISÃO DE<br> LONGO<br> PRAZO</h2>
                        <img src="images/valores-icone-6.png" class="img" alt="icone Visão">
                    </div>
                </div>
                <div class="seta"></div>    

                <div class="cont-completo">
                
                    <div class="bt-fechar">X</div>

                    <div class="main">
                        <div class="secao">
                            <div class="tit">LIBERDADES INDIVIDUAIS<br> COM RESPONSABILIDADE</div>
                            <p class="txt">
                                Acreditamos no valor fundamental das liberdades individuais, incluindo direitos e deveres.
                            </p>
                            <div class="bts">
                                <div class="bt-next">></div>
                            </div>
                        </div>
                        <div class="secao">
                            <div class="tit">INDIVÍDUO COMO ÚNICO<br> GERADOR DE RIQUEZAS</div>
                            <p class="txt">
                                Os recursos do Estado serão sempre oriundos dos impostos pagos pelos indivíduos. Os serviços públicos ofertados nunca são gratuitos.
                            </p>
                            <div class="bts">
                                <div class="bt-prev"><</div>
                                <div class="bt-next">></div>
                            </div>
                        </div>
                        <div class="secao">
                            <div class="tit">TODOS SÃO IGUAIS<br> PERANTE A LEI</div>
                            <p class="txt">
                                O NOVO defende com vigor o princípio da igualdade. Respeitamos uma hierarquia das normas e de um sistema institucional no qual todo e qualquer indivíduo é submetido ao direito e às leis de forma isonômica, sem privilégios.
                            </p>
                            <div class="bts">
                                <div class="bt-prev"><</div>
                                <div class="bt-next">></div>
                            </div>
                        </div>
                         <div class="secao">
                            <div class="tit">LIVRE MERCADO</div>
                            <p class="txt">
                                Acreditamos que no livre mercado - onde as trocas são feitas de maneira espontânea - os serviços são melhores do que aqueles ofertados pelo Estado, dados os mesmos custos.
                            </p>
                            <div class="bts">
                                <div class="bt-prev"><</div>
                                <div class="bt-next">></div>
                            </div>
                        </div>
                         <div class="secao">
                            <div class="tit">INDIVÍDUO COMO <br>AGENTE DE MUDANÇAS</div>
                            <p class="txt">
                                As mudanças e reformas que queremos promover têm o indivíduo, através da sua atuação e do voto consciente, como principal responsável. O direito de criticar deve ter como contrapartida o dever de participar.
                            </p>
                            <div class="bts">
                                <div class="bt-prev"><</div>
                                <div class="bt-next">></div>
                            </div>
                        </div>
                         <div class="secao">
                            <div class="tit">VISÃO DE <br>LONGO PRAZO</div>
                            <p class="txt">
                                O NOVO acredita que é necessário resgatar a cultura e o pensamento de longo prazo na administração pública. As oportunidades, desafios e vocações de um país devem ser avaliados por uma perspectiva de tempo que ultrapasse as próximas eleições. É dever do gestor público não onerar as futuras gerações.
                            </p>
                            <div class="bts">
                                <div class="bt-prev"><</div>
                            </div>
                        </div>
                    </div>

                </div>


<script>

 /*Navegação horizotal*/
largura_browser = $(window).width()


 $('.valores .lista .cada').click(function(){
        altura_ada = $('.valores .lista ').height() -20
        var posicao = $(this).index() + 1
        console.log(posicao)

        $('.cont-completo').height(''+altura_ada+'').fadeIn()
        $('.cont-completo .secao:nth-child('+posicao+')').addClass('secao-active').css('left','0px')
        $('.cont-completo .secao:nth-child('+posicao+')').next().addClass('secao-next').css('left',''+largura_browser+'px')
        $('.cont-completo .secao:nth-child('+posicao+')').prev().addClass('secao-prev').css('left','-'+largura_browser+'px')

        altura_titulo = $('.titulo').height()
        $('#areas-de-atuacao .cont-completo').css({
            top: altura_titulo + 15
        })


    })



$('.bt-fechar').click(function(){
        $('.cont-completo').fadeOut()
        
        $('.secao').css('left','0')

        $('.secao-active').removeClass('secao-active')
        $('.secao-next').removeClass('secao-next')
        $('.secao-prev').removeClass('secao-prev')

    })
   
    $('.secao-next').css({
        left: largura_browser
    })


    $('.bt-next').click(function(){
      $('.secao-prev').removeClass('secao-prev')
      $('.secao-active').removeClass('secao-active').addClass('secao-prev')
      $('.secao-next').removeClass('secao-next').addClass('secao-active')
      $(this).parents('.secao').next().next().addClass('secao-next')

      $(this).parents('.secao').animate({
        left:-largura_browser
      },500)

      $(this).parents('.secao').next().animate({
        left:0
      },500)

      $('.secao-next, secao-active').show()
      $('.secao-next').css({
        left: largura_browser
      })

    })


    $('.bt-prev').click(function(){
      $('.secao-next').removeClass('secao-next')
      $('.secao-active').removeClass('secao-active').addClass('secao-next')
      $('.secao-prev').removeClass('secao-prev').addClass('secao-active')
      $(this).parents('.secao').prev().prev().addClass('secao-prev')

      $(this).parents('.secao').animate({
        left:largura_browser
      },500)

      $(this).parents('.secao').prev().animate({
        left:0
      },500)
      $('.secao-prev').css('left','-'+largura_browser+'px')
    })

</script>