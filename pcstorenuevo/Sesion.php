<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TP proyecto</title>
    <link rel="stylesheet" href="css/estilos-login.css">
    <link rel="stylesheet" href="css/.css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>

<body>
<?php
    
    include_once('nav.php');

    $email = $password ="";
    $email_err = $password_err = "";
?>
   
    <div class="container-all">
        
        <div class="ctn-form">

            <img src="../img/logo2.png" alt="" class="logo">
            <h1 class="title">Iniciar Sesión</h1>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                <label for="">Email</label>
                <input type="text" name="email">
                <span class="msg-error"><?php echo $email_err; ?></span>
                <label for="">Contraseña</label>
                <input type="password" name="password">
                <span class="msg-error"><?php echo $password_err; ?></span>

                <input type="submit" value="Iniciar sesión">

            </form>

            <span class="text-footer">¿Aún no te has regsitrado?
                <a href="register.php">Registrate</a>
            </span>
        </div>

       

    </div>

</body>

</html>

<!-- Nuestro logo:
Cuando creamos el logo tratamos de usar una forma simple y fácil de recordar, por ello elegimos un logo tipo escalera, pero hecho de cuadrados que es una forma muy sencilla de recordar.

Tratamos de elegir 2 colores: el verde y el blanco. Nuestra idea era mostrar seguridad y tranquilidad.
El color verde trae tranquilidad y es comúnmente usado para la tranquilidad de los clientes. Estimula la armonía en el cerebro y fomenta un equilibrio que conduce a la decisión.
El blanco nosotros lo utilizamos para el nombre de la empresa, pero no queríamos que opacara al logo así que tratamos de usar un color no tan llamativo pero que a la vez transmita un sentimiento de seguridad por ello elegimos el blanco.
 -->
