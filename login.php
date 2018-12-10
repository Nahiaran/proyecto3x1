<?php

//Leer desde el formulario (login.html)
//input: user / password
$user = $_POST["user"];
$user_password = $_POST["user_password"];

//echo $user . "<br>";  (pa probar)
//echo $password;  (pa probar)

//conect to mysql (TABLA:users, COLUMNAS:name/password)

$servername = "localhost";
$username = "root";
$password = "root";
$db = "web";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "YAS";

// select from user where ....
$query = "SELECT name FROM users WHERE name='$user' AND password='$user_password'";
//$query = "SELECT * FROM users WHERE user='$user' AND password='$user_password'";
//echo $query;
$result = mysqli_query($conn, $query);
/* numeric array */
$row = mysqli_fetch_array($result, MYSQLI_NUM);
echo $row[0];
//printf ("%s (%s)\n", $row[0], $row[1]);
// if ok go to loginok.html
if ($row) {
    echo "Login OK";
} else {
    echo "Login KO";
}
// if not ok return to login.html
