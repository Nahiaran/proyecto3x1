<?php
session_start();
if(!isset($_SESSION['usuario'])){
	header('location: logindata.php');
	}
$error=''; // Variable para almacenar el mensaje de error
if (isset($_POST['editar'])) {
if (empty($_POST['pass_vieja']) || empty($_POST['email']) || empty($_POST['pass_nueva'])) {
$error = "Debes rellenar todos los campos";
}
else
{
$usuario=$_SESSION["usuario"];
$pass_nueva=$_POST["pass_nueva"];
$pass_vieja=$_POST["pass_vieja"];
$hash_viejo=password_hash($pass_vieja, PASSWORD_DEFAULT);
$hash_nuevo=password_hash($pass_nueva, PASSWORD_DEFAULT);
$email=$_POST["email"];


include ("conexion.php");

$selectpass="SELECT * FROM usuarios WHERE pass_usuario='$hash_viejo'";
$result = mysqli_query($conn, $selectpass);
$count = mysqli_num_rows($result);

if($count == 0)
{
  $updatepass="UPDATE 'usuarios' SET pass_usuario = $hash_nuevo WHERE 'usuario'= $usuario";
  $query=$conn->query('$updatepass');
  }
else
{
 $error = "NOPE";
}
}
}
?>
