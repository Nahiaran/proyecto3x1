<?php 
include ("login.php"); 
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Proyecto 3x1 - Login</title>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>

<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Signika:400,600' rel='stylesheet' type='text/css'>

</head>
<body>

<h1>Formulario de inicio de sesión</h1>
<div class="header agile">
		<div class="wrap">
				<div class="login-main wthree">
						<div class="login">
						<h3>Iniciar sesión</h3>
						<form action="#" method="post">
				<input type="text" placeholder="Usuario" required name="usuario">
				<input type="password" placeholder="Contraseña" name="pass_usuario">
				<input name="submit" type="submit" value="Ingresar"><br><br>
						<div class="clear"> </div>
						<span><?php echo $error; ?></span>
						<br><br>No est&aacutes registrado?
						<a href="registrardata.php" class="text-center">Regístrate</a>
						</div>
						</form>
				</div>
		</div>
</div>
</body>
</html>