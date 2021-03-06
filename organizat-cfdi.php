<?php 
session_start();
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$inputs = isset($_SESSION['inputs']) ? $_SESSION['inputs'] : [];
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <link rel="shortcut icon" href="startup/flat-ui/images/favicon.ico">

        <link rel="stylesheet" href="startup/flat-ui/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="startup/flat-ui/css/flat-ui.css">
        <!-- Using only with Flat-UI (free)-->
        <link rel="stylesheet" href="startup/common-files/css/icon-font.css">
        <!-- end -->
        <link rel="stylesheet" href="startup/common-files/css/animations.css">
        <link rel="stylesheet" href="static/css/style.css">
        <!-- custom -->
        <link rel="stylesheet" href="startup/common-files/fonts/picons.css">
        <link rel="stylesheet" href="startup/common-files/css/owl.carousel.css">
        <link rel="stylesheet" href="startup/common-files/css/owl.theme.css">
        <link rel="stylesheet" href="startup/common-files/css/bootsnipp.css">
        <link rel="stylesheet" href="startup/common-files/css/adaptive-modal.css">
        <link rel="stylesheet" href="startup/common-files/css/form-label.css">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        
        <title>OrganizaT-CFDI</title>
    </head>
    <body>

<?php if (!empty($errors)) {?>

  <p class="bg-danger" style="padding30px;text-align:center;color:white;"><?php echo implode('<br>', $errors); ?></p>

<?php } elseif(empty($errors)) { ?>

    <p class="bg-success" style="padding30px;text-align:center;color:white;">Tu correo se mando.</p>
    
<?php } ?>

<div class="page-wrapper">
<header class="header-17" id="home">
    <div class="container">
        <div class="row">
            <div class="navbar col-sm-12" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle"></button>
                    <a class="brand" href="#">
                        <img src="startup/common-files/img/header/impex-logo.jpg" width="200" height="auto" alt="">
                    </a>
                </div>

                <div class="collapse navbar-collapse pull-right">
                    <ul class="nav pull-left">
                        <li><a href="http://solucionesimpex.com/">Soluciones IMPEX</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-background"></div>
</header>

<!-- dependency for scoll and menu animation -->
        <div id="h-17-pt-1" class="page-transitions pt-perspective"></div>
<!-- dependency for scroll and menu animation -->

<div class="organizat-banner">
    <br><br>
    <h1 class="head text-center" style="color:white!important;font-size:80px;">OrganizaT - CFDI</h1>
    <h3 class="head text-center" style="color:white!important;font-size:60px;">El Asistente Contable Digital</h3>
    <h4 class="head text-center" style="color:white!important;font-size:40px;">Es una App de organización de comprobantes fiscales digitales.</h4>
    <br><br>
</div>

<section class="bg-dark">
  <div class="container">
    <div class="row">
    <br><br>
    <div class="col-sm-4"></div>
    <div class="col-sm-4 ot-title">
      <img src="startup/common-files/img/content-large/organizat-icon.png" alt="" width="50" height="50" class="notMobile">
      <h2 class="text-center">OrganizaT CDFI</h2>
      <br>
    </div>
    <div class="col-sm-4"></div>
    <div class="col-sm-12 links">
        <h6><a href="https://www.microsoft.com/es-mx/download/details.aspx?id=17851" target="_blank">Microsoft .NET Framework 4</a></h6>
        <h6><a href="">Driver Sentinel</a></h6>
        <h6><a href="">App OrganizaT-CFDI 3.41 P</a></h6>
        <h6><a href="">Folleto</a></h6>
        <h6><a href="">Guía de Instalación</a></h6>
        <h6><a href="https://www.youtube.com/channel/UC4BMzrJ8X_CyoVHIlU3gCsg" target="_blank">Canal Youtube</a></h6>
        <h6><a href="https://www.facebook.com/organizat.solucionesimpex" target="_blank">Fan Page Facebook</a></h6>
    </div>
    <br><br><br><br>

      <div class="col-sm-6 organizat-card">
        <div class="col-sm-2">
          <i class="icon-picons-mouse"></i>
        </div>
        <div class="col-sm-10">
          <h6>¿Qué es el App OrganizaT CDFI?</h6>

            Es una aplicación de organización y respaldo de facturas electrónicas / recibos de nómina (CFDI´s) tal y como lo solicita el SAT.

        </div>
      </div>

      <div class="col-sm-6 organizat-card">
        <div class="col-sm-2">
          <i class="icon-picons-bulb-2"></i>
        </div>
        <div class="col-sm-10">
          <h6>¿Qué es el Servicio OrganizaT CDFI?</h6>

            Es una aplicación de organización y respaldo de facturas electrónicas / recibos de nómina (CFDI´s) tal y como lo solicita el SAT.

        </div>
      </div>

      <div class="col-sm-6 organizat-card">
        <div class="col-sm-2">
          <i class="icon-picons-configuration"></i>
        </div>
        <div class="col-sm-10">
          <h6>¿Para qué me sirve?</h6>

            Para organizar la documentación contable, garantizar el cumplimiento con la normatividad y tener un plan de continuidad en caso de algún incidente.

        </div>
      </div>

      <div class="col-sm-6 organizat-card">
        <div class="col-sm-2">
          <i class="icon-picons-chart-2"></i>
        </div>
        <div class="col-sm-10">
          <h6>Beneficios</h6>

            Organizacion Total. Por comprobantes electrónicos emitidos, recibidos, recibos de nómina, pólizas, declaraciones impuestos, comunicados de la autoridad. 
            <br>
            Cumplir con la normatividad(CFDI). 
            <br>
            Tener un plan de continuidad (Plan de recuperacion ante desastres). 
            <br>
            Transformar el proceso de la documentación contable en información organizada, disponible y de fácil acceso. 

        </div>
      </div>

      <div class="col-sm-12 organizat-card">
        <div class="col-sm-1">
          <i class="icon-picons-law"></i>
        </div>
        <div class="col-sm-10">
          <h6>El SAT Dice...</h6>

            “… los contribuyentes que emitan y reciban los CFDI, deberán almacenarlos en medios magnéticos, ópticos o de cualquier otra tecnología, debiendo, además, cumplir con los requisitos a que se refieren … así como tener y poner a disposición de las autoridades fiscales, un sistema informático de consulta que permita a estas últimas, localizar los comprobantes fiscales digitales expedidos y recibidos, así como la revisión del contenido de los mismos”. Fuente: Regla I.2.23.4.3 1ª. RMF 14/09/2010. 
            <br><br>
            ¿Qué es? Es un servicio de organización, digitalización y respaldo de documentación fiscal, financiera y contable. 
            <br><br>
            ¿Para qué me sirve? Para organizar la documentación contable, garantizar el cumplimiento con la normatividad y tener un plan de continuidad en caso de algun incidente.

        </div>
      </div>

    </div>
  </div>
</section>

<!-- si quieres adregar videos de YouTube: 1. click a share 2. click embed 3. copy y paste link 4. adrega http: en el src atributo 5. adrge ?&showinfo=0&autohide=1 en el fin de el link -->
<!-- <div class="item"><iframe width="560" height="315" src="http://www.youtube.com/embed/md_CA2xSo64?&showinfo=0" frameborder="0" allowfullscreen></iframe></div> -->


<section class="organizat-slider bg-light" id="intro">
    <div class="container">
      <h3 class="text-center">Presentación</h3>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
          
            <div class="item active">
              <img src="startup/common-files/img/content-large/app-slider-1.png" width="100%" height="auto">
            </div><!-- End Item -->
     
             <div class="item">
              <img src="startup/common-files/img/content-large/app-slider-2.png" width="100%" height="auto">
            </div><!-- End Item -->
            
            <div class="item">
              <img src="startup/common-files/img/content-large/app-slider-3.png" width="100%" height="auto">
            </div><!-- End Item -->

            <div class="item">
              <img src="startup/common-files/img/content-large/app-slider-4.png" width="100%" height="auto">
            </div><!-- End Item -->

            <div class="item">
              <img src="startup/common-files/img/content-large/app-slider-5.png" width="100%" height="auto">
            </div><!-- End Item -->

            <div class="item">
              <img src="startup/common-files/img/content-large/app-slider-6.png" width="100%" height="auto">
            </div><!-- End Item -->

            <div class="item">
              <img src="startup/common-files/img/content-large/app-slider-7.png" width="100%" height="auto">
            </div><!-- End Item -->

            <div class="item">
              <img src="startup/common-files/img/content-large/org2.png" width="100%" height="auto">
            </div><!-- End Item -->
     
             <div class="item">
              <img src="startup/common-files/img/content-large/org3.png" width="100%" height="auto">
            </div><!-- End Item -->
            
            <div class="item">
              <img src="startup/common-files/img/content-large/org1.png" width="100%" height="auto">
            </div><!-- End Item -->
                    
          </div><!-- End Carousel Inner -->


            <ul class="nav nav-pills nav-justified">

              <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#">Intro 1</a>
              </li>

              <li data-target="#myCarousel" data-slide-to="1"><a href="#">Intro 2</a>
              </li>

              <li data-target="#myCarousel" data-slide-to="2"><a href="#">Intro 3</a>
              </li>

              <li data-target="#myCarousel" data-slide-to="3"><a href="#">Intro 4</a>
              </li>

              <li data-target="#myCarousel" data-slide-to="4"><a href="#">Intro 5</a>
              </li>

              <li data-target="#myCarousel" data-slide-to="5"><a href="#">Intro 6</a>
              </li>

              <li data-target="#myCarousel" data-slide-to="6"><a href="#">Intro 7</a>
              </li>

              <li data-target="#myCarousel" data-slide-to="7"><a href="#">Proceso 1</a>
              </li>

              <li data-target="#myCarousel" data-slide-to="8"><a href="#">Proceso 2</a>
              </li>

              <li data-target="#myCarousel" data-slide-to="9"><a href="#">Proceso 3</a>

            </ul>


        </div><!-- End Carousel -->
    </div>
</section>


<div class="bg-dark"> 
    <br><br>
    <div id="owl-demo">
      <div class="item"><iframe width="560" height="315" src="http://www.youtube.com/embed/md_CA2xSo64?&showinfo=0&autohide=1" frameborder="0" allowfullscreen></iframe></div>
      <div class="item"><iframe width="560" height="315" src="http://www.youtube.com/embed/SJLw5RhDdEA?&showinfo=0&autohide=1" frameborder="0" allowfullscreen></iframe></div>
      <div class="item"><iframe width="560" height="315" src="http://www.youtube.com/embed/7_e86sb4Iz0?&showinfo=0&autohide=1" frameborder="0" allowfullscreen></iframe></div>
      <div class="item"><iframe width="560" height="315" src="http://www.youtube.com/embed/-EEWFr6laYE?&showinfo=0&autohide=1" frameborder="0" allowfullscreen></iframe></div>
      <div class="item"><iframe width="420" height="315" src="http://www.youtube.com/embed/hPyGboBeZTI?&showinfo=0&autohide=1" frameborder="0" allowfullscreen></iframe></div>
    </div>
    <br><br>
</div>



<footer class="footer-10">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form class="form-horizontal" role="form" action="email.php" method="post">
                  <div class="form-group">
                    <div class="col-sm-10">
                      <input name="subject" class="form-control" id="" placeholder="Tema" type="text" <?php echo isset($inputs['subject']) ? ' value="'.$inputs['subject'] .'"' : '' ?> >
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-10">
                      <input name="email" class="form-control" id="" placeholder="Correo" type="text" <?php echo isset($inputs['email']) ? ' value="'.$inputs['email'] .'"' : '' ?>>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-10">
                      <textarea name="msg" class="form-control" rows="3" placeholder="Mensaje" type="text" ><?php echo isset($inputs['msg']) ? $inputs['msg'] : '' ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-10">
                      <button type="submit" name="submit" value="submit" class="btn btn-default pull-right">Send</button>
                    </div>
                  </div>
                </form>
            </div>
            <div class="col-sm-4">
                <div class="box box-first">
                    <h6>Sucursales</h6>
                    <p>Mexico DF | Mexicali BC | Tijuana BC | Cuernavaca Mor</p>
                </div>
                <br class="hidden-xs">
                <div class="box">
                    <h6>Contacto</h6>
                    <p>
                        T. +52 (55) 8421-8913 <br>
                        E. info@solucionesimpex.com <br>
                        <a href="https://twitter.com/ghernandezs" target="_blank">
                            <i class="fa fa-twitter" style="font-size:20px; margin-right:5px;"></i>
                        </a>
                        <a href="https://www.facebook.com/organizat.solucionesimpex" target="_blank">
                            <i class="fa fa-facebook" style="font-size:20px; margin-right:5px;"></i>
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-sm-4 box">
                <h6>Menu</h6>
                <p>
                    <a href="">Inicio</a> <br>
                    <a href="">Quienes Somos</a> <br>
                    <a href="">Soluciones</a> <br>
                    <a href="">Organiza T</a> <br>
                    <a href="">Casos de Excito</a> <br>
                </p>
            </div>
        </div>
    </div>
</footer>

  
</div> <!-- page wrapper --> 

            <!-- Placed at the end of the document so the pages load faster -->
            <script src="startup/common-files/js/jquery-1.10.2.min.js"></script>
            <script src="startup/common-files/js/jquery.bxslider.min.js"></script>
            <script src="startup/common-files/js/jquery.scrollTo-1.4.3.1-min.js"></script>
            <script src="startup/common-files/js/jquery.sharrre.min.js"></script>
            <script src="startup/flat-ui/js/bootstrap.min.js"></script>
            <script src="startup/common-files/js/masonry.pkgd.min.js"></script>
            <script src="startup/common-files/js/modernizr.custom.js"></script>
            <script src="startup/common-files/js/page-transitions.js"></script>
            <script src="startup/common-files/js/easing.min.js"></script>
            <script src="startup/common-files/js/jquery.svg.js"></script>
            <script src="startup/common-files/js/jquery.svganim.js"></script>
            <script src="startup/common-files/js/jquery.backgroundvideo.min.js"></script>
            <script src="startup/common-files/js/froogaloop.min.js"></script>
            <script src="startup/common-files/js/startup-kit.js"></script>
           <!-- CUSTOM FILES -->
            <script src="startup/common-files/js/custom.js"></script>
            <script src="startup/common-files/js/scroll-me.js"></script>
            <script src="startup/common-files/js/sticky-bar.js"></script>
            <script src="startup/common-files/js/dot-nav.js"></script>
            <script src="startup/common-files/js/owl.carousel.js"></script>
            <script src="startup/common-files/js/adaptive-modal.js"></script>
            <script src="startup/common-files/js/form-label.js"></script>
            <script src="startup/common-files/js/jquery.parallax.min.js"></script>
            <script src="static/script.js"></script>

            <script type="text/javascript">
            // INIT
            headerBkgd();
            mobile();
            toggleSlider();
            smoothScroll('div.features a');
             $("#owl-demo").owlCarousel({
 
                  //autoPlay: 3000, //Set AutoPlay to 3 seconds
             
                  items : 3,
                  itemsDesktop : [1199,3],
                  itemsDesktopSmall : [979,3]
             
              });
             
            </script>
    </body>
</html>

<?php 
session_destroy();
 ?>
