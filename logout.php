<?php
session_start();
unset($_SESSION['usuario']);

header('Location: '."indexx.php");
?>