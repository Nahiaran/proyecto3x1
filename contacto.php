<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: '."logindata.php");
}
/*else {
    require_once 'vendor/autoload.php';
    $loader = new Twig_Loader_Filesystem('templates');
    $twig = new Twig_Enviroment($loader);

}*/
?>
<html>
<title>Proyecto 3x1</title>
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
    <img src="img/logo.jpg" alt="tresporuno" width="80" height="80" class="w3-left">
    <div class="w3-col s8 w3-bar w3-left" >
      <span>
          <?php
          echo "Bienvenid@ ".$_SESSION["usuario"];
          ?>
      </span><br>
      <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="logout.php" class="w3-bar-item w3-button"><i class="fa fa-power-off"></i></a>
    </div>
</div>





<!-- Page content -->
<div class="w3-content" style="max-width:1100px;">

  <!-- Contacto -->
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


<footer class="w3-container w3-center w3-margin-bottom">
  <h5>Encuentranos</h5>
  <div class="w3-xlarge w3-opacity w3-padding-16">
    <a href='https://www.facebook.com/igornoava' class="fa fa-facebook-official w3-hover-opacity" target="_blank"></a>
    <a href='https://www.instagram.com/ionuts_go' class="fa fa-instagram w3-hover-opacity" target="_blank"></a>
    <a href="" class="fa fa-snapchat w3-hover-opacity" target="_blank"></a>
    <a href="https://www.pinterest.es/luknaran" class="fa fa-pinterest-p w3-hover-opacity" target="_blank"></a>
    <a href='https://www.twitter.com/ionuts_go' class="fa fa-twitter w3-hover-opacity" target="_blank"></a>
    <a href="https://www.linkedin.com/in/andoni-casc%C3%A1n-suarez-00a090165/" class="fa fa-linkedin w3-hover-opacity" target="_blank"></a>
    </div>
    <div class="w3-xlarge w3-padding-16">
    <p align="center"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d710.6017032920709!2d-2.4895689738374682!3d43.17941552214547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4e2af11dbef7c1%3A0x20aa700eba1961ca!2sGipuzkoako+Ingeniaritza+Eskola.+Eibarko+atala+-+Escuela+de+Ingenier%C3%ADa+de+Gipuzkoa.+Secci%C3%B3n+Eibar+UPV%2FEHU!5e1!3m2!1ses!2ses!4v1549283901779" width="600" height="450" allowfullscreen></iframe>
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
