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
?>
<?php
echo "Bienvenido ".$_SESSION["usuario"];
?>