<?php
session_start();
if(isset($_SESSION['usuario'])){
	header('location: index.php');
    }
$error=''; // Variable para almacenar el mensaje de error
if (isset($_POST['submit'])) {
if (empty($_POST['usuario']) || empty($_POST['pass_usuario'])) {
$error = "Ingrese todos los datos";
}
else
{
// Define $username y $password
$usuario=$_POST['usuario'];
$pass_usuario=$_POST['pass_usuario'];

include ("conexion.php");

// select from user where ....
$query = "SELECT pass_usuario FROM usuarios WHERE usuario='$usuario'";
//$query = "SELECT * FROM users WHERE user='$user' AND password='$user_password'";
//echo $query;

$result = mysqli_query($conn, $query);
 //numeric array 

$row = mysqli_fetch_array($result, MYSQLI_NUM);

$hash = $row[0];
if (password_verify($pass_usuario, $hash)) {
    // Success!
    $_SESSION['usuario'] = $usuario;
    header('location: index.php');
}
else {
    // Invalid credentials
    // header('Location: '.'logindata.php');
    $error = "El usuario o la contraseña son inválidos.";
}
}
}
?>