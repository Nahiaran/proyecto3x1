<?php

//Leer desde el formulario (login.html)
//input: user / password
$usuario = $_POST["usuario"];
$pass_usuario = $_POST["pass_usuario"];

//echo $user . "<br>";  (pa probar)
//echo $password;  (pa probar)

//conect to mysql (TABLA:users, COLUMNAS:name/password)

$servername = "localhost:3307";
$username = "root";
$password = "";
$db = "proyecto3x1";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "YAS";

// select from user where ....
$query = "SELECT pass_usuario FROM usuarios WHERE usuario='$usuario'";
//$query = "SELECT * FROM users WHERE user='$user' AND password='$user_password'";
//echo $query;

$result = mysqli_query($conn, $query);
/* numeric array */

$row = mysqli_fetch_array($result, MYSQLI_NUM);

$hash = $row[0];
if (password_verify($pass_usuario, $hash)) {
    // Success!
    session_start();
    $_SEssion['usuario'] = $usuario;
    header('Location: '."hom.html");
}
else {
    // Invalid credentials
    echo header('Location: '.'login.html');
}
