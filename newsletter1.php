<?php
include ("conexion.php");
if (isset($_POST['email'])) {
    header('Location: '."index.php");
}

$email = $_POST['email'];


$sql = "INSERT INTO newsletter (email) VALUES ('$email')";




?>
