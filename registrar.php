<?php
$usuario=$_POST["usuario"];
$contra=$_POST["pass_usuario"];
$hash=password_hash($contra, PASSWORD_DEFAULT);
$servername="localhost:3307";
$username="root";
$password="";
$dbname="proyecto3x1";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$insert = "INSERT INTO usuarios(usuario, contraseña) VALUES ('$usuario','$hash')";
//echo $insert;
$query = $conn -> query("$insert");
  
header('Location: home.html');
?>