<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: '."../logindata.php");
}
?>

<html>
<head>
    <title>Top ciudades 2018</title>
    <script type="text/javascript" src=amcharts.js></script>
    <script type="text/javascript" src=serial.js></script>
    <script type="text/javascript" src=dataloader.min.js></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6,h7,h8,h9 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.myLink {display: none}
</style>


    <div class="w3-bar w3-white w3-border-bottom w3-xlarge">
    <img src="images/logo.jpg" alt="tresporuno" width="80" height="80" href='../index.php'>
    <div class="w3-col s8 w3-bar w3-right" >
      <span>
          <?php
          echo "Bienvenid@ ".$_SESSION["usuario"];
          ?>
      </span><br>
      <a href="../index.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="../logout.php" class="w3-bar-item w3-button"><i class="fa fa-power-off"></i></a>
    </div>
</div>

<style>
body {
  background-image: url("images/fly.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
}
</style>

<p align="center"> <font color="#727A82"><u><b><h7>Ciudades más visitadas en 2018</h7></b></u></p></font>
<p align="center"> <font color="#727A82"><b><h9>Total de turistas en millones</h9></b></p></font>
</head>
<body>

<div id="chartdiv" style="width: 100%; height: 69%;"></div>
    <script type="text/javascript">
AmCharts.makeChart( "chartdiv",
{
  "type": "serial",  //
  "theme": "light",
  "dataLoader": {
       "url": 'data.php',
       "format": "json"
},

"categoryField": "nombre",
"rotate": false,
"color" : "#727A82", //COLOR TEXTOS
"categoryAxis": {
  "gridPosition": "start",
  "axisAlpha": 0,
  "axisColor": "#727A82"  //linea base
},

  "valueAxes": [{  //gráfica vertical
    "axisAlpha": 0, //linea vertical
    "position": "left", //posición texto
    "title": "Millones" //texto izq
  }],
  "graphs": [ {
    "type": "column", //tipo gráfico
    "title": "Turistas", //nombre
    "valueField": "visitantes", //nombre del campo (bd)
    "lineAlpha": 0, //linea exterior columna si/no
    "fillColors": "grey",     //COLOR columnas     #ADD981 #bdbafc
    "fillAlphas": 0.6, //saturación columnas
    "balloonText": "[[title]] en [[category]] en 2018:<br><b>[[value]] millones</b>" //texto globo
  } ]
} );
</script>


<!-- End page content -->
<footer class="w3-container w3-center w3-opacity w3-margin-bottom">
  <h5>Encuentranos</h5>
  <div class="w3-xlarge w3-padding-16">
    <a href='https://www.facebook.com/igornoava' class="fa fa-facebook-official w3-hover-opacity" target="_blank"></a>
    <a href='https://www.instagram.com/ionuts_go' class="fa fa-instagram w3-hover-opacity" target="_blank"></a>
    <a href="" class="fa fa-snapchat w3-hover-opacity" target="_blank"></a>
    <a href="https://www.pinterest.es/luknaran" class="fa fa-pinterest-p w3-hover-opacity" target="_blank"></a>
    <a href='https://www.twitter.com/ionuts_go' class="fa fa-twitter w3-hover-opacity" target="_blank"></a>
    <a href="https://www.linkedin.com/in/andoni-casc%C3%A1n-suarez-00a090165/" class="fa fa-linkedin w3-hover-opacity" target="_blank"></a>
  </div>
</footer>
</body>
</html>

