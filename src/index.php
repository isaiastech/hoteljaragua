<?php
include_once 'helpers/redirect.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Hotel Jaraguá</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="icons/favicon.png" type="image/gif" />
      <link rel="shortcut icon" href="icons/favicon.png" type="image/x-icon">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.php"><img width="150px" src="images/logo.png" alt="jaragua" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="<?= url('index') ?>">Hotel</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?= url('about') ?>">Sobre nós</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?= url('rooms') ?>">Nossos apartamentos</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?= url('gallery') ?>">Galeria</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?= url('blog') ?>">Lazer</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?= url('contact') ?>">Contato</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="first-slide" src="images/banner1.jpg" alt="First slide">
                  <div class="container">
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="second-slide" src="images/banner2.jpg" alt="Second slide">
               </div>
               <div class="carousel-item">
                  <img class="third-slide" src="images/banner3.jpg" alt="Third slide">
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
         </div>
      </section>
      <!-- end banner -->
      <!-- about -->
      <div class="about">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>Sobre nós</h2>
                     <h2>Tradição em servir bem!</h2>
                     <p>
                      Nossa missão é satisfazer as necessidades de nossos clientes superando suas expectativas.
                        Para que isso aconteça, estamos sempre investindo em melhorias e inovando para que nossos hóspedes tenham uma ótima estada. Tradição em servir bem, 
                        conforto e versatilidade caracterizam o Hotel Jaraguá como um dos tradicionais hotéis da região.
                     </p>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="images/about.jpg" alt="hotel jaragua"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- our_room -->
      <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Apartamentos Executivos</h2>
                     <p>Pensados para oferecer conforto, praticidade e bem-estar, os apartamentos do Hotel Jaraguá atendem desde 
                      hóspedes em viagem de negócios até famílias e casais que buscam uma estada tranquila e aconchegante.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="galeria/executivoDuplo/duplo02.jpg" alt="executivo single"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Executivo Single</h3>
                        <p>Apartamento executivo com cama de solteiro, ideal para viajantes de negócios.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="galeria/executivoDuplo/duplo01.jpg" alt="executivo duplo"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Executivo Duplo</h3>
                        <p>Apartamento executivo com 02 cama de solteiro, ideal para duas pessoas.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="galeria/executivoCasal/casal03.jpg" alt="executivo casal"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Executivo Casal</h3>
                        <p>Apartamento executivo com cama de casal, ideal para casais.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="galeria/executivoTriplo/triplo01.png" alt="Apartamento Executivo Triplo com uma cama de casal e duas camas de solteiro, decorado com móveis modernos e iluminação acolhedora"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Executivo Triplo</h3>
                        <p>Apartamento executivo com 02 camas de solteiro uma
                          de Casal, ideal para três pessoas.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="galeria/executivoTriplo/triplo02.png" alt="executivo quadruplo"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Executivo Quadruplo</h3>
                        <p>Apartamento executivo com capacidade para até quatro pessoas.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
       <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Apartamentos Superiores</h2>
                     <p>Os Apartamentos Superiores do Hotel Jaraguá foram 
                      projetados para quem busca mais conforto, sofisticação e uma experiência diferenciada durante a estada.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="galeria/superiorDuplo/suped01.jpg" alt="superior duplo"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Superior Single</h3>
                        <p>Apartamento superior com cama de solteiro.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="galeria/superiorDuplo/supd05.jpg" alt="superior duplo"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Superior Duplo</h3>
                        <p>Apartamento superior com 02 camas de solteiro, ideal para duas pessoas.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="galeria/superiorTriplo/supt01.jpg" alt="superior triplo"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Superior Triplo</h3>
                        <p>Apartamento superior com 03 camas, 01 de casal e 02 solteiro, 
                          ideal para três pessoas.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="galeria/superiorCasal/supe01.jpg" alt="superior casal"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Superior Casal</h3>
                        <p>Apartamento superior com cama de casal, ideal para casais.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="galeria/suite/su01.jpg" alt="suite"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Suíte</h3>
                        <p>Apartamento com dois ambientes, equipado com TV a cabo 40 polegadas LCD, 
                          telefone, frigobar, ar condicionado, cama box, secador de cabelo e roupão de banho</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="galeria/suite/su02.jpg" alt="superior single"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Suíte</h3>
                        <p>Apartamento com dois ambientes, equipado com TV a cabo 40 polegadas LCD, 
                          telefone, frigobar, ar condicionado, cama box, secador de cabelo e roupão de banho</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end our_room -->
      <!-- gallery -->
  <div class="gallery">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Lazer e Bem-estar</h2>
            </div>
            
         </div>
      </div>
      <div class="row">
         <?php
         // Caminho da pasta principal
         $baseDir = __DIR__ . '/lazer';
         $baseUrl = 'lazer';

         // Extensões permitidas
         $allowedExt = ['jpg', 'jpeg', 'png', 'webp'];

         // Percorre as subpastas
         foreach (scandir($baseDir) as $folder) {

            if ($folder === '.' || $folder === '..') {
               continue;
            }

            $folderPath = $baseDir . '/' . $folder;

            if (is_dir($folderPath)) {

               // Lê as imagens da subpasta
               foreach (scandir($folderPath) as $image) {

                  $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));

                  if (in_array($ext, $allowedExt)) {
                     $imageUrl = $baseUrl . '/' . $folder . '/' . $image;
                     ?>
                     <div class="col-md-3 col-sm-6">
                        <div class="gallery_img">
                           <figure>
                              <img src="<?= htmlspecialchars($imageUrl) ?>" 
                                   alt="<?= htmlspecialchars($folder) ?>" 
                                   class="img-fluid">
                           </figure>
                        </div>
                     </div>
                     <?php
                  }
               }
            }
         }
         ?>
      </div>
   </div>
</div>

      <!-- end gallery -->
      <!-- blog -->
      <div  class="blog">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Lazer</h2>
                     <p>Aqui, o seu bem-estar vem em primeiro lugar. Relaxe na sauna úmida ou seca, aproveite a piscina térmica em qualquer época do ano e desfrute de momentos agradáveis em nosso bar, com lanches 
                      saborosos e ambiente acolhedor. Tudo para tornar sua hospedagem ainda mais especial.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="blog_box">
                     <div class="blog_img">
                        <figure><img src="piscina/bar.jpg" alt="bar"/></figure>
                     </div>
                     <div class="blog_room">
                        <h3>Bar</h3>
                        <span>Bar com lanches</span>
                        <p>Nossa área de lazer conta com sauna úmida e seca, piscina térmica e bar com lanches, 
                          oferecendo conforto, relaxamento e praticidade para sua estadia.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="blog_box">
                     <div class="blog_img">
                        <figure><img src="piscina/piscina.jpg" alt="piscina"/></figure>
                     </div>
                     <div class="blog_room">
                        <h3>Piscina térmica</h3>
                        <span>sauna úmida e seca </span>
                        <p>Nossa área de lazer conta com sauna úmida e seca, piscina térmica e bar com lanches, 
                          oferecendo conforto, relaxamento e praticidade para sua estadia.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="blog_box">
                     <div class="blog_img">
                        <figure><img src="piscina/jogos.jpg" alt="sala de jogos"/></figure>
                     </div>
                     <div class="blog_room">
                        <h3>Sala de Jogos</h3>
                        <span>Sala de Jogos </span>
                        <p>Para momentos de lazer e descontração, o hotel dispõe de uma sala de jogos 
                          equipada, ideal para reunir amigos e familiares. Um espaço agradável para se divertir e relaxar durante a sua estadia.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end blog -->
      <!--  contact -->
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Contato</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Nome" type="type" name="Name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="Email"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Telefone" type="type" name="Phone Number">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Mensagem" type="type" Message="Name">Mensagem</textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Enviar</button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-6">
                  <div class="map_main">
                     <div class="map-responsive">
                        <iframe
                          src="https://www.google.com/maps?q=Hotel+Jaragua+Joaçaba+SC+Rua+Francisco+Lindner+350&output=embed" width="600" height="400"style="border:0;"allowfullscreen=""loading="lazy"
                          referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class=" col-md-4">
                     <h3>Contato</h3>
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Rua Francisco Lindner, 350 - Joaçaba/SC</li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i>49 35277300</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> jaragua@hoteljaraguareal.com.br</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h3>Menu</h3>
                     <ul class="link_menu">
                        <li class="active"><a href="#">Hotel</a></li>
                        <li><a href="about.php"> Sobre</a></li>
                        <li><a href="room.php">Nossos apartamentos</a></li>
                        <li><a href="gallery.php">Galeria</a></li>
                        <li><a href="blog.php">Lazer</a></li>
                        <li><a href="contact.php">Contato</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h3>Nossas Notícias</h3>
                     <form class="bottom_form">
                        <input class="enter" placeholder="Seu e-mail" type="text" name="Enter your email">
                        <button class="sub_btn">Assine</button>
                     </form>
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        
                        <p>
                        © <?php echo date("Y"); ?> Todos os direitos reservados. IsaiasTech
                        <br><br>
                        Desenvolvido por <a href="https://isaiastech.com.br/" target="_blank">IsaiasTech</a>
                        </p>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>