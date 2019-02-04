<?php 
include ("login.php"); 

if(isset($_SESSION['usuario'])){
	header('location: index.php');
	}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Proyecto 3x1 - Login</title>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Flat Login Form Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Signika:400,600' rel='stylesheet' type='text/css'>
<!--google fonts-->
</head>
<body>


<h1>Formulario de inicio de sesión</h1>
<div class="header agile">
	<div class="wrap">
		<div class="login-main wthree">
			<div class="login">
			<h3>Iniciar sesión</h3>
			<form action="#" method="post">
				<input type="text" placeholder="Usuario" required name="usuario" required>
				<input type="password" placeholder="Contraseña" name="pass_usuario" required>
        <input name="submit" type="submit" value="Ingresar"><br><br>
		<div class="clear"> </div>
				<span><?php echo $error; ?></span>
        <br><br>No est&aacutes registrado?
        <a href="registrardata.php" class="text-center">Reg&iacutestrate</a>
		</div>
			</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>