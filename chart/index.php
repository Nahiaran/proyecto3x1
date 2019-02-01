<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: '."login.html");
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
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.myLink {display: none}
</style>


    <div class="w3-bar w3-white w3-border-bottom w3-xlarge">
  <a href="#" class="w3-bar-item w3-button w3-text-red w3-hover-red"><b><i class="fa fa-map-marker w3-margin-right"></i>Logo</b></a>
    <div class="w3-col s8 w3-bar w3-right" >
      <span>
          <?php
          echo "Bienvenido ".$_SESSION["usuario"];
          ?>
      </span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="logout.php" class="w3-bar-item w3-button"><i class="fa fa-power-off"></i></a>
    </div>
</div>

<style>
body {
  background-image: url("images/wing2.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;

}
</style>
</head>
<body>
<div id="chartdiv" style="width: 100%; height: 100%;"></div>
    <script type="text/javascript">


AmCharts.makeChart( "chartdiv", 
{
  "type": "serial",  //
  "theme": "light",
  
 
  "titles": [{
    "text": "Ciudades más visitadas en 2018"  //título
  }, {
    "text": "Total de turistas en millones", //subtítulo
    "bold": false //negrita no
  }],

  "dataLoader": {
       "url": 'data.php',  
       "format": "json"
},
  
"categoryField": "nombre",
"rotate": false,
"color" : "#FFFFFF", //COLOR TEXTOS 




"categoryAxis": {
  "gridPosition": "start",
  "axisAlpha": 0,
  "axisColor": "#FFFFFF"  //linea base  
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
    "fillColors": "white",     //COLOR columnas     #ADD981 #bdbafc
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
