<?php

    session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido - Divinas`s Style</title>
    <link rel="stylesheet" href="css/estilosLogin.css">
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
   
   <div class="ctn-welcome">
       
       <img src="images/logo-magtimus-small.png" alt="" class="logo-welcome">
       <h1 class="title-welcome">Bienvenido lo has <b>LOGRADOOOOOO!</b> accede a nuestro sitio y conoce sobre nosotros.Adelante</h1>
       <a href="cerrar-sesion.php" class="close-sesion">Cerrar Sesión</a>
       <a href="index.html" class="close-sesion">Ir a Pagina Principal</a>
       
   </div>
   
    
</body>
</html>