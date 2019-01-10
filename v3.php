<html>
<head>
  <title>Mi primer ejemplo en Google Charts</title>
</head>

<script type="text/javascript" src="https://www.google.com/jsapi"></script> 
<script>
   google.load("visualization", "1", {packages:["corechart"]});
   google.setOnLoadCallback(dibujarGrafico);
   function dibujarGrafico() {
     // Tabla de datos: valores y etiquetas de la gráfica
     var data = google.visualization.arrayToDataTable([
       ['Texto', 'Valor numérico'],
       ['Texto1', 20.21],
       ['Texto2', 4.28],
       ['Texto3', 16.17],
       ['Texto4', 10.25]    
     ]);
     var options = {
       title: 'Nuestro primer ejemplo con Google Charts'
     }
     // Dibujar el gráfico
     new google.visualization.ColumnChart( 
     //ColumnChart sería el tipo de gráfico a dibujar
       document.getElementById('GraficoGoogleChart-ejemplo-1')
     ).draw(data, options);
   }
 </script> 
<body>
Comenzando con Google Charts....
<div id="GraficoGoogleChart-ejemplo-1" style="width: 800px; height: 600px">
</div>
</body>
</html>