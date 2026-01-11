<?php
$pageTitle = 'Galeria';
$activeMenu = 'gallery';
include_once 'helpers/redirect.php';
include_once 'includes/header.php';
?>
      <!-- end header inner -->
      <!-- end header -->
      <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                    <h2>Galeria</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- gallery -->
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
                                   alt="Área de lazer - <?= htmlspecialchars($folder) ?>"
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
<?php include_once 'includes/footer.php'; ?>