<?php
session_start();
if (isset($_SESSION['usuario'])) {
  echo "Sesion inicializada";
}
else {
    require_once 'vendor/autoload.php';
    $loader = new Twig_Loader_Filesystem('templates');
    $twig = new Twig_Enviroment($loader);
    
}
?>