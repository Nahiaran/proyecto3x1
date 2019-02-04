<?php
include ("registrar.php"); 
?>
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

<h1>Formulario de registro</h1>
<div class="header agile">
	<div class="wrap">
		<div class="login-main wthree">
			<div class="login">
			<h3>Registrar</h3>
			<form action="#" method="POST">
				<input type="text" placeholder="Usuario" required minlength="4" maxlength="20" name="usuario">
        <input type="password" placeholder="Contraseña" name="pass_usuario" minlength="6" maxlength="30" id="contra"><br>
        <input type="checkbox" onclick="miFuncion()">Mostrar Contrase&ntildea
            <script>
            function miFuncion() {
           var x = document.getElementById("contra");
            if (x.type === "password") {
                x.type = "text";
             } else {
                x.type = "password";
              }
           }
    </script>
        <input name="email" placeholder="Email" type="text">
        <input name="registrar" type="submit" value="Registrarme">
        <div class="clear"> </div>
        <span><?php echo $error; ?></span>
        <br><br>Ya est&aacutes registrado?
        <a href="logindata.php" class="text-center">Iniciar Sesión</a>
			</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>