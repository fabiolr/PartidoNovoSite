<?php include("_head.inc.php") ?>

    <div class="interna acompanhe">     

        <?php include("_header.inc.php") ?>        

            <div class="txt-header">
                <h1 class="tit-header" style="font-size:32px"> NOVO no Face </h1>
                <p>Confira aqui os posts do NOVO<br> da nossa página no Facebook.</p>
            </div>
        
        </div><!-- header -->

        <section class="chamada-banner">
            <div id="slides">
                <div class="banner1"></div>
            </div>
        </section>
        
        <?php include("_bt-filiarse.inc.php") ?>

        <div class="fix">
	<iframe src="https://novo30blog.wordpress.com/" style="width: 90%; height: 3200px" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0">
</iframe>
            
        </div>

        <section class="menu-int">
            
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