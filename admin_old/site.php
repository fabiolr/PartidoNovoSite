<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Monitora Site</title>
<link href="../css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
session_start();
if(!session_is_registered('myusername')){
header("location:index.php");
}
?>
<table width="707" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="369"><img src="../img/logo_pq.png" width="150" height="54"></td>
    <td width="338" class="admin">Ol&aacute; <?php echo $_SESSION["myusername"];?><br>
    <a href="login_success.php">Voltar</a> | <a href="logout.php">Log Out</a></td>
  </tr>
</table>
<p>
  <!-- Add Google Analytics authorization button -->
  <button id="authorize-button" style="visibility: hidden">
        Authorize Analytics</button>

  <!-- Div element where the Line Chart will be placed -->
  <div id='line-chart-example'></div>

  <!-- Load all Google JS libraries -->
  <script src="https://www.google.com/jsapi"></script>
  <script src="gadash-1.0.js"></script>
  <script src="https://apis.google.com/js/client.js?onload=gadashInit"></script>
  <script>
    // Configure these parameters before you start.
    var API_KEY = 'AIzaSyAExks6EFr3FNj-Lt3JBzS-DqZ4QL1dAdw';
    var CLIENT_ID = '652613780970-dcaneejnugge2meet4jqnl1mn6qubhoj.apps.googleusercontent.com';
    var TABLE_ID = 'ga:42777613';
    // Format of table ID is ga:xxx where xxx is the profile ID.

    gadash.configKeys({
      'apiKey': API_KEY,
      'clientId': CLIENT_ID
    });

    // Create a new Chart that queries visitors for the last 30 days and plots
    // visualizes in a line chart.
    var chart1 = new gadash.Chart({
      'type': 'LineChart',
      'divContainer': 'line-chart-example',
      'last-n-days':30,
      'query': {
        'ids': TABLE_ID,
        'metrics': 'ga:visitors',
        'dimensions': 'ga:date'
      },
      'chartOptions': {
        height:600,
        title: 'Visits in January 2011',
        hAxis: {title:'Date'},
        vAxis: {title:'Visits'},
        curveType: 'function'
      }
    }).render();
  </script>
</body>
</html>
