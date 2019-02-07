<HTML>
<HEAD>
<TITLE>Actualizar1.php</TITLE>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.myLink {display: none}
</style>
</HEAD>
<BODY>
<div align="center">
<h1>Actualizar un registro</h1>
<br>

<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
  <img  src="img/travel.jpg" alt="Londres" width="1500" height="700">
  <div class="w3-display-middle" style="width:65%">
    <div class="w3-bar w3-black">
      <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Vuelos');"><i class="fa fa-plane w3-margin-right"></i>Vuelos</button>
      <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Destinos');"><i class="fa fa-globe w3-margin-right"></i>Destinos</button>
    </div>
<!-- Tabs -->
<div id="Vuelos" class="w3-container w3-white w3-padding-16 myLink">
      <h3>Viaja con nosotros</h3>
      <div class="w3-row-padding" style="margin:0 -16px;">
        <div class="w3-half">
        <label>Origen</label>
        <?php
        include("conexion.php");

        echo '<form class="w3-container w3-card-4" method="POST" ACTION="actualizar2.php">Origen<br>';

        //Creamos la sentencia SQL y la ejecutamos
        $selectorigen = "SELECT DISTINCT origen FROM viajes ORDER BY origen";
        //echo $selectorigen;

        $result=mysqli_query($conn,$selectorigen);

        echo '<select class="w3-select w3-border" name="origen">';

         //Generamos el menu desplegable
         while ($row=mysqli_fetch_array($result))
         {echo '<option>'.$row["origen"];}
        ?>
        </select>
        </form>
        </div>
        <div class="w3-half">
          <label>Destino</label>
          <input class="w3-input w3-border" type="text" placeholder="Llegada a">
        </div>
      </div>
      <p><button class="w3-button w3-dark-grey">Buscar fechas</button></p>
    </div>












<?php
include("conexion.php");

echo '<form method="POST" ACTION="actualizar2.php">Origen<br>';

//Creamos la sentencia SQL y la ejecutamos
$selectorigen = "SELECT DISTINCT origen FROM viajes ORDER BY origen";
//echo $selectorigen;

$result=mysqli_query($conn,$selectorigen);

echo '<select class="w3-select w3-border" name="origen">';

//Generamos el menu desplegable
while ($row=mysqli_fetch_array($result))
{echo '<option>'.$row["origen"];}
?>
</select>

</form>
</div>

</BODY>
</HTML>