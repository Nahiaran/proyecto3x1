<?php
include ("delete.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Proyecto 3x1 - Eliminar Usuario</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>

<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Signika:400,600' rel='stylesheet' type='text/css'>

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.myLink {display: none}
</style>
</head>
<body class="w3-light-grey">
<!--//////////////////////////volver index-->
<div class="w3-bar w3-white w3-border-bottom w3-xlarge">
    <img src="img/logo.jpg" alt="tresporuno" width="70" height="80" class="w3-left">
    <div class="w3-col s8 w3-bar w3-left" >
      <span>
          <?php
          echo "Bienvenid@ ".$_SESSION["usuario"];
          ?>
      </span><br>
      <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i></a>
      <a href="userinfo.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="logout.php" class="w3-bar-item w3-button"><i class="fa fa-power-off"></i></a>
    </div>
</div>

<h1></h1>
<div class="header agile">
	<div class="wrap">
		<div class="login-main wthree">
			<div class="login">
			<h3>Eliminar usuario</h3>
			<form action="#" method="post">
        <input type="text" placeholder="Usuario" required name="usuario">
        <input type="password" placeholder="Contraseña" required name="pass_usuario">
        <input name="delete" type="submit" value="Borrar cuenta"><br><br>
		<div class="clear"> </div>
				<span><?php echo $error; ?></span>
    </div>
      </form>
			</div>
		</div>
	</div>
</div>
</body>
</html>