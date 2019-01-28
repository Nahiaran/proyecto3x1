<?php
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
?>