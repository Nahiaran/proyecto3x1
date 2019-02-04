<?php
session_start();
if(isset($_SESSION['usuario'])){
	header('location: index.php');
	}
$error=''; // Variable para almacenar el mensaje de error
if (isset($_POST['registrar'])) {
if (empty($_POST['usuario']) || empty($_POST['pass_usuario']) || empty($_POST['email'])) {
$error = "Debes rellenar todos los campos";
}
else
{

$usuario=$_POST["usuario"];
$pass_usuario=$_POST["pass_usuario"];
$hash=password_hash($pass_usuario, PASSWORD_DEFAULT);
$email=$_POST["email"];

include ("conexion.php");
$selectuser = "SELECT * FROM usuarios WHERE usuario='$usuario'";
$result = mysqli_query($conn, $selectuser);
$count = mysqli_num_rows($result);

if ($count == 0) {
	$insert = "INSERT INTO usuarios(usuario, pass_usuario, email) VALUES ('$usuario','$hash', '$email')";
	//echo $insert;
	$query = $conn -> query("$insert");
}
else {
	$error = "El usuario ya existe";
}
}
}
?>