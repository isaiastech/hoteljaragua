<?php
$pageTitle  = 'Hotel';
$activeMenu = 'index';

include_once 'helpers/redirect.php';
include_once 'includes/header.php';
include_once 'includes/rooms_config.php'; // <-- IMPORTANTE
?>
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
         </div>
         <div class="carousel-item">
            <img class="second-slide" src="images/banner2.jpg" alt="Second slide">
         </div>
         <div class="carousel-item">
            <img class="third-slide" src="images/banner3.jpg" alt="Third slide">
         </div>
      </div>
   </div>
</section>

<!-- SOBRE NÓS -->
<div class="about">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-5">
            <div class="titlepage">
               <h2>Sobre nós</h2>
               <h2>Tradição em servir bem!</h2>
               <p>
                  Nossa missão é satisfazer as necessidades de nossos clientes superando suas expectativas.
                  Para que isso aconteça, estamos sempre investindo em melhorias e inovando para que nossos hóspedes tenham uma ótima estada.
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

<!-- ===== APARTAMENTOS EXECUTIVOS (DINÂMICO) ===== -->
<div class="our_room">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Apartamentos Executivos</h2>
               <p>Pensados para oferecer conforto, praticidade e bem-estar...</p>
            </div>
         </div>
      </div>

      <div class="row">
      <?php foreach ($apartamentos['executivos'] as $apt): ?>
         <div class="col-md-4 col-sm-6">
            <div id="serv_hover" class="room">
               <div class="room_img">
                  <figure>
                     <img src="<?= $apt['imagem']; ?>" alt="<?= $apt['titulo']; ?>">
                  </figure>
               </div>
               <div class="bed_room">
                  <h3><?= $apt['titulo']; ?></h3>
                  <p><?= $apt['descricao']; ?></p>
               </div>
            </div>
         </div>
      <?php endforeach; ?>
      </div>
   </div>
</div>

<!-- ===== APARTAMENTOS SUPERIORES (DINÂMICO) ===== -->
<div class="our_room">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Apartamentos Superiores</h2>
               <p>Os Apartamentos Superiores do Hotel Jaraguá foram projetados para quem busca mais conforto...</p>
            </div>
         </div>
      </div>

      <div class="row">
      <?php foreach ($apartamentos['superiores'] as $apt): ?>
         <div class="col-md-4 col-sm-6">
            <div id="serv_hover" class="room">
               <div class="room_img">
                  <figure>
                     <img src="<?= $apt['imagem']; ?>" alt="<?= $apt['titulo']; ?>">
                  </figure>
               </div>
               <div class="bed_room">
                  <h3><?= $apt['titulo']; ?></h3>
                  <p><?= $apt['descricao']; ?></p>
               </div>
            </div>
         </div>
      <?php endforeach; ?>
      </div>
   </div>
</div>

<!-- GALERIA (você já tinha dinâmica — mantive igual) -->
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
         $baseDir = __DIR__ . '/lazer';
         $baseUrl = 'lazer';
         $allowedExt = ['jpg', 'jpeg', 'png', 'webp'];

         foreach (scandir($baseDir) as $folder) {
            if ($folder === '.' || $folder === '..') continue;

            $folderPath = $baseDir . '/' . $folder;

            if (is_dir($folderPath)) {
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

<!-- LAZER -->
<div class="blog">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Lazer</h2>
               <p>Aqui, o seu bem-estar vem em primeiro lugar...</p>
            </div>
         </div>
      </div>
   </div>
</div>

<?php include_once 'includes/footer.php'; ?>
