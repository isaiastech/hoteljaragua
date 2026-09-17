<footer>
   <div class="footer">
      <div class="container">
         <div class="row">

            <div class="col-md-4">
               <h3>Contato</h3>
               <ul class="conta">
                  <li><i class="fa fa-map-marker"></i> Rua Francisco Lindner, 350 - Joaçaba/SC</li>
                  <li><i class="fa fa-mobile"></i> 49 3527-7300</li>
                  <li><i class="fa fa-envelope"></i>
                     <a href="mailto:jaragua@hoteljaraguareal.com.br">
                        jaragua@hoteljaraguareal.com.br
                     </a>
                  </li>
               </ul>
            </div>

            <div class="col-md-4">
               <h3>Menu</h3>
               <ul class="link_menu">
                  <li><a href="<?= url('index') ?>">Hotel</a></li>
                  <li><a href="<?= url('about') ?>">Sobre</a></li>
                  <li><a href="<?= url('room') ?>">Apartamentos</a></li>
                  <li><a href="<?= url('gallery') ?>">Galeria</a></li>
                  <li><a href="<?= url('blog') ?>">Lazer</a></li>
                  <li><a href="<?= url('contact') ?>">Contato</a></li>
               </ul>
            </div>

            <div class="col-md-4">
               <h3>Nossas Notícias</h3>
               <form class="bottom_form">
                  <input class="enter" placeholder="Seu e-mail" type="text">
                  <button class="sub_btn">Assine</button>
               </form>
            </div>

         </div>
      </div>

      <div class="copyright">
         <p>
            © <?= date('Y') ?> Todos os direitos reservados.<br>
            Desenvolvido por <a href="https://isaiastech.com.br" target="_blank">IsaiasTech</a>
         </p>
      </div>
   </div>
</footer>

<!-- JS -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
