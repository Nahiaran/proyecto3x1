<?php
//usando libreria twig
require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);
// Create a product list
$error = "Inicio de sesion fallido";
// Render our view
echo $twig->render('logindata.php', ['errorsesion' => $error] );
?>