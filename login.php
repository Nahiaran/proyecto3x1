<?php

//Leer desde el formulario (login.html)
//input: user / password
$user = $_POST["usuario"];
$user_password = $_POST["pass_usuario"];

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
$query = "SELECT usuario FROM usuarios WHERE usuario='$usuario' AND pass_usuario='$pass_usuario'";
//$query = "SELECT * FROM users WHERE user='$user' AND password='$user_password'";
//echo $query;

$result = mysqli_query($conn, $query);
/* numeric array */

$row = mysqli_fetch_array($result, MYSQLI_NUM);
//echo $row[0];
//printf ("%s (%s)\n", $row[0], $row[1]);
// if ok go to loginok.html
 if ($row) {
    header('Location: '."loginok.html");
    //echo "Login OK";
    // session
    $_SESSION['user'] = $user;
} else {
    // echo "Login KO";
    header('Location: '."login.html");
}
// if not ok return to login.html