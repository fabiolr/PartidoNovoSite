<footer class="footer">
            <div class="fix">
                <a href="index.php" class="logo"><img src="images/footer-logo.png" alt="logo Partido novo" ></a>
                <div class="bt-voltar-topo b-18-helvetica">de volta ao topo</div>
                <a href="http://zaw.com.br" target="_blank" class="assinatura"><img src="images/footer-logo-zaw.gif" alt="Zaw Comunicação "></a>
            </div>
        </footer>


    </div><!-- home -->

<script>
    
    /*active menu*/

    var array_path = window.location.pathname.split("/");
    var page_name = array_path[array_path.length - 1];

    $('a[href="'+ page_name +'"]').addClass("active");

    if(page_name == 'estatuto.php' || page_name == 'diretorios.php'){//colocar os subitens do menu
        $('.header nav > ul > li >  a[href="partido.php"]  ').addClass('active')//Colocar o nome do primeiro item do Menu dentro do href=""
    }
    if(page_name == 'desafios.php' || page_name == 'nossos-diferenciais.php'){
        $('.header nav > ul > li >  a[href="conheca.php"]  ').addClass('active')
    }
    if(page_name == 'filie-se.php' || page_name == 'cadastro.php' || page_name == 'sobre-doacao.php' || page_name == 'duvidas.php' || page_name == 'prestacao-de-contas.php' ){
        $('.header nav > ul > li >  a[href="cadastro.php"]  ').addClass('active')
    }
    if(page_name == 'midias-sociais.php' || page_name == 'eventos.php' || page_name == 'novo-na-midia.php' || page_name == 'agenda.php' ){
        $('.header nav > ul > li >  a[href="midias-sociais.php"]  ').addClass('active')
    }

    /*active menu*/



    $( ".header nav ul li " ).hover(
      function() {
        $( this ).addClass( "active" );
        $( this ).find('ul').stop().fadeIn()
      }, function() {
        $( this ).removeClass( "active" );
        $( this ).find('ul').stop().fadeOut()
      }
    );
   
    $('.bt-voltar-topo').click(function(){
        $('html, body').stop().animate({
            'scrollTop': 0
        }, 1200)
    })
</script>