<?php
session_start();
if(!isset($_SESSION['usuario'])){
	header('location: logindata.php');
	}
$error=''; // Variable para almacenar el mensaje de error
if (isset($_POST['delete'])) {
if (empty($_POST['usuario']) || empty($_POST['pass_usuario'])) {
$error = "Debes rellenar todos los campos";
}
else
{
$usuario=$_POST['usuario'];
$pass_usuario=$_POST['pass_usuario'];

include ("conexion.php");

$selectpass = "SELECT pass_usuario FROM usuarios WHERE usuario='$usuario'";
//$selectmail = "SELECT email FROM usuarios WHERE usuario='$usuario'";
$result1 = mysqli_query($conn, $selectpass);
//$result2 = mysqli_query($conn, $selectmail);
$row1 = mysqli_fetch_array($result1, MYSQLI_NUM);
//$row2 = mysqli_fetch_array($result2, MYSQLI_NUM);

$hash = $row1[0];
if (password_verify($pass_usuario, $hash)) {
  $deleteuser = "DELETE FROM usuarios WHERE usuario='$usuario'";
  $query = $conn->query($deleteuser);
  header('location: logout.php');
  }
else {
  $error = "Los datos no coinciden con nuestra Base de Datos";
}
}
}
?>