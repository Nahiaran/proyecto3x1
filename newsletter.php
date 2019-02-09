<?php
session_start();
if(!isset($_SESSION['usuario'])){
	header('location: logindata.php');
	}
$success='';	
$error=''; // Variable para almacenar el mensaje de error
if (isset($_POST['news'])) {
if (empty($_POST['email'])) {
$error = "Debes ingresar un correo electrónico";
}
else
{

$email=$_POST["email"];

include ("conexion.php");

$selectmail = "SELECT * FROM newsletter WHERE email='$email'";
$result = mysqli_query($conn, $selectmail);
$count = mysqli_num_rows($result);

if ($count == 0) {
	$insert = "INSERT INTO newsletter VALUES ('$email')";
	//echo $insert;
	$query = $conn -> query("$insert");
	$success = "Email registrado en nuestra newsletter.";
}
else {
	$error = "Este email ya está inscrito en nuestro boletín.";
}
}
}
?>