<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: '."login.html");
}
/*else {
    require_once 'vendor/autoload.php';
    $loader = new Twig_Loader_Filesystem('templates');
    $twig = new Twig_Enviroment($loader);

}*/

// Iniciando sesion
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
    session_start();
    $_SESSION['usuario'] = $usuario;
    header('Location: '."index.php");
}
else {
    // Invalid credentials
    header('Location: '.'login.html');
}