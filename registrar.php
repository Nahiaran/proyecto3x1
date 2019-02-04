<?php
if(isset($_SESSION['usuario'])){
	header('location: index.php');
    }

$usuario=$_POST["usuario"];
$contraseña=$_POST["pass_usuario"];
$hash=password_hash($contraseña, PASSWORD_DEFAULT);
$email=$_POST["email"];

include ("conexion.php");

$insert = "INSERT INTO usuarios(usuario, pass_usuario, email) VALUES ('$usuario','$hash', '$email')";
//echo $insert;
$query = $conn -> query("$insert");
  
header('Location: index.php');
?>