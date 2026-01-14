<?php
$pageTitle  = 'Contato';
$activeMenu = 'contact';

include_once 'helpers/redirect.php';
include_once 'includes/header.php';
?>

      <!-- end header -->
     <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                      <h2>Entre em Contato</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
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
                           <input class="contactus" placeholder="Nome" type="text" name="name">
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="email" name="email">
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Telefone" type="text" name="phone">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Mensagem" type="text" name="message">Mensagem</textarea>
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
<?php include_once 'includes/footer.php'; ?>