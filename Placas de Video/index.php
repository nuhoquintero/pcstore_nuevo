<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú lateral responsive - MagtimusPro</title>

    <link rel="stylesheet" href="css/estilos.css">

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
    <title>Carrito</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>


<h4>ㅤ</h4>
   

    <div id="lista-cursos" class="container">
        <h1 id="encabezado" class="encabezado"> </h1>
        <div class="row">
            <div class="four columns">
                <a href="../../caracteristas de los productos/componentes/plcas de video/GT 730 2GB/index.php"><div class="card">
                    <img src="img productos/HD EXTERNO 5TB SEAGATE FIRECUDA GAMING.jpg" class="imagen-curso u-full-width">
                    <div class="info-card"></a>
                        <h4>VIDEO GEFORCE GT 730 2GB EVGA GDDR5 LOW PROFILE</h4>
                       
                        <p class="precio"> <span class="u-pull-right ">$------------ </span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar Al Carrito</a>
                    </div>
                </div> <!--.card-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <a href="../../caracteristas de los productos/componentes/plcas de video/GTX 1630 4GB/index.php">
                        <img src="img productos/video-geforce-gtx-1630-4gb-ventus-xs-oc-0.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>VIDEO GEFORCE GTX 1630 4GB VENTUS XS OC</h4>
                           
                            <p class="precio"> <span class="u-pull-right ">$------------</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="2">Agregar Al Carrito</a>
                        </div>
                    </div></a>
            </div>
            <div class="four columns">
                    <div class="card">
                        <a href="../../caracteristas de los productos/componentes/plcas de video/GTX 1650 4GB/index.php">
                        <img src="img productos/video-geforce-gtx-1650-4gb-gigabyte-oc-single-fan-0.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>VIDEO GEFORCE GTX 1650 4GB GIGABYTE OC SINGLE FAN</h4>
                            <p class="precio"><span class="u-pull-right ">$------------</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="3">Agregar Al Carrito</a>
                        </div>
                    </div> </a><!--.card-->
            </div>

        </div> <!--.row-->
        <div class="row">
            <div class="four columns">
                <div class="card">
                    <a href="../../caracteristas de los productos/componentes/plcas de video/GTX 1650 SUPER 4GB/index.php">
                    <img src="img productos/video-geforce-gtx-1650-super-4gb-evga-sc-ultra-0.jpg" class="imagen-curso u-full-width">
                    <div class="info-card">
                        <h4>VIDEO GEFORCE GTX 1650 SUPER 4GB EVGA SC ULTRA</h4>
                       
                        <p class="precio"><span class="u-pull-right ">$------------</span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="4">Agregar Al Carrito</a>
                    </div>
                </div> <!--.card-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <a href="../../caracteristas de los productos/componentes/plcas de video/RTX 2060 6GB/index.php">
                        <img src="img productos/video-geforce-rtx-2060-6gb-zotac-twin-fan-0.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>VIDEO GEFORCE RTX 2060 6GB ZOTAC TWIN FAN</h4>
                            <p class="precio">  <span class="u-pull-right ">$------------</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="5">Agregar Al Carrito</a>
                        </div></a>
                    </div> <!--.card-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <a href="../../caracteristas de los productos/componentes/plcas de video/RTX 3070 TI 8GB MSI/index.php">
                        <img src="img productos/video-geforce-rtx-3070-ti-8gb-pny-xlr8-gaming-revel-epicx-0.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>VIDEO GEFORCE RTX 3070 TI 8GB PNY XLR8 GAMING REVEL EPIC-X</h4>
                            <p class="precio">  <span class="u-pull-right ">$------------</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="6">Agregar Al Carrito</a>
                        </div></a>
                    </div> <!--.card-->
            </div>
        </div> <!--.row-->
        <div class="row">
            <div class="four columns">
                <div class="card">
                    <a href="../../caracteristas de los productos/componentes/plcas de video/RTX 3070 TI 8GB/index.php">
                    <img src="img productos/video-geforce-rtx-3070-ti-8gb-pny-xlr8-gaming-revel-epicx-0.jpg" class="imagen-curso u-full-width">
                    <div class="info-card">
                        <h4>VIDEO GEFORCE RTX 3070 TI 8GB MSI GAMING X TRIO LHR</h4>
                        <p class="precio"> <span class="u-pull-right ">$------------</span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="7">Agregar Al Carrito</a>
                    </div></a>
                </div> <!--.card-->
            </div>
          
           
            </div> <!--.row-->
    </div>  

   



</body>
</html>


