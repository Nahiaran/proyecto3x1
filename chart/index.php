<html>
<head>
    <title>Top ciudades 2018</title>
    <script type="text/javascript" src=amcharts.js></script>
    <script type="text/javascript" src=serial.js></script>
    <script type="text/javascript" src=dataloader.min.js></script>
    
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
</body>
</html>