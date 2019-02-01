<html>
<head>
    <title>Paises más visitados en 2018</title>
    <script type="text/javascript" src=amcharts.js></script>
    <script type="text/javascript" src=serial.js></script>
    <script type="text/javascript" src=dataloader.min.js></script>
    
<H2 align="center"> PAISES MÁS VISITADOS EN 2018 </H2>
<H4 align="center"> total de turistas en millones </H4>

</head>
<body>
Millones
<div id="chartdiv" style="width: 100%; height: 70%;" ></div>
    <script type="text/javascript">

AmCharts.makeChart( "chartdiv", {
  "type": "serial",
  "dataLoader": {
       "url": 'data.php',
       "format": "json"
},

  "categoryField": "nombre",
  "rotate": false,
  

  "categoryAxis": {
    "gridPosition": "start",
    "axisColor": "#DADADA"}, //linea base  
  "valueAxes": [ {
    "axisAlpha": 0.3
  } ],
  "graphs": [ {
    "type": "column",
    "title": "Turistas",
    "valueField": "visitantes",
    "lineAlpha": 0,
    "fillColors": "#bdbafc", //COLOR columnas #ADD981
    "fillAlphas": 0.9,
    "balloonText": "[[title]] en [[category]] en 2018:<b>[[value]] millones</b>" //dentro de los globos
  } ]
} );
</script>
</body>
</html>