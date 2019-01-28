<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: '."login.html");
}
/*else {
    require_once 'vendor/autoload.php';
    $loader = new Twig_Loader_Filesystem('templates');
    $twig = new Twig_Enviroment($loader);

}*/
?>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.myLink {display: none}
</style>
<body class="w3-light-grey">

<!-- Navigation Bar -->
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
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
  <img  src="img/london2.jpg" alt="Londres" width="1500" height="700">
  <div class="w3-display-middle" style="width:65%">
    <div class="w3-bar w3-black">
      <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Vuelos');"><i class="fa fa-plane w3-margin-right"></i>Vuelos</button>
      <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Hoteles');"><i class="fa fa-bed w3-margin-right"></i>Hoteles</button>
    </div>

    <!-- Tabs -->
    <div id="Vuelos" class="w3-container w3-white w3-padding-16 myLink">
      <h3>Viaja con nosotros</h3>
      <div class="w3-row-padding" style="margin:0 -16px;">
        <div class="w3-half">
          <label>Origen</label>
          <input class="w3-input w3-border" type="text" placeholder="Salida desde">
        </div>
        <div class="w3-half">
          <label>Destino</label>
          <input class="w3-input w3-border" type="text" placeholder="Llegada a">
        </div>
      </div>
      <p><button class="w3-button w3-dark-grey">Buscar fechas</button></p>
    </div>

    <div id="Hoteles" class="w3-container w3-white w3-padding-16 myLink">
      <h3>Encuentra los mejores Hoteles</h3>
      <p>Reserva con nosotros y recibe las mejores tarifas y promociones.</p>
      <p>Conocemos hoteles - conocemos el comfort.</p>
      <p><button class="w3-button w3-dark-grey">Buscar Hoteles</button></p>
    </div>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px;">

  <!-- Good offers -->
  <div class="w3-container w3-margin-top">
    <h3>Mejores ofertas</h3>
    <h6>Hasta <strong>45%</strong> de descuento.</h6>
  </div>
  <div class="w3-row-padding w3-text-white w3-large">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
        <img src="img/cinqueterre.jpg" alt="Cinque Terre" style="width:100%">
        <span class="w3-display-bottomleft w3-padding">Cinque Terre</span>
      </div>
    </div>
    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="img/newyork2.jpg" alt="Nueva York" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Nueva York</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="img/sanfran.jpg" alt="San Francisco" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">San Francisco</span>
          </div>
        </div>
      </div>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="img/pisa.jpg" alt="Pisa" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Pisa</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="img/paris.jpg" alt="Paris" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Paris</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Explore Nature -->
  <div class="w3-container">
    <h3>Explora la naturaleza</h3>
    <p>Viaja con nosotros y contempla la naturaleza en su máxima expresión.</p>
  </div>
  <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <img src="img/ocean2.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Costa Oeste, Noruega</h3>
        <p class="w3-opacity">Ida y vuelta desde 74€</p>
        <!-- <p></p> -->
        <button class="w3-button w3-margin-bottom">Comprar Tickets</button>
      </div>
    </div>
    <div class="w3-half w3-margin-bottom">
      <img src="img/mountains2.jpg" alt="Austria" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Montañas, Austria</h3>
        <p class="w3-opacity">Ida desde 34€</p>
         <!-- <p></p> -->
        <button class="w3-button w3-margin-bottom">Comprar Tickets</button>
      </div>
    </div>
  </div>

  <!-- Newsletter -->
  <div class="w3-container">
    <div class="w3-panel w3-padding-16 w3-black w3-opacity w3-card w3-hover-opacity-off">
      <h2>Sé el primero en enterarte de las mejores ofertas</h2>
      <p>Únete a nuestra newsletter.</p>
      <label>E-mail</label>
      <input class="w3-input w3-border" type="text" placeholder="Tu dirección de Email">
      <button type="button" class="w3-button w3-red w3-margin-top">Suscríbete</button>
    </div>
  </div>
  
  <!-- Contact -->
  <div class="w3-container">
    <h2>Contacto</h2>
    <p>Permítanos reservar su próximo viaje!</p>
    <i class="fa fa-map-marker" style="width:30px"></i> Elgoibar, ES<br>
    <i class="fa fa-phone" style="width:30px"></i> Teléfono: +34 696969696<br>
    <i class="fa fa-envelope" style="width:30px"> </i> Email: info@3x1.com<br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Nombre" required name="Nombre"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Mensaje" required name="Mensaje"></p>
      <p><button class="w3-button w3-black w3-padding-large" type="submit">Enviar Mensaje</button></p>
    </form>
  </div>
  
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-center w3-opacity w3-margin-bottom">
  <h5>Encuentranos</h5>
  <div class="w3-xlarge w3-padding-16">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</footer>

<script>
// Tabs
function openLink(evt, linkName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("myLink");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(linkName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}

// Click on the first tablink on load
document.getElementsByClassName("tablink")[0].click();
</script>

</body>
</html>