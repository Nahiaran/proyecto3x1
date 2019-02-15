<?php

$dbhost = 'localhost';
$dbname = 'proyecto3x1';
$dbuser = 'root';
$dbpass = '';

try{

    $dbcon = new PDO("mysql:host={$dbhost};dbname={$dbname}",$dbuser,$dbpass);
    $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $ex){
    die($ex->getMesage());
}

$stmt = $dbcon->prepare("SELECT nombre,visitantes FROM ciudades");
$stmt->execute();
$row1 = [];
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
        extract($row);
        $row1[]= ['nombre' => $nombre, 'visitantes' => $visitantes];
    }
    echo json_encode($row1);
?>
