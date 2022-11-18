<?php

    session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../index.html");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="../css/estilos.css">
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
<a href="../pc store 2/index.php">volver</a>

   <div class="ctn-welcome">
       
       <img src="images/image.png" alt="" class="logo-welcome">
       <h1 class="title-welcome">Bienvenido, ya puedes ver nuestros <b>productos</b></h1>
       <a href="../index.php" class="close-sesion">Ver productos</a>
       
   </div>
   
    
</body>
</html>