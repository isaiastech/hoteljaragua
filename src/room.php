<?php
$pageTitle  = 'Nossos Apartamentos';
$activeMenu = 'room';

include_once 'helpers/redirect.php';
include_once 'includes/header.php';
include_once 'includes/rooms_config.php';
?>

<div class="back_re">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="title">
               <h2>Nossos Apartamentos</h2>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- ===== APARTAMENTOS EXECUTIVOS ===== -->
<div class="our_room">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Apartamentos Executivos</h2>
               <p>Pensados para oferecer conforto, praticidade e bem-estar, os apartamentos do Hotel Jaraguá atendem desde hóspedes em viagem de negócios até famílias e casais que buscam uma estada tranquila e aconchegante.</p>
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

<!-- ===== APARTAMENTOS SUPERIORES ===== -->
<div class="our_room">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Apartamentos Superiores</h2>
               <p>Os Apartamentos Superiores do Hotel Jaraguá foram projetados para quem busca mais conforto, sofisticação e uma experiência diferenciada durante a estada.</p>
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

<?php include_once 'includes/footer.php'; ?>
