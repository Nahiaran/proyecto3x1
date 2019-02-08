<?php
session_start();
if(!isset($_SESSION['usuario'])){
	header('location: logindata.php');
	}
$error=''; // Variable para almacenar el mensaje de error
if (isset($_POST['editar'])) {
if (empty($_POST['pass_vieja']) || empty($_POST['pass_nueva'])) {
$error = "Debes rellenar todos los campos";
}
else
{
$usuario=$_SESSION['usuario'];
$pass_nueva=$_POST['pass_nueva'];
$pass_vieja=$_POST['pass_vieja'];
$hash_nuevo=password_hash($pass_nueva, PASSWORD_DEFAULT);
$email=$_POST['email'];

include ("conexion.php");

$selectpass = "SELECT pass_usuario FROM usuarios WHERE usuario='$usuario'";
$result = mysqli_query($conn, $selectpass);
$row = mysqli_fetch_array($result, MYSQLI_NUM);

$hash = $row[0];
if (password_verify($pass_vieja, $hash)) {
  $updatepass = "UPDATE usuarios SET pass_usuario='$hash_nuevo' WHERE usuario='$usuario'";
  $query = $conn->query($updatepass);
  header('location: index.php');
  }
else {
  $error = "La contraseña no coincide con la actual";
}
}
}
?>
