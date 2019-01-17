<?php
$usuario=$_POST["usuario"];
$contraseña=$_POST["pass_usuario"];
$hash=password_hash($contraseña, PASSWORD_DEFAULT);
$email=$_POST["email"];

$servername="localhost:3307";
$username="root";
$password="";
$dbname="proyecto3x1";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$insert = "INSERT INTO usuarios(usuario, pass_usuario, email) VALUES ('$usuario','$hash', '$email')";
//echo $insert;
$query = $conn -> query("$insert");
  
header('Location: hom.html');
?>