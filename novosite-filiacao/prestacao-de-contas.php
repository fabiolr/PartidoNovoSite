<?php include("_head.inc.php") ?>

    <?php //$items = simplexml_load_file("http://novo.org.br/admin/gera_xml_evento.php"); ?>

    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        
          google.load("visualization", "1", {packages:["treemap"]});
          google.setOnLoadCallback(drawChart);
        
      
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
                  ['Conta', 'Parent', 'Valor', 'Cor'],
                  ['Despesas em Janeiro de 2015 (em milhares de reais)', null, 0, 0],
                  ['Jurídico, Contabilidade, Tecnologia (16)', 'Despesas em Janeiro de 2015 (em milhares de reais)', 16, 16],
                  ['Recursos Humanos (13)', 'Despesas em Janeiro de 2015 (em milhares de reais)', 13, 13],
                  ['Diversos (6)',    'Despesas em Janeiro de 2015 (em milhares de reais)', 6, 6],
                  ['Estrutura Operacional (4)', 'Despesas em Janeiro de 2015 (em milhares de reais)', 4, 4],
                  ['Publicidade, Website, Material Gráfico e Audiovisual (0,25)', 'Despesas em Janeiro de 2015 (em milhares de reais)', 0.250, 0.250],
                  ['Treinamento e Capacitação (0)', 'Despesas em Janeiro de 2015 (em milhares de reais)', 0, 0],
                  ['Eventos de Divulgação (0)', 'Despesas em Janeiro de 2015 (em milhares de reais)', 0, 0]  
                ]);

            tree = new google.visualization.TreeMap(document.getElementById('chart_div1'));
        
            var options = {
              minColor: 'ffd3d3',
              midColor: 'ff8080',
              maxColor: 'fd0101',
              headerHeight: 35,
              fontColor: 'black',
           generateTooltip: showFullTooltip,
              showScale: false
        };
        
            tree.draw(data, options);
        
          function showFullTooltip(row, size, value) {
        return '<div style="background:#fd9; padding:10px; border-style:solid; position: relative; z-index: 999999999;">' +
               '<span style="font-family:Courier"><b>' + data.getValue(row, 0) + '</span><br>' +
               ' Valor gasto em Janeiro (Em milhares de reais): ' + data.getValue(row, 2) + ' </div>';
      }
        
        
          }
    </script>

    <script type="text/javascript">
        
          google.load("visualization", "1", {packages:["treemap"]});
          google.setOnLoadCallback(drawChart);
        
      
          function drawChart() {
             var data = google.visualization.arrayToDataTable([
                  ['Conta', 'Parent', 'Valor', 'Cor'],
                  ['Despesas Acumuladas em 2015 (em milhares de reais)', null, 0, 0],
                  ['Jurídico, Contabilidade, Tecnologia (16)', 'Despesas Acumuladas em 2015 (em milhares de reais)', 16, 16],
                  ['Recursos Humanos (13)', 'Despesas Acumuladas em 2015 (em milhares de reais)', 13, 13],
                  ['Diversos (6)',    'Despesas Acumuladas em 2015 (em milhares de reais)', 6, 6],
                  ['Estrutura Operacional (4)', 'Despesas Acumuladas em 2015 (em milhares de reais)', 4, 4],
                  ['Publicidade, Website, Material Gráfico e Audiovisual (0,25)', 'Despesas Acumuladas em 2015 (em milhares de reais)', 0.250, 0.250],
                  ['Treinamento e Capacitação (0)', 'Despesas Acumuladas em 2015 (em milhares de reais)', 0, 0],
                  ['Eventos de Divulgação (0)', 'Despesas Acumuladas em 2015 (em milhares de reais)', 0, 0]  
                ]);
          
            tree = new google.visualization.TreeMap(document.getElementById('chart_div2'));
        
          var options = {
              minColor: 'ffd3d3',
              midColor: 'ff8080',
              maxColor: 'fd0101',
              headerHeight: 35,
              fontColor: 'black',
          generateTooltip: showFullTooltip,
              showScale: false
        };
        
            tree.draw(data, options);
        
            function showFullTooltip(row, size, value) {
        return '<div style="background:#fd9; padding:10px; border-style:solid; position: relative; z-index: 999999999;">' +
               '<span style="font-family:Courier"><b>' + data.getValue(row, 0) + '</span><br>' +
               ' Valor gasto em Janeiro (Em milhares de reais): ' + data.getValue(row, 2) + ' </div>';
      }
        
          }
    </script>

    <script type="text/javascript">
        
          google.load("visualization", "1", {packages:["treemap"]});
          google.setOnLoadCallback(drawChart);
        
      
          function drawChart() {
             var data = google.visualization.arrayToDataTable([
                  ['Conta', 'Parent', 'Valor', 'Cor'],
                  ['Receitas em Janeiro de 2015 (em milhares de reais)', null, 0, 0],
                  ['Doações pelo Site (6)', 'Receitas em Janeiro de 2015 (em milhares de reais)', 6, 6],
                  ['Doações em Eventos (1)', 'Receitas em Janeiro de 2015 (em milhares de reais)', 1, 1],
                  ['Outras Fontes de Recursos (Loja, empréstimos, investimentos) (4)', 'Receitas em Janeiro de 2015 (em milhares de reais)', 4, 4]
                ]);

            tree = new google.visualization.TreeMap(document.getElementById('chart_div3'));
        
          var options = {
              minColor: '#d8e7ff',
              midColor: '#77aaff',
              maxColor: '#0663fe',
              headerHeight: 35,
              fontColor: 'black',
          generateTooltip: showFullTooltip,
              showScale: false
        };
        
            tree.draw(data, options);
        
          
            function showFullTooltip(row, size, value) {
        return '<div style="background:#fd9; padding:10px; border-style:solid; position: relative; z-index: 999999999;">' +
               '<span style="font-family:Courier"><b>' + data.getValue(row, 0) + '</span><br>' +
               ' Valor gasto em Janeiro (Em milhares de reais): ' + data.getValue(row, 2) + ' </div>';
      }
          }
    </script>

    <script type="text/javascript">
        
          google.load("visualization", "1", {packages:["treemap"]});
          google.setOnLoadCallback(drawChart);
        
      
          function drawChart() {
              var data = google.visualization.arrayToDataTable([
                  ['Conta', 'Parent', 'Valor', 'Cor'],
                  ['Receitas Acumuladas em 2015 (em milhares de reais)', null, 0, 0],
                  ['Doações pelo Site (6)', 'Receitas Acumuladas em 2015 (em milhares de reais)', 16, 16],
                  ['Doações em Eventos (1)', 'Receitas Acumuladas em 2015 (em milhares de reais)', 11, 11],
                  ['Outras Fontes de Recursos (Loja, empréstimos, investimentos) (4)', 'Receitas Acumuladas em 2015 (em milhares de reais)', 14, 14]
                ]);

            tree = new google.visualization.TreeMap(document.getElementById('chart_div4'));
        
            var options = {
              minColor: '#d8e7ff',
              midColor: '#77aaff',
              maxColor: '#0663fe',
              headerHeight: 35,
              fontColor: 'black',
          generateTooltip: showFullTooltip,
              showScale: false
        };
        
            tree.draw(data, options);
        
          
            function showFullTooltip(row, size, value) {
        return '<div style="background:#fd9; padding:10px; border-style:solid; position: relative; z-index: 999999999;">' +
               '<span style="font-family:Courier"><b>' + data.getValue(row, 0) + '</span><br>' +
               ' Valor gasto em Janeiro (Em milhares de reais): ' + data.getValue(row, 2) + ' </div>';
      }
          }
    </script>

    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
      
      var data = new google.visualization.DataTable();

      data.addColumn('string', 'Name');
      data.addColumn('number', 'Receita');
      data.addColumn('number', 'Despesa');
      data.addColumn('number', 'Superavit/Deficit');
      data.addColumn({type: 'string', role: 'style'});
      data.addColumn({type: 'number', role: 'annotation'});

      data.addRows([
        ['Janeiro/2015', 53, 50, 3, 'point { fill-color: blue', 3],
        ['Fevereiro/2015', 71, 60, 7, 'point { fill-color: blue', 7],
        ['Março/2015', 36, 70, -10, 'point { fill-color: red', -10],
        ['Abril/2015', 42, 50, -13, 'point { fill-color: red', -13],
      ]);

        var options = {
          legend: {position: 'top', alignment: 'star'}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div5'));
        chart.draw(data, options);
      }
    </script>
    
    <div class="interna participe">
        
        <?php include("_header.inc.php") ?>        

            <div class="txt-header">
                <h1 class="tit-header">Participe</h1>
                <p>O Brasil precisa do NOVO.<br>O NOVO precisa de você.</p>
            </div>
        
        </div><!-- header -->   

        <section class="chamada-banner">
            <div id="slides">
                <div class="banner1"></div>
            </div>
        </section>

        <?php include("_bt-filiarse.inc.php") ?>

        <section class="sec-a prestacao">
            <div class="fix">
                <h1 class="titulo l-40-helvetica-b-cn">Prestação de contas</h1>
                <div class="lista p-15">
                    <h2 style="margin: 0 0 10px 0;">DESPESAS</h2>
                    <div id="chart_div1" style="width: 50%; float: left;"></div>
                    <div id="chart_div2" style="width: 50%; float: left;"></div>
                    <div style="clear: both;"></div>

                    <h2 style="margin: 20px 0 10px 0;">RECEITAS</h2>
                    <div id="chart_div3" style="width: 50%; float: left;"></div>
                    <div id="chart_div4" style="width: 50%; float: left;"></div>
                    <div style="clear: both;"></div>

                    <h2 style="margin: 20px 0 10px 0;">FINAL</h2>
                    <div id="chart_div5" style="width: 700px; margin: 0 auto;"></div>

                    <div style="clear: both;"></div>
                </div>
                <div class="seta"></div>
            </div>
        </section>

        <section class="menu-int">
            <div class="fix">
                <h1 class="titulo l-40-helvetica-b-cn">Participe</h1>
                <nav class="lista">
                    <a href="cadastro.php" class="cada laranja first">
                        <span class="tit b-18"> Cadastro</span>
                        <img src="images/menu-int-cadastro.png" class="img" alt="icone estatuto">
                    </a>
                    <a href="filie-se.php" class="cada azul ">
                        <span class="tit b-18"> Filiação</span>
                        <img src="images/menu-int-filiese.png" class="img" alt="icone filie-se">
                    </a>
                    <a href="sobre-doacao.php" class="cada laranja ">
                        <span class="tit b-18"> Doação</span>
                        <img src="images/menu-int-doacao.png" class="img" alt="icone passo a passo sobre a doação">
                    </a>
                    <a href="duvidas.php" class="cada azul ">
                        <span class="tit b-18"> Dúvidas</span>
                        <img src="images/menu-int-duvidas.png" class="img" alt="icone doe">
                    </a>
                    <a href="prestacao-de-contas.php" class="cada laranja last active ">
                        <span class="tit b-18"> prestação de contas</span>
                        <img src="images/menu-int-prestacao.png" class="img" alt="icone prestação de contas">
                    </a>
                </nav>
            </div>
        </section>

<?php include("_footer.inc.php") ?>


</body>
</html>