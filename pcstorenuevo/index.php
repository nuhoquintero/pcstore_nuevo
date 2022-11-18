<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú lateral responsive - MagtimusPro</title>

    <link rel="stylesheet" href="../Placas de Video/css/estilos.css">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
        <img src="PC_STORE__3_-removebg-preview.png" width="180" height="180" alt="">
        <div class="slide-container swiper">
       <li class="search-icon">
            <input type="search" placeholder="Search">
            <label class="icon">
            <span class="fas fa-search"></span>
            </label>
         </li>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
           <!--no se que poner aca --> 
          
           
        </div>

        <div class="options__menu">	

            <?php

            session_start();
        
        if(isset($_SESSION["loggedin"])){   
            echo('                
            <a href="../../pc store 2/sesion/cerrar-sesion.php">
                <div class="option"  class="selected">
                    <img src="img/Iconos_Mesa de trabajo 1-02.png" width="30" height="30" alt="">
                    <h4>ㅤCerrar sesion</h4>
                </div>
            </a> ');
        }
                    ?>
        
                      <a href="../../pc store 2/sesion/index.php">
                        <div class="option">
                            <img src="img/icn-nav-user.png" width="30" height="30" alt="">
                            <h4>ㅤIniciar Sesión</h4>
                        </div>
                    </a> 
        

            <a href="#">
                <div class="option">
                    <img src="img/armarpc.svg" width="30" height="30" alt="">
                    <h4>ㅤPCs armadas</h4>
                </div>
            </a>
            
            <a href="#" class="selected">
                <div class="option">
                    <img src="img/componentes.svg" width="30" height="30" alt="">
                    <h4>ㅤComponentes</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <img src="img/gamer-keyboard.png" width="30" height="30" alt="">
                    <h4>ㅤTeclados</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <img src="img/gaming-chair.png" width="30" height="30" alt="">
                    <h4>ㅤSillas</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <img src="img/mouse_1.png" width="30" height="30" alt="">
                    <h4>ㅤNosotros</h4>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <img src="img/palanca-de-mando.png" width="30" height="30" alt="">
                    <h4>ㅤMandos</h4>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <img src="img/parlantes.png" width="30" height="30" alt="">
                    <h4>ㅤParlantes</h4>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <img src="img/monitor.png" width="30" height="30" alt="">
                    <h4>ㅤMonitor</h4>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <img src="img/auris.png" width="30" height="30" alt="">
                    <h4>ㅤAuriculares</h4>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <img src="img/Phone.svg" width="30" height="30" alt="">
                    <h4>ㅤTelefonos</h4>
                </div>
            </a>
            <a href="#" >
                <div class="option">
                    <img src="img/mouse-pad.png" width="30" height="30" alt="">
                    <h4>ㅤMouse Pad</h4>
                </div>
            </a>

        </div>

    </div>
    <script src="js/script.js"></script>
    

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <?php
        include_once('layout/menu.php');
    ?>

    <main>
        <?php
            $response = json_decode(file_get_contents('http://localhost/pcstore_nuevo/pcstorenuevo/api/productos/api-producto.php?categoria=teclado'), true);
            if($response['statuscode'] == 200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
            }else{
                
            }
        ?>
    </main>

    <script src="js/main.js"></script>
</body>
</html>